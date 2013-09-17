<?php

require_once('config.php');

//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br/><br/>";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br/><br/>";
        die();
    }
// table name 
$tbl_name=iv_registrants;

// Random confirmation code 
//$confirm_code=md5(uniqid(rand())); 

// values sent from form 
$name=$_POST['name'];
$email=$_POST['email'];
$phnumber=$_POST['phnumber'];
$password=$_POST['password'];

//Sanitize the POST values
	$name = clean($_POST['name']);
	$email = clean($_POST['email']);
	$phnumber = clean($_POST['phnumber']);
	$password = clean($_POST['password']);
	
//Input Validations
	if($name == '') {
		died('You cannot have an empty username. Please choose a username');
	}
	
if( !preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/i", $email) )
{
    died('please enter a valid  email id');
}
	if(!preg_match("/^[0-9]{10}$/", $phnumber)) {
	died('Please enter a valid 10 digit mobile number');
		
}
	if($password == '') {
	died('Please enter your Roll number');
		
	}
//Check for duplicate login ID
	if($name != '') {
		$qry = "SELECT * FROM iv_registrants WHERE rollnum='$password'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'You have been already registered';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	if($email != '') {
		$qry = "SELECT * FROM iv_registrants WHERE email='$email'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'The email id is already registered... Please use that';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: iv.html");
		exit();
	}	

// Insert data into database 
$sql="INSERT INTO $tbl_name(name, rollnum, email, phnumber)VALUES('$name', '$password', '$email', '$phnumber')";
$result=mysql_query($sql) ;
// get the registration number
$sql = "SELECT id FROM iv_registrants WHERE rollnum='$password'";
$res = mysql_query($sql) or die("Could not retrieve the id");
$qqq=mysql_fetch_assoc($res) or die("fetching error");

//mysql_free_result($result);

// if suceesfully inserted data into database, send confirmation link to email 
if($result){
// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to=$email;

// Your subject
$subject="Your Industrial Visit id";

// From
$header="from: ISTE NITC";

// Your message
$message="Thank you for registering for the Industrial Visit. Your registration number is IV13".$qqq["id"]."\r\n";

// send email
$sentmail = mail($to,$subject,$message,$header);
}

// if not found 
else {
echo "Not found your email in our database";
}

// if your email succesfully sent
if($sentmail){
echo "Your registration has been successful.<br/>";
echo "Your id is. IV13".$qqq["id"];
}
else {
echo "Cannot send Confirmation link to your e-mail address. Your registration number is IV13".$qqq["id"]."\r\n";
}
?>
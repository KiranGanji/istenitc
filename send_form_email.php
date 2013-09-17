<!DOCTYPE HTML>
<html>
  <head>
    <title></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <script src="../iv/js/jquery.min.js"></script>
    <script src="../iv/js/config.js"></script>
    <script src="../iv/js/skel.min.js"></script>
    <script src="../iv/js/skel-panels.min.js"></script>
    <script src="../iv/js/modernizr.custom.js"></script>
      <link rel="stylesheet" type="text/css" href="iv/css/skel-noscript.css" />
      <link rel="stylesheet" type="text/css" href="iv/css/style.css" />
      <link rel="stylesheet" type="text/css" href="iv/css/style-desktop.css" />
      <link rel="stylesheet" type="text/css" href="iv/css/component.css" />
    
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
  </head>
  <body class="subpage">

    <!-- Header -->
      <div id="header">
      <div class="outlayer">
        <section class="color-1">
        <nav class="cl-effect-14">
          <a href="index.html">Home</a>
          <a href="events/index.html">Events</a>
          <a href="iv/team.html">Our Team</a>
          <a href="#">Contact Us</a>
          <a href="gallery/index.html">Gallery</a>
        </nav>
      </section>
      </div>
    </div>

    <!-- Content -->
      <div id="content-wrapper">
        <div id="content">
          <div class="container">
            <div class="row">
              <div class="9u">
                
                <section>
                 <?php

require_once('iv/config.php');

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
$tbl_name=website_contacts;

// Random confirmation code 
//$confirm_code=md5(uniqid(rand())); 

// values sent from form 
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$email=$_POST['email'];
$phnumber=$_POST['phnumber'];
$message=$_POST['comments'];

//Sanitize the POST values
  $firstname = clean($_POST['first_name']);
  $lastname = clean($_POST['last_name']);
  $email = clean($_POST['email']);
  $phnumber = clean($_POST['phnumber']);
  $message = clean($_POST['comments']);
  
//Input Validations
  if($firstname == '') {
    died('You cannot have an empty first name. Please choose a first name');
  }
  if($lastname == '') {
    died('You cannot have an empty last name. Please choose a  last name');
  }
  
if( !preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/i", $email) )
{
    died('please enter a valid  email id');
}
  if(!preg_match("/^[0-9]{10}$/", $phnumber)) {
  died('Please enter a valid 10 digit mobile number');
    
}
  if($message == '') {
  died('Please type a message to us');
    
  }

  //If there are input validations, redirect back to the registration form
  if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: contact.html");
    exit();
  } 

// Insert data into database 
$sql="INSERT INTO $tbl_name(first_name, last_name, email, phnumber,message)VALUES('$firstname', '$lastname', '$email', '$phnumber', '$message')";
$result=mysql_query($sql) ;

// if suceesfully inserted data into database, notify them 
if($result){
echo "Thank You for contacting us. We will contact you as early as possible";
}
else {
echo "Cannot connect to our server due to some unknown reasons. Our team will be working on it. Sorry for inconvinience.<br/>You can mail us at istenitcmail@gmail.com if the message  is urgent.<br/>Thank you for your patience ";
}
?>

              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Copyright -->
      <div id="copyright">
        &copy; ISTE NITC Students' Chapter| Site Designed by <a href="http://kiranganji.co.nf">Kiran Ganji</a>
      </div>

  </body>
</html>
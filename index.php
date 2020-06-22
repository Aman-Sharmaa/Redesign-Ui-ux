<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css"><link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Suez+One&display=swap" rel="stylesheet">

</head>
<body>

<div class="topnav" id="myTopnav">
  <a class="active"><img src="logo.png"></a>
  <a  href="#home">Home</a>
  <a href="#news">About us</a>
  <a href="#contact">Software Services</a>
  <a href="#about">Training Services</a>
  <a href="courses.php">Cources</a>
  <a href="#about">Event</a>
  <a href="#about">Contact Us </a>
  <a href="#about">Pay Now</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <a href="#"><?php  if (isset($_SESSION['username'])) : ?>
    Welcome Back <strong><?php echo $_SESSION['username']; ?></strong>
    <?php endif ?></a>
<a href="index.php?logout='1'" ><font color="red">logout</font></a>
 
</div>






<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>





</body>
</html>
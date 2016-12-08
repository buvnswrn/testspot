<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome To Checkers!!</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>
<body>
<header>
<nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="pull-left visible-md visible-lg">
            <div></div>
          </a>

          <div class="navbar-brand">
            <a href="index.html"><h1>Testers Spot</h1></a>
           
          </div>
           <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
	            <li id="navHomeButton" class="visible-xs active">
	              <a href="index.html">
	                <span></span> Home</a>
	            </li>

	            <li>
	              <a id="login">
	                <span></span><br class="hidden-xs">Login</a>
	            </li>
	        	<li>
	        	<a id="signin">
	        		<span></span><br class="hidden-xs">Signup</a>
	        	</li>
	        </ul>
	    </div>

	</div>
</nav>	
</header>
<form method="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
	<div id="myModal" class="modal">
		<!--modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">x</span>
				<h2 class="brl">Login Page</h2>
			</div>
			<div class="modal-body"><h4 class="spl">
				Username:<input type="text" name="username"><br></h4>
				<br><h4 class="spl">
				Password:<input type="Password" name="Password">
			<br><br></h4>
			</div>
			<div class="modal-footer"><div class="buttons">
				<input type="submit" name="loginsubmit" value="Login">
				<input type="reset" value="Reset"></div>
			</div>
		</div>
	</div>
</form>

<?php 
if(isset($_POST['loginsubmit'])){
	echo ("lo");
$name=$_POST("username");
$password=$_POST("password");
echo ("hai");
$tab=mysqli_query($mysqli,("select * from `signup` where `username`='$name' and `password`='$password' "));
$res=mysqli_fetch_array($tab,MYSQLI_BOTH);
if(mysqli_num_rows($res)==0){
die ("invalid");
}
else {
	echo ("welcome");}
}	?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div id="signup" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="signinclose">x</span>
			<h2 class="brl">Signin Page</h2>
		</div>
		<div class="modal-body"><h4 class="spl">
			UserName:<input type="text" name="username"><br></h4>
			<br><h4 class="spl">
			email:<input type="mail" name="email"><br><br>
			Password:<input type="Password" name="Password">
			<br><br>
			Retype Password:<input type="Password" name="Password">
			<br><br>
			</h4>
		</div>
		<div class="modal-footer"><div class="buttons">
			<input type="submit" name="submit" value="SignIn">
			<input type="Reset"></div>
		</div>
	</div>
</div>
</form>
<?php
if(isset($_POST['submit'])){
$username="root";
$password="";
$hostname="localhost";
$mysqli=new mysqli("localhost","root","","testerspot");
if($mysqli->connect_errno)
{
	echo "Failed to connect(" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}
mysqli_select_db($mysqli,"testerspot") or die ("unable to connect");
mysqli_query($mysqli,"select * from signup") or die ("unable to fetch");
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$retype=$_POST['retypepassword'];
if($retype!= $password)
{	
die ("please check your password");

$res=mysqli_query($mysqli,"INSERT INTO `signup`(`username`,`email`,`password`) VALUES ('$username','$email','$password')");}
}
?>
	<div id="body-img">
		<img src="img/hand.png">
	</div>
<footer class="panel-footer">
	<div class="container">
		<div class="row">
			<section id="Terms" class="col-sm-4">
				<span><a>Terms of Services</a></span>
			</section>
			<hr class="visible-xs">
			<section id="aboutus" class="col-sm-4">
				<span><a>About us</a></span>
				<hr class="visible-xs">
			</section>
			<section id="learn" class="col-sm-4">
				<span><a>Learn</a></span>
				<hr class="visible-xs">
			</section>
		</div>
	</div>
</footer>
 <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!--<script src="js/ajax-utils.js"></script>-->
  <script src="js/script.js"></script>
</body>
</html>
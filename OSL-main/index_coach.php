<?php
session_start();
if(isset($_SESSION['user']))
{

 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href='style.css' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<style>
body
{
  background-image: url('football.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
  background-size: cover;
}
</style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Coach</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index_coach.html">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="coa_profile.html">Update Profile</a></li>
			<li><a href="coa_view.php">View Profile</a></li>
			 <li><a href="#">Player Statistic</a></li>
			 <li><a href="coach_clublistview.php">View Club</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
</body>
</html>
<?php }
else {
	header("location:index.php");
}
 ?>


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
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Club</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index_club.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="club_profile.html">Update Profile</a></li>
    			<li><a href="club_view.php">View Profile</a></li>
    			 <li><a href="plr_req.php">View Player Request</a></li>
    			 <li><a href="coach_req.php">View Coach Request</a></li>
    			  <li><a href="view_approvedplr.php">View Players</a></li>
    				<li><a href="view_approvedcoach.php">View Coach</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  <style>
  body{

    background-color: #5ca057;
  }
tr{
background-color: #5ca057;

}

</style>
<div>
    <form action="club_profile.php" method="POST">
  <table class="table  table-advance " style="margin:100px 200px;  width:50%; border:3px solid black;">
   <?php
   session_start();
   include('database.php');
  $a=$_SESSION['user'];
  $query="select cl_name, cl_username, cl_email, cl_address, cl_sponsor, cl_reg_number, cl_place, cl_phone from club_reg_tbl where cl_reg_id='$a'";
  $result=mysqli_query($con,$query);
  echo "<h2><center>Club Profile View </center></h2>";
  echo "<tr><th></th><th>Name</th><th>Username</th><th>Email</th><th>Address</th><th>Sponsor</th><th>Register Number</th><th>City</th><th>Phone</th></tr>";
  while($r=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><th>".$r['cl_name'].
       "</td><td>".$r['cl_username'].
       "</td><td>".$r['cl_email'].
       "</td><td>".$r['cl_address'].
       "</td><td>".$r['cl_sponsor'].
       "</td><td>".$r['cl_reg_number'].
       "</td><td>".$r['cl_place'].
       "</td><td>".$r['cl_phone']."</td></th>";


echo "</tr>";
}
   ?>
</table>
</form>
</div>
</body>
</html>

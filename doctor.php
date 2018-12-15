<?php
session_start();
$con=mysqli_connect('localhost','testuser01', 'cYmlvDTJUifDWAgF','registration') ;
// Check
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries
$result= mysqli_query($con,"SELECT * FROM users where type='student'");
echo"        name            ";
echo"     id      ";
echo"     grade      ";
while ($row=mysqli_fetch_array($result))
{
  echo $row['username'];
  echo"           ";
  echo"           ";
  echo $row['grade'];
  echo"           ";
  echo"           ";
  echo"       ";
  echo"           ";
  echo $row['id'];
  echo "<br>";
}


if (isset($_POST['logout_btn'])) {
  session_destroy();
  // unset($_SESSION['username']);
  header("location: login.php");
}
mysqli_close($con);
?>
<html>
<body>
  <form >

<div class="input-group">
  <button type="button" class="btn" name="addgrade" onclick="window.location.href='updategrade.php'">Add grade</button>
</div>
<div class="input-group">

</div>
</form>
<form method="post" action="doctor.php">
<input type="submit" name="logout_btn" value="Log Out" />
<!-- tb sanya kda tyt -->
</form>
</body>
</html>

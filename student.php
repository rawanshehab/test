
<?php
	session_start();
$con=mysqli_connect('localhost','testuser01', 'cYmlvDTJUifDWAgF','registration') ;
// Check

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries

$result= mysqli_query($con,"SELECT * FROM users WHERE '".$_SESSION['username']."'=username");

while ($row=mysqli_fetch_array($result))
{

  echo $row['username'];
  echo $row['grade'];
  echo"           ";
  echo"           ";
  echo"       ";
  echo"           ";
  echo $row['id'];
  echo "<br>";

}
mysqli_close($con);
?>
<html>
<body>
  <form >


<div class="input-group">
  <button type="button" class="btn" name="addgrade" onclick="window.location.href='login.php'">log out</button>
</div>
</form>
</body>
</html>

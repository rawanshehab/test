
<?php

session_start();
$con=mysqli_connect('localhost','testuser01', 'cYmlvDTJUifDWAgF','registration') ;
// Check
//  echo 'balabizo';
    if( isset($_REQUEST['addgrade']) ){
    //  echo 'lala';
      $id = $_REQUEST['id'];
      $newgrade = $_REQUEST['grade'];
      $query ="UPDATE users  SET users.grade = '$newgrade'
    WHERE users.id ='$id' and users.type='student'
        ";
    //( mysqli_query($connection, $query) ){
    //  echo $errors .= "Grades Updated";
    //  }
    $result=  mysqli_query($con, $query);
if($result)
{
    echo 'grade updated';
    //$balabizo= "Select * from users WHERE u=";
  }
  else
  {
    echo 'grade not updated';
  }
  //  $result=
}
?>
//<form action="" method="POST" >
  <html>
  <body>
    <form >
  <div class="input-group">
    <label>ID</label>
    <input type="id" name="id" value="" required>
  </div>
  <div class="input-group">
    <label>Grade</label>
    <input type="grade" name="grade" value="" required>
  </div>
  <div class="input-group">
    <button type="submit" class="btn" name="addgrade" onclick="window.location.href='updategrade.php'">Add grade</button>
  </div>
  <div class="input-group">
    <button type="submit" class="btn" name="back" onclick="window.location.href='doctor.php'">back to home page</button>
  </div>
  </form>
  </body>
  </html>

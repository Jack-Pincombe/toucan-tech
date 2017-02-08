<?php
$server_name = "localhost";
$username = "root";
$password = "root";
$dbname = "studentinfo";

$conn = mysqli_connect($server_name,$username,$password,$dbname);

if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}




  $sql = "CREATE TABLE studentlist2 (
  id INT NOT NULL AUTO_INCREMENT,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  school VARCHAR(100) NOT NULL,
  PRIMARY KEY( id )
  )";

  if (mysqli_query($conn, $sql)) {
      echo "Table studentlist created successfully";
  } else {
      echo "Error creating table: " . mysqli_error($conn);
  }

mysqli_close($conn)
 ?>

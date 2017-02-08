<?php

$server_name = "localhost";
$username = "root";
$password = "root";
$dbname = "studentinfo";

$conn = mysqli_connect($server_name,$username,$password,$dbname);

if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

$school = $_POST['school'];
$query = "SELECT * FROM studentlist2 WHERE school='$school'";
$key = mysqli_query($conn,$query);
$x = array('ID','First name', 'last name','email','school');


echo "<table cellpadding='1' cellspacing='1' border = '1'>";
echo "<tr>";
foreach ($x as $y) {
  echo "<th>";
  print_r($y);

  echo "</th>";
  # code...
}
while ($row = mysqli_fetch_array($key)) {
  echo "<tr>";
  for ($column=0; $column < count($row); $column++) {
    if ($row[$column] == "")
    {
      break;
    }
    echo "<td>" . $row[$column] . "</td>";
}
echo "</tr>";
}
echo '</table>';

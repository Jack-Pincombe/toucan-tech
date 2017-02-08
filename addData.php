<?php

$server_name = "localhost";
$username = "root";
$password = "root";
$dbname = "studentinfo";

$conn = mysqli_connect($server_name,$username,$password,$dbname);

if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

//retrieving the data
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$school = $_POST['field4'];



$sql = "INSERT INTO studentlist2 (firstname,lastname,email,school)
VALUES ('$first_name','$last_name','$email','$school')";

if(mysqli_query($conn, $sql)){
    echo "<script>
        alert('Your information has been submitted');
        window.open('form.html');

    </script>";
} else{
    echo mysqli_error($conn);
}




 ?>

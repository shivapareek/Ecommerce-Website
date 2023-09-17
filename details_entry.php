<?php

$conn= new mysqli ("localhost","root","","web");
if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
}

    $name = $_POST['name1'];
    $email = $_POST['email1'];
    $subject = $_POST['subject1'];
    $message = $_POST['message1'];

    
    $result = $conn->query("INSERT INTO web VALUES ('".$name."','".$email."','".$subject."','".$message."');");


if ($result)
{
  echo "Form Submitted Successfully!";
}
else{
    echo "Error: " .$result. "" . mysqli_error($conn);
}
?>







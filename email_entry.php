<?php

$conn= new mysqli ("localhost","root","","email");

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
}

    $email = $_POST['email3'];
    $result = $conn->query("INSERT INTO email VALUES ('".$email."');");


if ($result)
{
  echo "Form Submitted Successfully!";
}
else{
    echo "Error: " .$result. "" . mysqli_error($conn);
}
?>







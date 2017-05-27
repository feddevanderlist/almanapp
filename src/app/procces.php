<?php

$initials=$_POST['initials'];
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$postcode=$_POST['postal_code'];
$homenumber=$_POST['home_number'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=sha1($_POST['passw']);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "almanapp";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO register (id, initials, first_name, last_name, postal_code, home_number, email, phone_number, password)
    VALUES ($initials, $firstname, $lastname, $postcode, $homenumber, $email, $phone, $pass)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
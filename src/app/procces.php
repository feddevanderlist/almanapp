<?php

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);

}

$initials=$_POST['initials'];
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$postcode=$_POST['postal_code'];
$homenumber=$_POST['home_number'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=sha1($_POST['passw']);

//checks if first letter from initials and firstname are the same (though not everyone has the same initials because of there believe)
function checkname()
{
  $ini= mb_substr($_POST['initials'],0 ,1);
  $name=mb_substr($_POST['first_name'],0 ,1);
  if($ini==$name){
      echo "<br>succes";

  }
else{
    echo "<br>check name and initials";

    die;

}}
//checks for 10 numbered phone numbers and adds +31 while removing the "0"
function convertphone()
{
    global $phone;
    $nubmlength= strlen($_POST['phone']);
    $phone=mb_substr($_POST['phone'],1,$nubmlength);
    $phone="+31".$phone;

    if ($nubmlength == 10){
    echo "<br>correct phone number";
    }
    else{
        echo "<br>please enter a proper phonenumber";
        echo $nubmlength;
        die;
    }
}


checkname();
convertphone();




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "almanapp";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (initials, first_name, last_name, postal_code, home_number, email, phone_number, password)
    VALUES ('$initials', '$firstname', '$lastname', '$postcode', '$homenumber', '$email', '$phone', '$pass')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<br>New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
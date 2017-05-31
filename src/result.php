<?php include 'app/template/header.php';?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "almanapp";


    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "SELECT * FROM users";
    $query = $db->prepare($sql);
    $query->execute();
    $results= $query->fetchAll(PDO::FETCH_ASSOC );
?>
<table class="table">
   <tr>
     <th>ID</th>

     <th>initials</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Postcode</th>
     <th>Home Number</th>
     <th>Email</th>
     <th>Phone Number</th>
   </tr>
   <?php foreach( $results as $row ){
    echo "<tr><td>";
    echo $row['id'];
    echo "</td><td>";
    echo $row['initials'];
    echo "</td><td>";
    echo $row['first_name'];
    echo "</td><td>";
    echo $row['last_name'];
    echo "</td><td>";
    echo $row['postal_code'];
    echo "</td><td>";
    echo $row['home_number'];
    echo "</td><td>";
    echo $row['email'];
    echo "</td><td>";
    echo $row['phone_number'];
    echo "</td>";
    echo "</tr>";
}
 ?>
</table>




<?php include 'app/template/footer.php';?>

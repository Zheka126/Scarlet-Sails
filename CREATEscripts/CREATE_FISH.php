<?php

$a = $_POST['ID_Fishman'];
$b = $_POST['Type_of_production'];
$c = $_POST['Price'];
$d = $_POST['Mass'];
$e = $_POST['Freshness'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "freshe_fesh");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//////////////////////////

$sql = "INSERT INTO `fish` (`ID Fishman`, `Type of production`, `Price`, `Mass`, `Freshness`) VALUES ('$a', '$b', '$c', '$d', '$e')";

if (mysqli_query($connection, $sql)) {
    echo "<h2>New record created successfully</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);

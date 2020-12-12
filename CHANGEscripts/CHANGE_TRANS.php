<?php

$a = $_POST['ID_Transport'];
$b = $_POST['ID_Production'];
$c = $_POST['Type_of_transport'];
$d = $_POST['Speed'];
$e = $_POST['Capacity'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "freshe_fesh");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
};

$sql = "UPDATE `transport` SET `ID Production` = '$b', `Type of transport` = '$c', `Speed` = '$d', `Capacity` = '$e' WHERE `ID Transport` = '$a'; ";

if (mysqli_query($connection, $sql)) {
    echo "<h2>Record updated successfully!</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

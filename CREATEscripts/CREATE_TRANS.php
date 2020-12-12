<?php

$a = $_POST['ID_Production'];
$b = $_POST['Type_of_transport'];
$c = $_POST['Speed'];
$d = $_POST['Capacity'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "freshe_fesh");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//////////////////////////

$sql = "INSERT INTO `transport` (`ID Production`, `Type of transport`, `Speed`, `Capacity`) VALUES ('$a', '$b', '$c', '$d')";

if (mysqli_query($connection, $sql)) {
    echo "<h2>New record created successfully</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
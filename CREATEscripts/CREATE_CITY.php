<?php

$a = $_POST['ID_Production'];
$b = $_POST['City'];
$c = $_POST['Distance_to_the_city'];
$d = $_POST['Volume_of_products'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "freshe_fesh");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//////////////////////////

$sql = "INSERT INTO `city` (`ID Production`, `City`, `Distance to the city`, `Volume of products`) VALUES ('$a', '$b', '$c', '$d')";

if (mysqli_query($connection, $sql)) {
    echo "<h2>New record created successfully</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
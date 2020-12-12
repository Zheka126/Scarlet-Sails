<?php

$a = $_POST['ID_City'];
$b = $_POST['ID_Production'];
$c = $_POST['City'];
$d = $_POST['Distance_to_the_city'];
$e = $_POST['Volume_of_products'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "freshe_fesh");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
};

$sql = "UPDATE `city` SET `ID Production` = '$b', `City` = '$c', `Distance to the city` = '$d', `Volume of products` = '$e' WHERE `ID City` = '$a'; ";

if (mysqli_query($connection, $sql)) {
    echo "<h2>Record updated successfully!</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

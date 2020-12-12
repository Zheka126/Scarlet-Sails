<?php

$a = $_POST['ID_Dealer'];
$b = $_POST['ID_Production'];
$c = $_POST['Secondname'];
$d = $_POST['Name'];
$e = $_POST['Volume_of_products'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "freshe_fesh");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
};

$sql = "UPDATE `dealer` SET `ID Production` = '$b', `Secondname` = '$c', `Name` = '$d', `Volume of products` = '$e' WHERE `ID Dealer` = '$a'; ";

if (mysqli_query($connection, $sql)) {
    echo "<h2>Record updated successfully!</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

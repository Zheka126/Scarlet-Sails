<?php

$a = $_POST['ID_Fishman'];
$b = $_POST['Secondname'];
$c = $_POST['Name'];
$d = $_POST['Fish'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "freshe_fesh");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
};

$sql = "UPDATE `fishman` SET `Secondname` = '$b', `Name` = '$c', `Fish` = '$d' WHERE `ID Fishman` = '$a'; ";

if (mysqli_query($connection, $sql)) {
    echo "<h2>Record updated successfully!</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

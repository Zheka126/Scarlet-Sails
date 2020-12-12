<?php

$a = $_POST['Secondname'];
$b = $_POST['Name'];
$c = $_POST['Fish'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "freshe_fesh");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//////////////////////////

$sql = "INSERT INTO `fishman` (`Secondname`, `Name`, `Fish`) VALUES ('$a', '$b', '$c')";

if (mysqli_query($connection, $sql)) {
    echo "<h2>New record created successfully</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
};

mysqli_close($connection);

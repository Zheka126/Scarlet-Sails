<?php

$a = $_POST['ID_Production'];
$b = $_POST['ID_Fishman'];
$c = $_POST['Type_of_production'];
$d = $_POST['Price'];
$e = $_POST['Mass'];
$f = $_POST['Freshness'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "freshe_fesh");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
};

$sql = "UPDATE `fish` SET `ID Fishman` = '$b', `Type of production` = '$c', `Price` = '$d', `Mass` = '$e', `Freshness` = '$f' WHERE `ID Production` = '$a'; ";

if (mysqli_query($connection, $sql)) {
    echo "<h2>Record updated successfully!</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

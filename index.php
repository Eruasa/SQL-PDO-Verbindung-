<?php

 //Required data to log into database
require 'config.php';

$pdo_database_connection = "mysql:host$host;dbname=$db;charset=UTF8";

try {

    //Create new PDO with the pdo_database_connection name, the user and the password
    $pdo = new PDO($pdo_database_connection, $user, $password);

    if ($pdo) {

        //Show message if the connection was succesfull
        echo "Connected to the $db database successfully!";
    }

    //Show an error message if the connection wasn't succesfull
}   catch (PDOException $exception) {
        echo $exception->getMessage();
}

?>
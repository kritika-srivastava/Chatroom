<?php
$servername ="localhost";
$username ="root";
$password="";
$database ="Chatroom";

// Creating Database Connection

$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
    die("Failed to Connect".mysqli_connect_error());
}

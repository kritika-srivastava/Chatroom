<?php
/**
 * /opt/lampp/htdocs/Chatroom/src/claim.php
 * @author Kritika Srivastava
 * @since August 05, 2021
 */
//_____________________________________________________________________________________________________________
// Remote Database Connection: Actual Deployment-------------------------------
$servername ="remotemysql.com";
$username ="LRx9JbF8qS";
$password="FW60L5lR1T";
$database ="LRx9JbF8qS";


// Development COnnection For testing on local machine-------------------------
// $servername ="localhost";
// $username ="root";
// $password="";
// $database ="Chatroom";


// Creating Database Connection

$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
    die("Failed to Connect".mysqli_connect_error());
}

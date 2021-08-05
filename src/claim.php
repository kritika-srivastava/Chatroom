<?php

// Getting the value of post parameters
$room=$_POST['room'];


// TESTING-------------------------------------------------------------------------------------------------------------------------
$link ="http://localhost";


// DEPLOYMENT----------------------------------------------------------------------------------------------------------------------
// $link ="https://php-chatroom.herokuapp.com";



if (strlen($room)>20 or strlen($room)<3) {
    $message = "Awee... You have choose a room between 3 to 20 characters.";
    echo '<script language = "javascript">';
    // Change the url while deployment
    echo 'alert("'.$message.'");';
    echo 'window.location="'.$link.'/Chatroom/index.php";';
    echo '</script>';
} elseif (!ctype_alnum($room)) {
    $message = "Shoot! The room name must be alphanumeric and without whitespace.";
    echo '<script language = "javascript">';
    // Change the url while deployment
    echo 'alert("'.$message.'");';
    echo 'window.location="'.$link.'/Chatroom/index.php";';
    echo '</script>';
} else {
    // Establishing the Database connection
    include 'db.php';
}



// Check if room already exists
$sql= "SELECT * FROM `rooms` WHERE roomname ='$room'";
$result=mysqli_query($connect, $sql);

if ($result) {
    if (mysqli_num_rows($result)>0) {
        $message = "Someone else has claimed the room. Please choose a different room name.";
        echo '<script language = "javascript">';
        // Error message if room is claimed
        echo 'alert("'.$message.'");';
        echo 'window.location="'.$link.'/Chatroom/index.php";';
        echo '</script>';
    } else {
        $sql= "INSERT INTO `rooms` (`roomname`, `stime`) VALUES ('$room', current_timestamp());";
        if (mysqli_query($connect, $sql)) {
            $message = "Hurray! Your chatroom is ready for realtime-chat.";
            echo '<script language = "javascript">';
            // Error message if room is claimed
            echo 'alert("'.$message.'");';
            echo 'window.location="'.$link.'/Chatroom/src/rooms.php?roomname=' . $room. '";';
            echo '</script>';
        }
    }
} else {
    echo "Error :". mysqli_error($connect);
}



echo "Success";

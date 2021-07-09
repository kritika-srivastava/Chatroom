<?php

$roomname =$_GET['roomname'];
//Connecting database
include 'db.php';


// Execute SQL to check whwter room exists
$sql = "SELECT * FROM `rooms` WHERE roomname ='$roomname'";

$result = mysqli_query($connect, $sql);
if ($result) {
    // Check if room exists
    if (mysqli_num_rows($result)==0) {
        $message = "This room does not exist. Try creating a new one.";
        echo '<script language = "javascript">';
        // Change the url while deployment
        echo 'alert("'.$message.'");';
        echo 'window.location="http://localhost/Chatroom/src";';
        echo '</script>';
    }
} else {
    echo "Error : ". mysqli_error($connect);
}
?>

<!-- Chatroom  HTML/CSS Code -->

<!DOCTYPE html>
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Expletus+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <style>
    body {
        width: 100%;
        height: 100%;
        left: 0px;
        top: 0px;
        z-index: -1;

        background-size: stretch;
    }

    .p3 {
        font-family: 'Sacramento', cursive;
        font-size: 50px
    }
    .p1 {
        font-family: 'Expletus Sans', cursive;
    }

    .footer {
        padding-top: 10px;
        padding-bottom: 20px;
        position: fixed;
        width: 100%;
        height: 8%;
        bottom: 0;
        left: 0;

        background-color: #8ED1FC;

    }

    .svgim {
        position: relative;
        bottom: 0;
        left: 0;
        background-size: cover;

    }

    .container {
        border: 2px solid #C59CDB;
        background-color: #DFD0F1;
        border-radius: 5px;
        padding: 5px;
        margin: 10px auto;
        margin-right
        
        

    }

    .darker {
        border-color: #55D9C0;
        background-color: #C7F6EC;
    }

    .container::after {
        content: "";
        clear: both;
        display: table;
       
    }

    .container img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
    }

    .container img.right {
        float: right;
        margin-left: 20px;
        margin-right: 0;
    }

    .time-right {
        float: right;
        color: #aaa;
    }

    .time-left {
        float: left;
        color: #999;
    }
    </style>
</head>

<body>

    <?php
    include 'navbar.php';

?>
    <br>
    <br>

    <div class="container">
        <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
        <p>Hello. How are you today?</p>
        <span class="time-right">11:00</span>
    </div>

    <div class="container darker">
        <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
        <p>Hey! I'm fine. Thanks for asking!</p>
        <span class="time-left">11:01</span>
    </div>

    <div class="container">
        <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
        <p>So, what do you wanna do today?</p>
        <span class="time-right">11:02</span>
    </div>

    <div class="container darker">
        <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
        <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
        <span class="time-left">11:05</span>
    </div>
    <div class="svgim">
        <div class="footer">
            <div class="p1" fill="#000000" font-size="15" style="background-color:#8ED1FC">
                <center> ©2021 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Made with <i class="fa fa-heart fa-2x"
                        aria-hidden="true" style="color:red"></i>
                    by Kritika Srivastava</center>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
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
        echo 'window.location="'.$link.'/Chatroom";';
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


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Expletus+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">

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

    .container {
        border: 2px solid #BCE6EB;
        background-color: #BCE6EB;
        border-radius: 20px;
        padding: 5px;
        margin: 10px auto;
        position: relative;
        font-family: 'Inter', sans-serif;

    }

    .darker {
        border: 2px solid #F25287;
        background-color: #F25287;
        color: white;
    }

    .container::after {

        content: "";
        clear: both;
        display: table;

    }

    .scroll {
        background-image: url("../img/bg_img.svg");
        background-size: auto;
        height: 550px;
        overflow-y: scroll;

    }

    .time-right {
        float: right;
        color: #000000;
    }
    </style>
</head>

<body>

    <?php
    include 'navbar.php';

?>
    <br>
    <br>
    <div class="scroll">
        <div class="container">


        </div>
    </div>
    <br>
    <br>
   
    <center>
        <input type="text" class="form-control" name="usermsg" id="usermsg" style="width:50%;"
            placeholder="Add message"><br>
        <button class="btn btn-default" name="submitmsg" id="submitmsg"
            style="background-color:#8ED1FC; color:#23395d; border-color:#0000FF; border-width:1px">Send</button>
    </center>

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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script type="text/javascript">
    // Check for new messages every 0.5 millisecond
    setInterval(runFunction, 500);

    function runFunction() {
        $.post("htconnect.php", {
                room: '<?php echo $roomname ?>',
                ip: '<?php echo $_SERVER['REMOTE_ADDR'] ?>'
            },
            function(data, status) {
                document.getElementsByClassName('scroll')[0].innerHTML = data;
            }
        )
    }

   
    // If form is submitted Using Enterkey
    var input = document.getElementById("usermsg");
    input.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById("submitmsg").click();
        }
    });


    $("#submitmsg").click(function() {
        var clientmsg = $("#usermsg").val();
        $.post("postmessage.php", {
            text: clientmsg,
            room: '<?php echo $roomname ?>',
            ip: '<?php echo $_SERVER['REMOTE_ADDR'] ?>'
        }, function(data, status) {
            document.getElementsByClassName('scroll')[0].innerHTML = data;
        });
        $("#usermsg").val("");
        return false;
    });
    </script>
</body>

</html>
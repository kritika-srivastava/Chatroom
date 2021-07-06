<!doctype html>
<html lang="en">

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
        background-image: url(../img/bg.png);
        background-size: stretch;
    }
    .p3 {
        font-family: 'Sacramento', cursive;
        font-size: 50px
    }

    .p2 {
        font-family: 'Vollkorn', serif;
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
    </style>
    <title>Chatroom</title>
</head>

<body>

    <?php
include('navbar.php');
?>

    <svg id="svg" viewBox="0 85 1440 350" width="100%" height="100%" preserveAspectRatio="xMidYMid meet"
        xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
        <path
            d="M 0,400 C 0,400 0,133 0,133 C 65.06904843696324,133.8450704225352 130.1380968739265,134.6901408450704 196,145 C 261.8619031260735,155.3098591549296 328.5166609412573,175.0845070422535 399,165 C 469.4833390587427,154.9154929577465 543.7952593610444,114.97183098591549 609,100 C 674.2047406389556,85.02816901408451 730.3023016145654,95.0281690140845 808,104 C 885.6976983854346,112.9718309859155 984.995534180694,120.91549295774648 1049,122 C 1113.004465819306,123.08450704225352 1141.715561662659,117.30985915492957 1201,118 C 1260.284438337341,118.69014084507043 1350.1422191686706,125.84507042253522 1440,133 C 1440,133 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="#8ed1fc88" class="transition-all duration-300 ease-in-out delay-150"
            transform="rotate(-180 720 200)"></path>
        <path
            d="M 0,400 C 0,400 0,266 0,266 C 83.69769838543453,246.02748196496051 167.39539677086907,226.05496392992103 236,244 C 304.60460322913093,261.94503607007897 358.11611130195814,317.8076262452765 415,312 C 471.88388869804186,306.1923737547235 532.1401580212985,238.71453108897288 598,226 C 663.8598419787015,213.28546891102712 735.3232566128479,255.33424939883201 814,267 C 892.6767433871521,278.665750601168 978.5668155273102,259.94847131569907 1046,246 C 1113.4331844726898,232.0515286843009 1162.4094812779115,222.87186533837172 1225,227 C 1287.5905187220885,231.12813466162828 1363.7952593610444,248.56406733081414 1440,266 C 1440,266 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="#8ed1fcff" class="transition-all duration-300 ease-in-out delay-150"
            transform="rotate(-180 720 200)"></path>
    </svg>
<?php
/**
 * /opt/lampp/htdocs/Chatroom/src/claim.php
 * @author Kritika Srivastava
 * @since August 05, 2021
 */
//_____________________________________________________________________________________________________________




include 'db.php';
$room = $_POST['room'];
$ip = $_POST['ip'];

$sql= "SELECT msg, stime,ip FROM messages WHERE room = '$room' ORDER BY stime DESC";

$res = "";
$result = mysqli_query($connect, $sql);

//ClearDB
$sql2= "DELETE FROM rooms WHERE stime < NOW() - INTERVAL 1 DAY";
mysqli_query($connect, $sql2);

$sql3= "DELETE FROM messages WHERE stime < NOW() - INTERVAL 1 DAY";
mysqli_query($connect, $sql3);

if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (strcmp($ip, $row['ip'])==0) {
            $res = $res.'<div class="container  darker">';
    
            $res = $res.$row['ip'];
            $res = $res." says <br><p4>".$row['msg'];
            $res = $res.'</p4><span class="time-right2">' . $row['stime']."</span></div>";
        } else {
            $res = $res.'<div class="container">';
            $res = $res.'<div class="message last">';
            $res = $res.$row['ip'];
            $res = $res." says <br><p4>".$row['msg'];
            $res = $res.'</p4> <span class="time-right">' . $row['stime']."</span></div></div>";
        }
    }
}
echo $res;

<?php

/*
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}*/
 
//Abfrage der Nutzer ID vom Login
//$userid = $_SESSION['userid'];
 
//echo "Hallo User: ".$userid;

require_once('config.php');

$query = $conn->query("SELECT * FROM delegierte ORDER BY timestamp DESC");
$myArray = array();




if ($result = $query) {

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        //print_r($row['lunch']);
        //Mi-Pfarrer
        $lsit = array();
        $list = [];
        $list['del_vorname'] = $row['del_vorname'];
        $list['del_nachname'] = $row['del_nachname'];
        $list['del_email'] = $row['del_email'];
        array_push($myArray, $list);

    }

    
    //echo $lunchCount;
    
    




    echo json_encode($myArray);
}

?>
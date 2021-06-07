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

$query = $conn->query("SELECT * FROM delegierte");
$myArray = array();
$micount = 0;
$docount = 0;
$frcount = 0;
$sacount = 0;

if ($result = $query) {

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        //print_r($row['lunch']);
        if ($row['del_mi'] == 1) {
            $micount++;
        }
        if ($row['del_do'] == 1) {
            $docount++;
        } 
        if ($row['del_fr'] == 1) {
            $frcount++;
        } 
        if ($row['del_sa'] == 1) {
            $sacount++;
        } 
    }

    
    //echo $lunchCount;
    $myArray['del_mi'] = $micount;
    $myArray['del_do'] = $docount;
    $myArray['del_fr'] = $frcount;
    $myArray['del_sa'] = $sacount;


    echo json_encode($myArray);
}

?>
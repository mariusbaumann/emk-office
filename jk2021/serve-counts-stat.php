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
$micountPF = 0;
$micountLA = 0;
$dismicountPF = 0;
$dismicountLA = 0;
$docountPF = 0;
$docountLA = 0;
$dismicountPF = 0;
$dismicountLA = 0;
$frcountPF = 0;
$frcountLA = 0;
$dismicountPF = 0;
$dismicountLA = 0;
$sacountPF = 0;
$sacountLA = 0;
$dismicountPF = 0;
$dismicountLA = 0;


if ($result = $query) {

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        //print_r($row['lunch']);
        //Mi-Pfarrer
        if ($row['del_mi'] == 1 && ($row['del_func'] == "Pfarrperson/Pfarrperson im Ruhestand" || $row['del_func'] == "Membre du corps pastoral/membre du corps pastoral à la retraite" )) {
            $micountPF++;
        }
        if ($row['del_mi'] == 1 && ($row['del_func'] == "Laienmitglied/Sonstiges" || $row['del_func'] == "Membre laïque/autre" )) {
            $micountLA++;
        }
        if ($row['del_dismi'] == 1 && ($row['del_func'] == "Pfarrperson/Pfarrperson im Ruhestand" || $row['del_func'] == "Membre du corps pastoral/membre du corps pastoral à la retraite" )) {
            $dismicountPF++;
        }
        if ($row['del_dismi'] == 1 && ($row['del_func'] == "Laienmitglied/Sonstiges" || $row['del_func'] == "Membre laïque/autre" )) {
            $dismicountLA++;
        }


        if ($row['del_do'] == 1 && ($row['del_func'] == "Pfarrperson/Pfarrperson im Ruhestand" || $row['del_func'] == "Membre du corps pastoral/membre du corps pastoral à la retraite" )) {
            $docountPF++;
        }
        if ($row['del_do'] == 1 && ($row['del_func'] == "Laienmitglied/Sonstiges" || $row['del_func'] == "Membre laïque/autre" )) {
            $docountLA++;
        }
        if ($row['del_disdo'] == 1 && ($row['del_func'] == "Pfarrperson/Pfarrperson im Ruhestand" || $row['del_func'] == "Membre du corps pastoral/membre du corps pastoral à la retraite" )) {
            $disdocountPF++;
        }
        if ($row['del_disdo'] == 1 && ($row['del_func'] == "Laienmitglied/Sonstiges" || $row['del_func'] == "Membre laïque/autre" )) {
            $disdocountLA++;
        }



        if ($row['del_fr'] == 1 && ($row['del_func'] == "Pfarrperson/Pfarrperson im Ruhestand" || $row['del_func'] == "Membre du corps pastoral/membre du corps pastoral à la retraite" )) {
            $frcountPF++;
        }
        if ($row['del_fr'] == 1 && ($row['del_func'] == "Laienmitglied/Sonstiges" || $row['del_func'] == "Membre laïque/autre" )) {
            $frcountLA++;
        }
        if ($row['del_disfr'] == 1 && ($row['del_func'] == "Pfarrperson/Pfarrperson im Ruhestand" || $row['del_func'] == "Membre du corps pastoral/membre du corps pastoral à la retraite" )) {
            $disfrcountPF++;
        }
        if ($row['del_disfr'] == 1 && ($row['del_func'] == "Laienmitglied/Sonstiges" || $row['del_func'] == "Membre laïque/autre" )) {
            $disfrcountLA++;
        }

        if ($row['del_sa'] == 1 && ($row['del_func'] == "Pfarrperson/Pfarrperson im Ruhestand" || $row['del_func'] == "Membre du corps pastoral/membre du corps pastoral à la retraite" )) {
            $sacountPF++;
        }
        if ($row['del_sa'] == 1 && ($row['del_func'] == "Laienmitglied/Sonstiges" || $row['del_func'] == "Membre laïque/autre" )) {
            $sacountLA++;
        }
        if ($row['del_dissa'] == 1 && ($row['del_func'] == "Pfarrperson/Pfarrperson im Ruhestand" || $row['del_func'] == "Membre du corps pastoral/membre du corps pastoral à la retraite" )) {
            $dissacountPF++;
        }
        if ($row['del_dissa'] == 1 && ($row['del_func'] == "Laienmitglied/Sonstiges" || $row['del_func'] == "Membre laïque/autre" )) {
            $dissacountLA++;
        }
    }

    
    //echo $lunchCount;
    $myArray['del_mi_PF'] = $micountPF;
    $myArray['del_mi_LA'] = $micountLA;
    $myArray['del_dismi_LA'] = $dismicountLA;
    $myArray['del_dismi_PF'] = $dismicountPF;

    $myArray['del_do_PF'] = $docountPF;
    $myArray['del_do_LA'] = $docountLA;
    $myArray['del_disdo_LA'] = $disdocountLA;
    $myArray['del_disdo_PF'] = $disdocountPF;

    $myArray['del_fr_PF'] = $frcountPF;
    $myArray['del_fr_LA'] = $frcountLA;
    $myArray['del_disfr_LA'] = $disfrcountLA;
    $myArray['del_disfr_PF'] = $disfrcountPF;

    $myArray['del_sa_PF'] = $sacountPF;
    $myArray['del_sa_LA'] = $sacountLA;
    $myArray['del_dissa_LA'] = $dissacountLA;
    $myArray['del_dissa_PF'] = $dissacountPF;




    echo json_encode($myArray);
}

?>
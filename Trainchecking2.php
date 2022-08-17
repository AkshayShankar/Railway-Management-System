<?php
    $con = mysqli_connect('localhost','root','','railway_database');

    $txtSource1 = $_POST['txtSource1'];
    $txtTrainID1 = $_POST['txtTrainID1'];
    $txtDate1 = $_POST['txtDate1'];
    $txtDestination1 = $_POST['txtDestination1'];
    $txtClass1 = $_POST['txtClass1'];

    
    $chosen_class = "Number of ".$txtClass1." seats available";
    
    $sql = "UPDATE `ticket` SET `Ticket Train ID` = '$txtTrainID1', `Source location` = '$txtSource1', `Destination location` = '$txtDestination1', `Date of journey` = '$txtDate1'
                WHERE `Ticket Train ID` IS NULL AND NOT `Class` IS NULL";

    $sql1 = "UPDATE `train` SET `$chosen_class` = `$chosen_class` - 1 WHERE `Train ID` = '$txtTrainID1'";


    mysqli_query($con, $sql);
    mysqli_query($con, $sql1);

    header('Location: http://localhost/railway/home.php');
?>
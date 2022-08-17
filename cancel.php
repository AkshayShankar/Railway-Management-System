<?php
    $con = mysqli_connect('localhost','root','','railway_database');
    $txtTicket = $_POST['txtTicket'];

    $sql = "DELETE FROM ticket WHERE `Ticket ID` = $txtTicket";
    
    mysqli_query($con, $sql);
    header('Location: http://localhost/railway/home.php');
?>
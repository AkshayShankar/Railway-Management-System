<?php
    $con = mysqli_connect('localhost','root','','railway_database');
    $txtName = $_POST['txtName'];
    $txtGender = $_POST['txtGender'];
    $txtMobile = $_POST['txtMobile'];
    $txtAadhaar = $_POST['txtAadhaar'];
    $txtDate = $_POST['txtDate'];
    $txtAddress1 = $_POST['txtAddress1'];
    $txtAddress2 = $_POST['txtAddress2'];

    $sql = "INSERT INTO `passenger` (`Aadhaar number`, `Passenger Name`, `Gender`, `Date of Birth`, `Mobile Number`) VALUES ('$txtAadhaar', '$txtName', '$txtGender', '$txtDate', '$txtMobile')";
    $rs = mysqli_query($con, $sql);

    $sql = "INSERT INTO `ticket` (`Ticket Aadhaar number`) VALUES ('$txtAadhaar')";
    mysqli_query($con, $sql);

    $sql = "INSERT INTO `passenger address` (`Passenger Aadhaar Number`, `Address`) VALUES ('$txtAadhaar', '$txtAddress1')";
    mysqli_query($con, $sql);

    $sql = "INSERT INTO `passenger address` (`Passenger Aadhaar Number`, `Address`) VALUES ('$txtAadhaar', '$txtAddress2')";
    mysqli_query($con, $sql);

    header('Location: http://localhost/railway/home.php');
?>
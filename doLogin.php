<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
session_start();
// php file that contains the common database connection code
include "dbFunctions.php";

$enteredUsername = $_POST['username'];
$enteredPassword = $_POST['password'];

$msg = "";

$queryCheck = "SELECT * FROM patients WHERE username = '$enteredUsername' AND password = SHA1('$enteredPassword')";

$resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

if (mysqli_num_rows($resultCheck) == 1) {
    $row = mysqli_fetch_array($resultCheck);
    $_SESSION['patient_id'] = $row['patient_id'];
    $_SESSION['username'] = $row['username'];
    echo 1;
} else {
    echo 0;
}

//Name: Brandon Koh Wei Sheng  Student ID: 18044455
?>

<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
include "dbFunctions.php";


$username = $_POST['username'];
$password = $_POST['password'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$birthDate = $_POST['birthDate'];
$activeLevel = $_POST['activeLevel'];

$queryCheck = "SELECT * FROM patients 
                    WHERE username='$username'";
$resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

if (mysqli_num_rows($resultCheck) == 1) {
    $message = "Username already exists";
    $message .= "<br/> Please try to <a href='signup.php'>Sign Up</a> again";
} else {
    $queryInsert = "INSERT INTO patients 
                        (username, password, height, weight, birth_date, active_level)
                        VALUES ('$username',SHA1('$password'),$height,$weight,
                        '$birthDate','$activeLevel')";
    $resultInsert = mysqli_query($link, $queryInsert) or die;
    $message = "Hi " . strtolower($username) .
            ", you have successfully registered as a patient.";
    $message .= "<br/><a href='login.php'>Login</a>";
    mysqli_close($link);
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Register</li>
        </ol>
       <h2>Patient Registration</h2>

        <?php
        echo $message;
        ?>

    </body>
</html>
<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
?>

<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455

session_start();

if(isset( $_SESSION['patient_id'])){
    session_destroy();
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Logout/title>
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
            <li class="breadcrumb-item active">Logout</li>
        </ol>
        <h2>Patient Logout</h2>

        <?php
        echo $msg;
        ?>

    </body>
</html>
<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
?>
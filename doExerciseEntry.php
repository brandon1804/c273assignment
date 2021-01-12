<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
session_start();
include "dbFunctions.php";

if (isset($_SESSION['patient_id'])) {
    $patientID = $_SESSION['patient_id'];
    $exerciseType = $_POST['exerciseType'];
    $exerciseDuration = $_POST['exerciseDuration'];

    $queryInsert = "INSERT INTO patient_exercises 
                        (patient_id, exercise_type, exercise_duration)
                        VALUES ($patientID,'$exerciseType', $exerciseDuration)";
    $resultInsert = mysqli_query($link, $queryInsert) or die;

    if ($resultInsert == TRUE) {
        $message = "<br><b>Exercise Entry Inserted Sucessfully!<b><br><br>";
        $query = "SELECT * FROM patient_exercises
          WHERE patient_id = $patientID";

        $result = mysqli_query($link, $query) or
                die("Error in query: $query. " . mysqli_error($link));
    }//$resultInsert true
    else {
        $message = "<br><b>Exercise Entry Inserted Unsucessfully!<b>";
    }

    mysqli_close($link);
}//end of isset patient
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exercise Entry</title>
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
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Exercise Entry</li>
            </ol>
            <h2>Patient Exercise Entry</h2>
            <?php
            echo $message;
            ?>
            <table id="exerciseTable" class="table table-hover table-bordered">
                <tr class="header">
                    <th>Exercise Type</th>
                    <th>Exercise Duration</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $eT = $row['exercise_type'];
                    $eD = $row['exercise_duration'];
                    if ($eT == "Walk" && $eD >= 30){
                        $class = "bg-success";
                    }
                    else if ($eT == "Run" && $eD >= 10){
                        $class = "bg-success";
                    }
                    else if ($eT == "Cycle" && $eD >= 20){
                       $class = "bg-success";
                    }
                    else{
                        $class = "";
                    }
                    ?>
                    <tr class ="<?php echo $class;?>">
                        <td>
                            <?php echo $eT; ?>
                        </td>
                        <td>
                            <?php echo $eD; ?>
                        </td>
                    </tr>
                    <?php
                } // end of while loop
                ?>    
            </table>
        </div>
    </body>
</html>
<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
?>
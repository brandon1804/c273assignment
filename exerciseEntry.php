<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Exercise Entry</title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.raty.min.js"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $("#slider").slider({
                    value: 0,
                    min: 5,
                    max: 120,
                    step: 1,
                    slide: function (event, ui) {
                        $("#num").val(ui.value);
                    }
                });
                $("#num").val($("#slider").slider("value"));
            });
        </script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
        <div class="container">
            <h2>Patient Exercise Entry</h2>
            <form id= "idExerciseEntryForm" name="eEntryForm" method="post" action="doExerciseEntry.php" class="form-horizontal">             
                <div class="form-group">
                    <label for="idExerciseType">Exercise Type:</label>
                    <select name="exerciseType" class="form-control" id="idExerciseType">
                        <option>Walk</option>
                        <option>Run</option>
                        <option>Cycle</option>
                    </select>
                </div>
                <div class="form-group">         
                    <label for="slider">Exercise Duration (in minutes): <input type="text" name="exerciseDuration" id="num" readonly style="border:0; color:#5bc0de; font-weight:bold; text-align:right" size="1"></label>
                    <div id="slider"></div>
                </div>
                <input value="Submit" type="submit" class="btn btn-info btn-block">
            </form>
        </div>
    </body>
</html>
<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
?>
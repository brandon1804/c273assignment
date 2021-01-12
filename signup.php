<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.min.js"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <style>
            form .error {
                color: #ff0000;
            }
        </style>
        <script>
            $(document).ready(function () {
                $("#idPatientForm").validate({
                    rules: {
                        username: {
                            required: true,
                        },
                        password: {
                            required: true,
                            pattern: /^[\d|\w]{6,}$/
                        },
                        height: {
                            required: true,
                            pattern: /^([1-2]\d*)(.\d+)?$/
                        },
                        weight: {
                            required: true,
                            pattern: /^([1-6]\d*)(.\d+)?$/
                        },
                        birthDate: {
                            required: true,
                            pattern: /^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$/
                        }
                    },
                    messages: {
                        username: {
                            required: "Please enter your name"
                        },
                        password: {
                            required: "Please enter your password",
                            pattern: "Please enter a password that is at least 6 characters long"
                        },
                        height: {
                            required: "Please enter your height",
                            pattern: "Please enter a valid height"
                        },
                        weight: {
                            required: "Please enter your weight",
                            pattern: "Please enter a valid weight"
                        },
                        birthDate: {
                            required: "Please enter your birth date",
                            pattern: "Please ensure your birth date follows the DD-MM-YYYY date format"
                        }
                    },
                    submitHandler: function () {
                        return true;
                    }
                });
            });
        </script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Register</li>
        </ol>
        <div class="container">
            <h2>Patient Registration</h2>
            <form id= "idPatientForm" name="patientForm" method="post" action="doSignUp.php" class="form-horizontal">
                <div class="form-group">
                    <label for="idUsername">Username: </label>
                    <input name="username" type="text" id="idUsername" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="idPassword">Password: </label>
                    <input name="password" type="password" id="idPassword" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="idHeight">Height (in m):</label>
                    <input name="height" type="text" class="form-control" id="idHeight">
                </div>
                <div class="form-group">
                    <label for="idWeight">Weight (in kg):</label>
                    <input name="weight" type="text" class="form-control" id="idWeight">
                </div>
                <div class="form-group">
                    <label for="idDate">Date of Birth (format: YYYY-MM-DD):</label>
                    <input id="idDate" type="text" class="form-control" name="birthDate"/>
                </div>
                <div class="form-group">
                    <label for="idActiveLevel">Active Level:</label>
                    <select name="activeLevel" class="form-control" id="idActiveLevel">
                        <option>Sedentary</option>
                        <option>Moderate</option>
                        <option>Active</option>
                    </select>
                </div>
                <input value="Sign Up" type="submit" class="btn btn-info btn-block">
                <input value="Reset" type="reset" class="btn btn-default btn-block">
            </form>
        </div>
    </body>
</html>
<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
?>
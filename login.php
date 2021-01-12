<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#alertBox").hide();
                $('#loginBtn').click(function (e) {
                    e.preventDefault();
                    var username = $('#idUsername').val();
                    var password = $('#idPassword').val();
                    $.ajax({
                        url: 'doLogin.php',
                        type: 'POST',
                        data: {username: username, password: password},
                        success: function (response) {
                            var msg = "";
                            if (response == 1) {
                                msg = "<br>Login Successful.<br><a href='exerciseEntry.php'>Enter your exercise(s)</a>";
                                $("#alertBox").hide();
                                $("#result").html(msg);
                            } else {
                                msg = "Sorry, you must enter a valid username and password to log in.";
                                $("#alertBox").html(msg);
                                $("#alertBox").show();
                                $("#idLoginForm")[0].reset()
                            }
                        }
                    });
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
            <li class="breadcrumb-item active">Login</li>
        </ol>
        <div class="container">
            <h2>Patient Login</h2>
            <div id="result">
                <form class="form-horizontal" id='idLoginForm'>             
                    <div class="alert alert-danger" role="alert" id="alertBox">                
                    </div>
                    <div class="form-group">
                        <label for="idUsername">Username: </label>
                        <input name="username" type="text" id="idUsername" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="idPassword">Password: </label>
                        <input name="password" type="password" id="idPassword" class="form-control"/>
                    </div>
                    <input value="Login" id='loginBtn' type="submit" class="btn btn-info btn-block">
                </form>
            </div>
    </body>
</html>
<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
?>
<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <a class="navbar-brand" href="index.php">
        <img src="images/YCHLogo.jpg" alt="Logo" style="width:100px;"> Yishun Community Hospital
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">           
            <?php if (isset($_SESSION['patient_id'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="exerciseEntry.php">Exercise Entry</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
        </div>
    <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign Up</a>
        </li>
    <?php } ?>    
</div>
</nav>
<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
?>


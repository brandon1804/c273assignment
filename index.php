<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Yishun Community Hospital</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>  
        <style>
            .carousel-inner{
                width:100%;
                max-height: 650px;
            }          
            .quotation{
                color: #5bc0de;
                border-radius: 50%;
                font-size: 40px;
                height: 55px;
                line-height: 55px;
                text-align: center;
                width: 55px;
            }

        </style>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>  
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/sliders/slider1.png"> 
                </div> 
                <div class="carousel-item">
                     <img src="images/sliders/slider2.jpg">
                </div>  
            </div>

            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <div class="container">
            <div class="text-center mb-3">
                <div>
                    <h2>Patient Testimonials</h2>
                    <h6>What patients say about Yishun Community Hospital.</h6>
                </div><br>

            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="text-center">
                            <i class="fa fa-quote-left quotation mt-3"></i>
                            <div class="card-body">
                                <p class="card-text">"There is almost never a bad experience with Yishun Community Hospital."</p>                           
                            </div>
                            <div class="card-footer bg-info">
                                <h4 class="text-white">Allison Lim</h4>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="text-center">
                            <i class="fa fa-quote-left quotation mt-3"></i>
                            <div class="card-body">
                                <p class="card-text">"Yishun Community Hospital's world-class facilities are a sight to behold."</p>                           
                            </div>
                            <div class="card-footer bg-info">
                                <h4 class="text-white">Aqil Rahman</h4>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="text-center">
                            <i class="fa fa-quote-left quotation mt-3"></i>
                            <div class="card-body">
                                <p class="card-text">"Yishun Community Hospital's caring staff is one of the reasons behind its success."</p>                           
                            </div>
                            <div class="card-footer bg-info">
                                <h4 class="text-white">Arjun Singh</h4> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div><br><br/>
    </body>
</html>
<?php
//Name: Brandon Koh Wei Sheng  Student ID: 18044455
?>v
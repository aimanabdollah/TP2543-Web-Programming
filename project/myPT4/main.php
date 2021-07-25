<?php session_start() ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Camerasque Store: Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->


    <!-- <link rel="stylesheet" type="text/css" href="bg.css"> -->
    <style>
        body {
            background-image: url(images/bg3.jpg);
            /* Full height */
            /* height: 100%; */

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;



        }

        .center {
            margin-top: 90;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
        }
    </style>
    <link rel="shortcut icon" type="image/png" href="images/ico.png" />
</head>
<!-- <style>
        html {
            width: 100%;
            height: 100%;
            min-height: 100%;
        }
    </style> -->

<body>

    <?php include_once 'nav_bar.php'; ?>

    <!-- <img src="images/logo.png" alt="AVATAR" class="center"> -->
    <div class="container-fluid" style="width: 90%">
    <center><img src = "images/wht.png" style="width: 20%"  ></center>
    <!-- <h1><center><b>See, What's New!</b></center></h1> -->
    <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
             
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" >
                <div class="item active">
                    <img src="images/c1.jpg" alt="Slides 1" style="height:450px; width:100%;">
                </div>
                <div class="item">
                    <img src="images/c2.jpg" alt="Slides 2" style="height:450px; width:100%;">
                </div>
                <div class="item">
                    <img src="images/c3.jpg" alt="Slides 3" style="height:450px; width:100%;">
                </div>
                <div class="item">
                    <img src="images/c4.jpg" alt="Slides 4" style="height:450px; width:100%;">
                </div>
             
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>



</body>

</html>
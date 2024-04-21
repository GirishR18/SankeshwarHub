<?php
require "common.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="sankeshwar,Sankeshwar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sankeshwar | Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .firstsection #header {
            font-size: calc(20px + 1vw);
            font-weight: 600;
        }

        .firstsection #innerheader {
            font-size: calc(15px + 0.5vw);
            font-weight: 300;
        }

        .firstsection #nav ul li {
            padding-left: 15px;
            padding-top: 10px;
        }

        .images .row {
            padding: 0 15px;
        }

        .images .card {
            width: 400px;
        }
        .images .card-body{
            background-color:black;
            color:white;
        }

        .dropdown-menu {
            max-height: 200px;
            overflow-y: auto;
        }



        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .back {
            margin: 1em auto;
            font-family: "Roboto";
        }

        .back span {
            color: #F2C640;
            display: table-cell;
            box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3), 0 3px 0 #ccc;
            animation: jump 2s 3;
        }

        @keyframes jump {
            0% {
                transform: translateY(0px)
            }

            50% {
                transform: translateY(-20px);
                box-shadow: 0 5px 0 rgb(242, 198, 64);
            }

            100% {
                transform: translateY(0px)
            }
        }

        .back span:nth-child(1) {
            animation-delay: 0s;
        }

        .back span:nth-child(2) {
            animation-delay: .1s;
        }

        .back span:nth-child(3) {
            animation-delay: .2s;
        }

        .back span:nth-child(4) {
            animation-delay: .3s;
        }

        .back span:nth-child(5) {
            animation-delay: .4s;
        }

        .back span:nth-child(6) {
            animation-delay: .5s;
        }

        .back span:nth-child(7) {
            animation-delay: .6s;
        }

        .back span:nth-child(8) {
            animation-delay: .7s;
        }

        .back span:nth-child(9) {
            animation-delay: .8s;
        }

        .back span:nth-child(10) {
            animation-delay: .9s;
        }

        @media only screen and (max-width: 600px) {

            .secondsection img {
                width: 100%;
                height: 300px;
            }

            .images .card {
                width: 100%;
            }
        }

    </style>

</head>

<body>
    <section class="firstsection">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" id="header"><span class="back">
                        <span>S</span>
                        <span>a</span>
                        <span>n</span>
                        <span>k</span>
                        <span>e</span>
                        <span>s</span>
                        <span>h</span>
                        <span>w</span>
                        <span>a</span>
                        <span>r</span>
                    </span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav ml-auto" id="innerheader">
                        <li class="nav-item"><a href="index.php" class="nav-link" style="color: white;"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

                        <li class="nav-item"><a href="sankeshwar_other.php" class="nav-link" style="color: white;"><i class="fa fa-picture-o" aria-hidden="true"></i> Gallery</a></li>


                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" style="color: white;">Area / Street</a>
                            <div class="dropdown-menu" aria-labelledby="navbardrop" style="line-height: 30px;">
                                <a href="#market_yard" class="dropdown-item">Market Yard</a>
                                <a href="#hanuman_nagar" class="dropdown-item">Hanuman Nagar</a>
                                <a href="#math_galli" class="dropdown-item">Math Galli</a>
                                <a href="#sansuddi_galli" class="dropdown-item">Sansuddi Galli</a>
                                <a href="#parit_galli" class="dropdown-item">Parit Galli</a>
                                <a href="#gandhi_chowka" class="dropdown-item">Gandhi Chowka</a>
                                <a href="#police_station" class="dropdown-item">Police Station</a>
                                <a href="#nidasoshi_road" class="dropdown-item">Nidasoshi Road</a>
                                <a href="#ankali_road" class="dropdown-item">Ankali Road</a>
                                <a href="#pb_road" class="dropdown-item">P.B Road</a>
                                <a href="#hanuman_nagar" class="dropdown-item">Hanuman Nagar</a>
                                <a href="#bus_stand" class="dropdown-item">Bus Stand</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#myModal" style="color: white;">Contact Us</a></li>
                        <li class="nav-item"><a data-toggle="modal" data-target="#uploading" class="nav-link" style="color: white;"> <button style="background-color:green; color:white; padding:5px; border-radius:8px;"> <i class="fa fa-upload" aria-hidden="true"></i> Upload Photos</button></a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </section>
    <hr><br><br>
   

    <section class="secondsection">
        <div class="carousel slide" data-ride="carousel" id="access">
            <ul class="carousel-indicators">
                <li data-target="#access" data-slide-to="0" class="active"></li>
                <li data-target="#access" data-slide-to="1"></li>
                <li data-target="#access" data-slide-to="2"></li>
                <li data-target="#access" data-slide-to="3"></li>
                <li data-target="#access" data-slide-to="4"></li>
                <li data-target="#access" data-slide-to="5"></li>
            </ul>
            <!--  slide show -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="shankrling.php"><img src="img/co1.jpg" alt="Shankarling Temple" width="100%" height="700px"></a>
                    <div class="carousel-caption">
                        <h3>Shankarling Temple</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="sai_baba.php"><img src="img/co7.jpg" alt="Saibaba Temple" width="100%" height="700px"></a>
                    <div class="carousel-caption">
                        <h3>Saibaba Temple</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="laxmi_narayan.php"><img src="img/co5.jpg" alt="Laxmi Narayan Temple" width="100%" height="700px"></a>
                    <div class="carousel-caption">
                        <h3>Laxmi Narayan Temple</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="shankrling.php"><img src="img/co2.jpg" alt="Shankarling Temple" width="100%" height="700px"></a>
                    <div class="carousel-caption">
                        <h3>Shankarling Temple</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="bus_stand.php"><img src="img/co3.jpg" alt="Sankeshwar Bus stand" width="100%" height="700px"></a>
                    <div class="carousel-caption">
                        <h3>Sankeshwar Bus stand</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="bus_stand.php"><img src="img/co4.jpg" alt="Nidasoshi Dwar" width="100%" height="700px"></a>
                    <div class="carousel-caption">
                        <h3>Nidasoshi Dwar</h3>
                    </div>
                </div>

            </div>
            <a href="#access" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon">

                </span>
            </a>
            <a href="#access" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon">
                </span>
            </a>
        </div>
    </section>
    <section>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Contact Us</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">

                        <h2>CONTACT US</h2>
                        <form action="contact_script.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                Name: <input type="text" class="form-control" placeholder="Enter your Name" name="name" required>
                            </div>
                            <div class="form-group">
                                Mobile (optional): <input type="tel" class="form-control" placeholder="Enter your mobile number " name="contact">
                            </div>
                            <div class="form-group">
                                Message: <textarea class="form-control" rows="3" name="message"></textarea>
                            </div>

                            <input type="submit" name='submit' class="btn btn-primary" value="Submit">
                        </form>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal" id="uploading">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Files</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <section id="upload" class="bg-dark text-white">
                            <div class="container" align="center"><br>
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <h2>You can upload images.</h2>
                                    <h3>Select an image to upload: </h3> <br>
                                    <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" required>
                                    <br><br>
                                    <input type="submit" value="Upload" name="submit"><br><br><br>
                                </form>
                            </div>
                        </section>


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>
     
    <section class="images">
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div id="market_yard" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="ganesh_market_yard.php">
                            <img class="card-img-top img-fluid " src="img/1.jpg" alt="Ganesh Temple" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Ganesh Temple</h4>
                            <p>Market Yard, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                
                <div id="math_galli" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="shankrling.php">
                            <img class="card-img-top img-fluid " src="img/2.jpg" alt="Shankarling Temple" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Shankarling Temple</h4>
                            <p>Math Galli, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="math_galli" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="banashankari.php">
                            <img class="card-img-top img-fluid " src="img/3.jpg" alt="Banashankari Temple" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Banashankari Temple</h4>
                            <p>Math Galli, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="math_galli" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="laxmi_narayan.php">
                            <img class="card-img-top img-fluid " src="img/4.jpg" alt="Laxmi Narayan Temple" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Laxmi Narayan Temple</h4>
                            <p>Math Galli, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="math_galli" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="laxmi.php">
                            <img class="card-img-top img-fluid " src="img/5.jpg" alt="Laxmi Temple" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Mahalaxmi Temple</h4>
                            <p>Math Galli, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="math_galli" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="img/6.1.jpg">
                            <img class="card-img-top img-fluid " src="img/6.jpg" alt="Ganesh Temple" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Ganesh Temple</h4>
                            <p>Math Galli, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                  
                <div id="sansuddi_galli" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="yallamma.php">
                            <img class="card-img-top img-fluid " src="img/7.jpg" alt="Yallamma Temple" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Yallamma Temple</h4>
                            <p>Sansuddi Galli, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="parit_galli" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="hanuman_parit_galli.php">
                            <img class="card-img-top img-fluid " src="img/8.jpg" alt="Hanuman Temple" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Hanuman Temple</h4>
                            <p>Parit Galli, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="gandhi_chowka" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="ganesh_gandhi_chowka.php">
                            <img class="card-img-top img-fluid " src="img/9.jpg" alt="Image" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Ganesh Temple</h4>
                            <p>Gandhi Chowka, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="gandhi_chowka" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="vithoba.php">
                            <img class="card-img-top img-fluid " src="img/10.jpg" alt="Image" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Vithoba Temple</h4>
                            <p>Gandhi Chowka, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="police_station" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="sai_baba.php">
                            <img class="card-img-top img-fluid " src="img/11.jpg" alt="Image" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Sai Baba Temple</h4>
                            <p>Police Station, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="nidasoshi_road" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="hanuman_nidasoshi_road.php">
                            <img class="card-img-top img-fluid " src="img/12.jpg" alt="Image" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Hanuman Temple</h4>
                            <p>Nidasoshi Road, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                  
                <div id="ankali_road" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="ganesh_ankali_road.php">
                            <img class="card-img-top img-fluid " src="img/13.jpg" alt="Image" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Ganesh and Hanuman Temple</h4>
                            <p>Ankali Road, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="kalika_devi.php">
                            <img class="card-img-top img-fluid " src="img/14.jpg" alt="Image" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Kalika Devi Temple</h4>
                            <p>Dhang Galli, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="pb_road" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="img/15.jpg">
                            <img class="card-img-top img-fluid " src="img/15.jpg" alt="image" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">P.B Road</h4>
                            <p>Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="hanuman_nagar" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="img/16.1.jpg">
                            <img class="card-img-top img-fluid " src="img/16.jpg" alt="image" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Durga Devi Temple</h4>
                            <p>Hanuman Nagar, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div id="hanuman_nagar" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="hanuman_hanuman_nagar.php">
                            <img class="card-img-top img-fluid " src="img/17.jpg" alt="image" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Hanuman Temple</h4>
                            <p>Hanuman Nagar, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="img/18.1.jpg">
                            <img class="card-img-top img-fluid " src="img/18.jpg" alt="Image" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Bireshwar Temple</h4>
                            <p>Subhash Road, Sankeshwar</p>
                        </div>
                    </div>
                </div>
                 
                <div id="bus_stand" class="col-12 col-md-6 col-lg-4" style="padding-bottom:15px;">
                    <div class="card">
                        <a href="bus_stand.php">
                            <img class="card-img-top img-fluid " src="img/19.jpg" alt="image" style="width:100%; height:300px;"></a>
                        <div class="card-body text-center">
                            <h4 class="card-title">Sankeshwar Bus Stand</h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <br>
    </section>

    <?php include "footer.php"; ?>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sankeshwar</title>
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



        @media only screen and (max-width: 600px) {

            .secondsection img {
                width: 100%;
                height: 300px;
            }
        }

    </style>

</head>

<body>
    <section class="firstsection">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand" id="header">Sankeshwar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav ml-auto" id="innerheader">
                        <li class="nav-item"><a href="index.php" class="nav-link" style="color: white;"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

                        <li class="nav-item"><a href="sankeshwar_other.php" class="nav-link" style="color: white;"><i class="fa fa-picture-o" aria-hidden="true"></i> Gallery</a></li>

                        <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#myModal" style="color: white;">Contact Us</a></li>
                        <li class="nav-item"><a data-toggle="modal" data-target="#uploading" class="nav-link" style="color: white;"> <button style="background-color:green; color:white; padding:5px; border-radius:8px;"> <i class="fa fa-upload" aria-hidden="true"></i> Upload Photos</button></a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </section><br><br><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button onclick="goBack()" class="btn-lg btn-danger"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</button>
   
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
                    <script type="text/javascript">
	atOptions = {
		'key' : '168faa0c4bb9ddb87b1171a66408431e',
		'format' : 'iframe',
		'height' : 60,
		'width' : 468,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://cosmeticsgenerosity.com/168faa0c4bb9ddb87b1171a66408431e/invoke.js"></scr' + 'ipt>');
</script>

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
    

</body>
<script>
    function goBack() {

        window.history.back();
    }

</script>

</html>

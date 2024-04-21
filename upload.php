<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
     $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo  nl2br ("Sorry, only JPG, JPEG, PNG & GIF files are allowed.\n");
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo  nl2br ("Sorry, your file was not uploaded.\n" );
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";?>
      <html>
          <body>
          <br><br>
          <a href="index.php"><button style="background-color:green; color:white; font-size:20px;"> Home </button></a>
          <a href="index.php"><button style="background-color:green; color:white; font-size:20px;"> Upload another image </button></a>
          </body>
          </html>
          <?php
  } else {
    echo "Sorry, upload failed";
  }
}
?>
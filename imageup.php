<?php
 include('connection.php');
 
 if(isset($_POST['submit'])){
     $name = $_FILES['file']['name'];
     $target_dir = "imageupload/";
     $target_file = $target_dir . basename($_FILES["file"]["name"]);
     $imagedescription = ($_REQUEST['imagedescription']);
     $uploadOk = 1;

     // Select file type
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

     $sql = "SELECT imagepath, imagedescription FROM imageupload WHERE imagepath='$target_file' and imagedescription='$imagedescription' ";
     $results = mysqli_query($conn, $sql);

         // Check if file already exists
         if (mysqli_num_rows($results) > 0) {
            $uploadOk = 0;
            echo "Sorry, file already exists ! ";
         }

          // Check if file already exists
         if (file_exists($target_file)) {
             echo "Sorry, file already exists !! ";
              $uploadOk = 0;
         }
         // Check file size
         if ($_FILES["file"]["size"] > 500000) {
             echo "Sorry, your file is too large.";
              $uploadOk = 0;
         }
         // Allow certain file formats
         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
           && $imageFileType != "gif" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }
         // Check if $uploadOk is set to 0 by an error
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded!!!";
         // if everything is ok, try to upload file
         } else {
            // Insert record
         $query = "insert into imageupload(imagepath, imagedescription) values('$target_file','$imagedescription')";
         mysqli_query($conn,$query) or die(mysqli_error($con));
         if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
              echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
         } else {
              echo "Sorry, there was an error uploading your file.";
                      }
    }
      

    }

?>
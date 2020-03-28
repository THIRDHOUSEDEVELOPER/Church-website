<?php
 include('connection.php');
 
 if(isset($_POST['upload'])){
     $name = $_FILES['file']['name'];
     $target_dir = "audioupload/";
     $target_file = $target_dir . basename($_FILES["file"]["name"]);
     $audiodescription = ($_REQUEST['audiodescrition']);
     $audioFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     $uploadOk = 1;

     // Select file type
     

     $sql = "SELECT audiopath, audiodescription FROM audioupload WHERE audiopath='$target_file' and audiodescription='$audiodescription' ";
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
         if ($_FILES["file"]["size"] > 45000000) {
             echo "Sorry, your file is too large.";
              $uploadOk = 0;
         }
         // Allow certain file formats
         if($audioFileType != "mp3") {
              echo "Sorry, only mp3 files are allowed.";
             $uploadOk = 0;
         }
         // Check if $uploadOk is set to 0 by an error
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded!!!";
         // if everything is ok, try to upload file
         } else {
            // Insert record
         $query = "insert into audioupload(audiopath, audiodescription) values( '$target_file','$audiodescription')";
         mysqli_query($conn,$query) or die(mysqli_error($con));
         if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
              echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
         } else {
              echo "Sorry, there was an error uploading your file.";
                      }
    }
      
    }

?>
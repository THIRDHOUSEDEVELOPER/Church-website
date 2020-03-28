<?php
        include('connection.php');

                
        $sql = "SELECT * FROM imageupload ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result))
			{
                echo "<div class=col-md-3 col-sm-6 col-xs-12 wow fadeIn data-wow-offset=50 data-wow-delay=0.6s>" .
                "<div class=img-thumbnail>" .
                "<a href=$row[imagepath] target=_blank>" . "<img src=$row[imagepath] class=img-responsive alt=image>" .
                "</a>" .
                "<div class=portfolio-overlay>" .
                "<p>" .$row["imagedescription"]. "</p>" .
                "</div>" .
                "</div>" . 
                "</div>";	

            }           
              

        } else {
            echo "Sorry contents will be available soon!!";
        }
        
        mysqli_close($conn);


?>
<?php
        include('connection.php');

                
        $sql = "SELECT * FROM audioupload ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result))
			{
                echo "<div class=col-md-4 col-sm-6 col-xs-12 wow fadeIn data-wow-offset=50 data-wow-delay=0.6s>" .
                "<div class=team-wrapper>" .
                "<h4 class=text-center>" .
                $row["audiodescription"].
                "</h4>" . 
                "<audio controls>".
                "<source src=$row[audiopath] type=audio/mpeg>" .
                "</audio>" . 
                "</div>" .
                "</div>";	
            }           
              

        } else {
            echo "Sorry contents will be available soon!!";
        }
        
        mysqli_close($conn);


?>
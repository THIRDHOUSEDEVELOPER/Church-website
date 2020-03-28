<?php
        include('connection.php');

                
        $sql = "SELECT * FROM sermon ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result))
			{
                echo "<div class=col-md-4 wow fadeIn data-wow-offset=50 data-wow-delay=0.6s>" .
                "<h3>".$row["Title"]."</h3>" .
                "<h4>".$row["Subtitle"]."</h4>" .
                "<p>".$row["Comment"]."</p>" .
                "</div>";	

            }           
              

        } else {
            echo "Sorry contents will be available soon!!";
        }
        
        mysqli_close($conn);


?>
<?php
        include('connection.php');

                
        $sql = "SELECT * FROM events ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result))
			{
            echo"<div class=col-md-4 wow fadeInUp data-wow-offset=50 data-wow-delay=0.6s>" .
                "<h3 class=media-heading>" .$row["eventname"]."</h3>" .
                "<h4>" .$row["eventdescription"]."</h4>" .
                "<p>" . "<strong>". "VENUE: " . "</strong>" .$row["venue"]."</p>" .
                "<p>" . "<strong>". "DATE|TIME: " . "</strong>" .$row["date_time"]."</p>" .
                "</div>";	

            }           
               
        } else {
            echo "0 results";
        }
        
        mysqli_close($conn);


?>
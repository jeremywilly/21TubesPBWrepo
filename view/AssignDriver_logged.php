
<!-- <body> -->

    <!-- Navbar -->

    <div>
        <div class="w3-bar w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="home_logged" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Home</a>
            <a href="Home" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
            <a href="Job.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">History Driver</a>
            
        </div>
    </div>

    <div class="w3-display-middle" style="height:35rem;">

        <h2 class="w3-center"><i>Assign Driver</i></h2>
        <br>

        <div class="w3-card-4 w3-al w3-round w3-center">
        <h1>Tampilan Pengiriman masuk siap untuk di assign</h1>
        <table class="w3-table w3-light-grey w3-hoverable w3-centered">
            <tr class="w3-grey">
                <th>Driver-driver yang tersedia</th>
            </tr>
            <?php
                if(is_array($result) || is_object($result)){
                    foreach ($result as $key => $row) {
                        echo "<tr>"; 								
                        echo "<td>" . $row['name'] . "</td>";		
                        echo "</tr>";
                    }
                    echo "<tr>"; 								
                    echo "<td> <button </td>";		
                    echo "</tr>"; 
                }

            ?>
        </table>
        </div>

    </div
    ><br>
    <!-- <div class="w3-container" width="100%">
        <canvas id="canvas" width="500" height="150"></canvas>
    </div> -->

    <script>
        
    </script>

<!-- </body> -->
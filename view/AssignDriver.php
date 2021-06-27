
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        font-family: "Lato", sans-serif
    }


    body {
        font-family: "Lato", sans-serif
    }

    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
</style> -->

<!-- <body> -->

    <!-- Navbar -->

    <div>
        <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="Home.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
            <a href="Job.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">History Driver</a>
            
        </div>
    </div>

    <div class="w3-container w3- white">
    </div>
    <div class="w3-display-container w3- w3-black " style="height:35rem;">

        <h2 class="w3-display-topmiddle"><i>Assign Driver</i></h2>
        <br>

        <div class="w3-card-4 w3-al  w3-display-middle w3-round" style="width: 35%;margin-top: 1rem;">
            <h1>tampilan Pengiriman masuk siap untuk di assign</h1>
        </div>

        <div class="w3-card-4 w3-al  w3-display-right w3-round" style="width: 35%;margin-top: 1rem;">
        <table class="w3-table">
            <tr>
                <th>Driver-driver yang tersedia</th>
            </tr>
            <?php
                if(is_array($result) || is_object($result)){
                    foreach ($result as $key => $row) {
                        echo "<tr>"; 								
                        echo "<td>" . $row['name'] . "</td>";		
                        echo "</tr>";
                    }
                }
                
            ?>
        </table>
        </div>

    </div
    ><br>
    <div class="w3-container" width="100%">
        <canvas id="canvas" width="500" height="150"></canvas>
    </div>

    <script>
        
    </script>

<!-- </body> -->
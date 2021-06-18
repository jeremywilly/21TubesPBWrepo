<?php 
require "mysqlDB.php";

?>
<!DOCTYPE html>
<html lang="en">
<title>Job</title>

<style>

</style>

<body>

    <!-- Navbar -->

    <div>
        
    </div>

    <div class="image">
            
        </div>
        <p class="list pekerjaan"></p>
        <div class="job">
        <?php
            $query = "SELECT * FROM driver ORDER BY id";
            $result = $db->executeSelectQuery($query);
            foreach($result as $key => $row){
                echo '<div class="tab"><br><br> id : '.$row['id'].'<br> nama driver :'.$row['name'].
                '<br> 
                ';
            }
        ?>
        </div>

        <h2 style="margin-left: 1rem;"> Recently Popular</h2>


    <div class="w3-container" width="100%">
        <canvas id="canvas" width="500" height="150"></canvas>
    </div>
        <script>
 
    </script>
</body>
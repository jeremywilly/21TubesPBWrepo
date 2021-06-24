<?php 
?>

<!DOCTYPE html>
<html lang="en">
<title>Track</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
</style>

<body>

    <!-- Navbar -->

    <div>
        <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="Home.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
            <a href="Job.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TRACK</a>
            <a href="PostJob.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">KIRIM</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More"><i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="profile.php" class="w3-bar-item w3-button">Profile</a>
                    <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
                </div>
            </div>
        </div>
    </div>
<div class="w3-container w3- white">     
   </div>
   <div class="w3-display-container w3- w3-black " style= "height:35rem;">
   
      <h2 class="w3-display-topmiddle"><i>Masukan Detail Barang Yang Akan di track</i></h2>
      <br>
      
      <div class="w3-card-4 w3-al w3-white w3-display-middle w3-round" style="width: 35%;margin-top: 1rem;">
         <form class="w3-container" method="post" action="">
           <br>
            <p>
            <label class="w3-text-black"><b>Kode  </b></label>
            <input class="w3-input w3-border" name="title" type="text" placeholder="masukan kode traking" ></p>
            
          </form>
      </div>
   </div><br>
    <script>
        
    </script>

</body>
<!-- belum diubah -->
<?php 
if ($_SESSION['is_login'] = FALSE) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Kirim</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


</style>
	<div>
        <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="Home.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
            <a href="Track.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TRACK</a>
            <a href="Kirim.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">KIRIM</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More"><i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="profile.php" class="w3-bar-item w3-button">Profile</a>
                    <a href="../process/logout.php" class="w3-bar-item w3-button">Log Out</a>
                </div>
            </div>
        </div>
    </div>
<div class="w3-container w3- white">     
   </div>
   <div class="w3-display-container w3- w3-black " style= "height:35rem;">
   
      <h2 class="w3-display-topmiddle"><i>Masukan Detail Barang Yang Akan di kirim</i></h2>
      <br>
      
      <div class="w3-card-4 w3-al w3-white w3-display-middle w3-round" style="width: 35%;margin-top: 1rem;">
         <form class="w3-container" method="post" action="inputbarang.php">
           <br>
            <p>
            <label class="w3-text-black"><b>Nama Barang</b></label>
            <input class="w3-input w3-border" name="namabarang" type="text" placeholder="masukan nama barang" ></p>
            <p>      
            <label class="w3-text-black"><b>Satuan</b></label>
            <input class="w3-input w3-border" name="unit" type="text"placeholder="satuan jumlah"></p>
            <p>      
            <label class="w3-text-black"><b>Jumlah</b></label>
            <input class="w3-input w3-border" name="quantity" type="text"placeholder="satuan jumlah"></p>
            <p>     
            <label class="w3-text-black"><b>Kategori</b></label>
            <select class="w3-select w3-border" name="kategori"  >
               <option value="" disabled selected></option>
               <option value="Full-time">Food</option>
               <option value="Part-time">Furniture</option>
             </select></p>             
            <p>
            <label for="waktukirim">Waktu Pengiriman</label>
            <input type="datetime-local" id="tanggal" name="waktukirim">
            <input type="submit">
            </p>
            <p>
            <label class="w3-text-black"><b>Alamat</b></label>
            <input class="w3-input w3-border" name="alamat" type="text"placeholder="satuan jumlah">
            </p>
          </form>
      </div>
   </div><br>
</body>
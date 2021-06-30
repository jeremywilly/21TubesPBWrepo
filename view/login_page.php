<!-- <php include('header.php'); //blm pakai layout ?> -->

<!-- <form  action="login-check" method="post">
    <label for="">E-mail:</label>
    <input type="text" name="email" required>
    
    <label for="">Password:</label>
    <input type="password" name="pass" required>
    

    <button type="submit" name="login_user">Login</button>
</form> -->

<!-- <h1 class="w3-center"><b>Login</b></h1>
<hr>


<div class="w3-display-middle w3-center">
    <form class="w3-container" action="/action_page.php" method="post">
        
        <label class="">E-mail:</label>
        <input type="text" class="w3-input w3-border w3-sand" name="email"  required>
        
        <label class=""><b>Password:</b></label>
        <input type="password" class="w3-input w3-border w3-sand" name="pass" required>
        
        <button type="submit" class="w3-btn w3-brown">Login</button>
    </form>
</div> -->

<div class="w3-display-middle w3-center">
  <h1><b>Login</b></h1>
  <hr style="width: 700px;">

  <div class="w3-border">
    <form class="w3-container w3-padding-32 w3-margin" action="login-check" method="post">

    <label class="w3-text-brown"><b>E-mail:</b></label>
    <input type="text" class="w3-input w3-border w3-sand" name="email" required>

    <br>

    <label class="w3-text-brown"><b>Password:</b></label>
    <input type="password" class="w3-input w3-border w3-sand" name="pass" required>

      <button type="submit" class="w3-btn w3-brown" name="login_user">Login</button>
    </form>

    <p><a href="signup">Don't have an account?</a></p>
  </div>

  <?php
  foreach($conditions as $cond) {
      if( $cond == "wrong email or password") {
          echo "<p style='color: red;'>Wrong e-mail or password!</p>";
      }   
  }
  if( empty($conditions) || count($conditions)==0) {       
      // exit();      //jgn nanti css gakebaca
      //do nothing
  }
  ?>
</div>





<!-- <php include('footer.php'); ?> -->
<!-- kenapa ini gaperlu view/footer.php ? -->


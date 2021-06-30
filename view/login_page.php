<!-- <php include('header.php'); //blm pakai layout ?> -->
<h1>Login</h1>
<hr>

<form action="login-check" method="post">
    <label for="">E-mail:</label>
    <input type="text" name="email" required>
    
    <label for="">Password:</label>
    <input type="password" name="pass" required>
    

    <button type="submit" name="login_user">Login</button>
</form>
<p><a href="signup">don't have an account?</a></p>


<!-- <php include('footer.php'); ?> -->
<!-- kenapa ini gaperlu view/footer.php ? -->

<?php
foreach($conditions as $cond) {
    if( $cond == "wrong email or password") {
        echo "<p style='color: red;'>Wrong e-mail or password!</p>";
    }   
}
if( empty($conditions) || count($conditions)==0) {       
    // exit();      //jgn nanti css gakebaca
    //do nothing
}?>
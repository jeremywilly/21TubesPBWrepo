<!-- halaman pertama. (diarahkan index) -->
<?php include('view/header.php') ?>
<h1>Sign Up</h1>
<hr>

<form action="" method="post">
    <label for="">Name:</label>
    <input type="text" name="name">
    
    <label for="">E-mail:</label>
    <input type="text" name="email">
    
    <label for="">Password:</label>
    <input type="password" name="pass">
    
    <label for="">Re-enter Password:</label>
    <input type="password" name="pass">

    
    <input type="button" value="Confirm">
    
</form>
<a href="view/login_page.php">Already have an account?</a>



<?php include('view/footer.php') ?>
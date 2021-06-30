<!-- halaman pertama. (diarahkan index) -->
<h1>Sign Up</h1>
<hr>

<div class="container">

</div>
<form action="signup-check" method="post">
    <label for="">Name:</label>
    <input type="text" name="name" required>
    
    <label for="">E-mail:</label>
    <input type="text" name="email" required>
    
    <label for="">Password:</label>
    <input type="password" name="pass" required>
    
    <label for="">Re-enter Password:</label>
    <input type="password" name="passv" required>

    
    <button type="submit" name="signup_user">Submit</button>
    
</form>
<p><a href="login">Already have an account?</a></p>

<?php
// !isset($_GET['signup'])  //ga update link
// if( empty($conditions) || count($conditions)==0) {       
//     // exit();      //jgn nanti css gakebaca
//     //do nothing
// }
// else{
//     //$signupCheck = $_GET['signup'];
//     foreach($conditions as $cond) {
//         if( $cond == "invalidemail") {
//             echo "<p class='error'>You used an invalid e-mail!</p>";
//         }   
//         if( $cond == "password") {
//             echo "<p class='error'>Your password doesn't match!</p>";
//         }  
//         if( $cond == "same") {
//             echo "<p class='error'>Somebody already used that email !</p>";
//         }   
//     }
    
// }
foreach($conditions as $cond) {
    if( $cond == "email") {
        echo "<p style='color: red;'>You used an invalid e-mail!</p>";
    }   
    if( $cond == "password") {
        echo "<p style='color: red;'>Your password doesn't match!</p>";
    }  
    if( $cond == "same") {
        echo "<p style='color: red;'>Somebody already used that email !</p>";
    }   
}
if( empty($conditions) || count($conditions)==0) {       
    // exit();      //jgn nanti css gakebaca
    //do nothing
}
?>

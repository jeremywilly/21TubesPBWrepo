<!-- halaman pertama. (diarahkan index) -->
<!-- <h1>Sign Up</h1>

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
<p><a href="login">Already have an account?</a></p> -->

<div class="w3-display-middle w3-center">
    <h1>Sign Up</h1>
    <hr style="width: 700px;">

    <div class="w3-border">
        <form class="w3-container w3-padding-32 w3-margin" action="signup-check" method="post">  
            <label class="w3-text-brown"><b>Name :</b></label>
            <input type="text" class="w3-input w3-border w3-sand" name="name" >  

            <label class="w3-text-brown"><b>E-mail :</b></label>
            <input type="text" class="w3-input w3-border w3-sand" name="email" >

            <label class="w3-text-brown"><b>Password :</b></label>
            <input type="password" class="w3-input w3-border w3-sand" name="pass">

            <label class="w3-text-brown"><b>Re-enter Password :</b></label>
            <input type="password" class="w3-input w3-border w3-sand" name="passv">

            <button type="submit" class="w3-btn w3-brown" name="signup_user">Submit</button>
        </form>

        <p><a href="login">Already have an account?</a></p> 
        <!-- perlu p? -->
    </div>
</div>

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

//awal dulu biar dicek berisi atau engga
if( empty($conditions) || count($conditions)==0) { //cukup 1 atau engga?
    // exit();      //jgn nanti css gakebaca
    //do nothing
}else{
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
}


?>

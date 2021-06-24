<?php
    $url = $_SERVER['REDIRECT_URL'];    
    $baseURL = '/kul/tubes/21TubesPBWrepo';     
    //pastikan sesuai baseUrl. kl perlu buat dir persis sama (didepan htdocs) kul, tubes, 21.. 

    if ($_SERVER["REQUEST_METHOD"] == "GET") {                  //kl GET
        switch ($url) {
            case $baseURL.'/users':                             //yg /users , tnpa view (lngsng)
                // require_once "controller/userController.php";
                // $userCtrl = new UserController();        
                // echo $userCtrl->view_user();           
                break;
            default:
                echo '404 Not Found from router.php';
                break;
        }
    } else if ($_SERVER["REQUEST_METHOD"] == "POST") {          //kl POST
        switch ($url) {
            case $baseURL.'/users':                             //kl perlu
                break;
            default:
                echo '404 Not Found from router.php';
                break;
        }
    }
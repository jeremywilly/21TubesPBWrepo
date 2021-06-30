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
            case $baseURL.'/home':                       //ke assign
                require_once "controller/userController.php";
                $userCtrl = new UserController();
                echo $userCtrl->view_home();
                break;
            case $baseURL.'/login':
                require_once "controller/userController.php";
                $userCtrl = new UserController();
                echo $userCtrl->view_login_page();
                break;
            case $baseURL.'/signup':
                require_once "controller/userController.php";
                $userCtrl = new UserController();
                echo $userCtrl->view_signup_page();
                break;
            case $baseURL.'/signup-check':
                require_once "controller/userController.php";
                $userCtrl = new UserController();
                echo $userCtrl->signup();
            case $baseURL.'/assigndriver':                       //ke assign
                require_once "controller/driverController.php";
                $driverCtrl = new DriverController();
                echo $driverCtrl->view_drivers();
                break;
            case $baseURL.'/assigndriver_logged':                       //ke assign
                require_once "controller/driverController.php";
                $driverCtrl = new DriverController();
                echo $driverCtrl->view_drivers_logged();
                break;
            default:
                echo '404 Not Found from router.php';
                break;
        }
    } else if ($_SERVER["REQUEST_METHOD"] == "POST") {          //kl POST
        switch ($url) {
            case $baseURL.'/signup-check':
                require_once "controller/userController.php";
                $userCtrl = new UserController();
                echo $userCtrl->signup();
            case $baseURL.'/login-check':
                require_once "controller/userController.php";
                $userCtrl = new UserController();
                echo $userCtrl->login();
            // case $baseURL.'/login':
            //     require_once "controller/userController.php";
            //     $driverCtrl = new UserController();
            //     //echo $driverCtrl->view_login_page();
            //     break;
            case $baseURL.'/assigndriver':
                require_once "controller/driverController.php";
                $driverCtrl = new DriverController();
                //echo $driverCtrl->view_drivers();
                break;
            default:
                echo '404 Not Found from router.php';
                break;
        }
    }
<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class UserController {  
    protected $db;

    public function __construct() {
        $this->db = new MySQLDB("localhost", "root", "", "delivery");
    }

    public function view_home() {
        return View::createViewH('home.php');
    }

    public function view_home_logged() {
        return View::createViewH('Home_logged.php');
    }

    public function view_login_page() {                             //$this->getAllDriver();             //kosong
        //$result = $this->getAllDriverMasihKerja();
        $condition = array();
        return View::createViewCheck('login_page.php', $condition);
    }
    
    public function view_signup_page() {                             //$this->getAllDriver();             //kosong
        //$result = $this->getAllDriverMasihKerja();
        return View::createViewH('signup_page.php');
    }       
    
    public function signup() {
        // header("Location: ../21TubesPBWrepo/view/signup_page.php");//test

        $name = $this->db->escapeString($_POST['name']);
        $email = $this->db->escapeString($_POST['email']);
        $pass = $this->db->escapeString($_POST['pass']);
        $pass_verify = $this->db->escapeString($_POST['passv']);

        $condition ="";

        //validate
        if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {          //@gmai.com is valid. who coul've thought
            // header("Location: ../index.php?signup=invalidemail");
            // header("Location: ../signup?signup=invalidemail&name=$name");
            // $this->view_signup_page(); //gabisa

            $condition ="invalid email";
            return View::createViewCheck('signup_page.php', $condition);
        }else if ($pass !== $pass_verify ){  //kl pass sama 
            $condition ="password didn't match";
            return View::createViewCheck('signup_page.php', $condition);    //kl
            
        }else if($this->db->sameEmail($email)) {  //kl ada yg sama
            $condition ="someone's already use that";
            return View::createViewCheck('signup_page.php', $condition);
        } else{ // valid semua
            //masukin
            $this->db->prepareandExecute($name, $email, $pass); //stlh di escape dan prepared
            
            // $stmt = $this->db->prepareStmt($sql);
            // $stmt->bind_param("sss", $name, $email, $pass);

            //header("Location: ../21TubesPBWrepo/view/Home_logged.php");
            return View::createViewH('home_logged.php');
        }
    }

    /*
    public function login(Request $req) {
        if($req->isPost()) {}
        // dum
        //validate
                      
    }  */ 
    public function login() {
        // header("Location: ../21TubesPBWrepo/view/signup_page.php");//test

        $email = $this->db->escapeString($_POST['email']);
        $pass = $this->db->escapeString($_POST['pass']);

        $condition ="";

        //validate
        if( !$this->db->checkAccount($email, $pass) ) {    

            $condition ="invalid email or password";
            return View::createViewCheck('login_page.php', $condition);
        }else{ //kalo true, atau ada
            
            //header("Location: ../21TubesPBWrepo/view/Home_logged.php");
            return View::createViewH('home_logged.php');
        }
    }
                
    public function view_update($isUpdated = false) {       
        return View::createView('update.php',["isUpdated"=>$isUpdated]);
    }


}

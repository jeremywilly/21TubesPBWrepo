<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class UserController {  
    protected $db;

    public function __construct() {
        $this->db = new MySQLDB("localhost", "root", "", "ide");
    }

    public function view_user() {
        //validate
                                
    }                               
                
    public function view_update($isUpdated = false) {       
        return View::createView('update.php',["isUpdated"=>$isUpdated]);
    }


}

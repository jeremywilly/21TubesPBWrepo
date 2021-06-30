<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class DriverController {  
    protected $db;

    public function __construct() {
        $this->db = new MySQLDB("localhost", "root", "", "delivery");
    }

    public function view_drivers() {            
        $result = $this->getAllDriver();     
        //$result = $this->getAllDriverMasihKerja();
        return View::createView('AssignDriver.php',
        [
            "result" => $result
        ]); //buat view enfine, untuk liat smua driver
    }     
    
    public function view_drivers_logged() {            
        $result = $this->getAllDriver();     
        
        return View::createView('AssignDriver.php',
        [
            "result" => $result
        ]); 
    }    

    public function getAllDriver () {               //semua , nama aja
        $query = "SELECT name FROM drivers";
        $query_result = $this->db->executeSelectQuery($query);
        return $query_result;
    }

    public function getAllDriverMasihKerja () {               //semua, nama dan available / end_work_date null. semua jg null
        //$query = "SELECT name FROM drivers WHERE end_wor";
        $query = "SELECT nama FROM drivers WHERE end_work_date IS NULL";
        $query_result = $this->db->executeSelectQuery($query);
        return $query_result;
    }
}
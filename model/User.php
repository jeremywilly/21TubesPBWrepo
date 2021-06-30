<?php
class User
{
    protected $id;
    protected $name;
    private $db;

    public function __construct ($idUser, $name) {
        $this->id = $idUser;
        $this->name = $name;
    }
}
?>
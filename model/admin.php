<?php
class Admin extends User
{
    public function __construct ($idAdmin, $nameAdmin) {
        $this->id = $idAdmin;
        $this->name = $nameAdmin;
    }
}
?>
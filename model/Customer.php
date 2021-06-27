<?php
class Customer extends User
{
    public function __construct ($idCustomer, $nameCustomer) {
        $this->id = $idCustomer;
        $this->name = $nameCustomer;
    }
}
?>
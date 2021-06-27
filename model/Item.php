<?php
class Item
{
    protected $id;
    protected $name;
    protected $category;

    public function __construct ($idItem, $nameItem, $category) {
        $this->id = $idItem;
        $this->name = $nameItem;
        $this->category = $category;
    }
}

?>
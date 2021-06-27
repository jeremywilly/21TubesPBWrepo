<?php
class Driver extends User
{
    protected $start_work_date;
    protected $end_work_date;

    public function __construct ($idDriver, $nameDriver, $strt_work_date, $end_work_date) {
        $this->id = $idDriver;
        $this->name = $nameDriver;
        $this->start_work_date = $strt_work_date;
        $this->end_work_date = $end_work_date;
    }
}
?>
<?php

class Delivery
{
    protected $idDelivery;
    protected $customer_id;
    protected $destination_id;
    protected $driver_id;
    protected $scheduled_datetime;
    protected $start_datetime;
    protected $end_datetime;
    protected $status;

    public function __construct ($idD, $cutmr_ID, $dest_id, $drvr_id, $schdld_dtme, $strt_dt, $end_dt, $status) {
        $this->idDelivey = $idD;
        $this->customer_id = $cutmr_ID;
        $this->destination_id = $dest_id;
        $this->driver_id = $drvr_id;
        $this->scheduled_datetime = $schdld_dtme;
        $this->start_datetime = $strt_dt;
        $this->end_datetime = $end_dt;
        $this->status = $status;
    }
}

?>
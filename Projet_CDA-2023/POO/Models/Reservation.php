<?php

class Reservation {
    private $id_reservation;
    private $date_reservation;

public function __construct($id_reservation, $date_reservation)
    {
        $this->id_reservation = $id_reservation;
        $this->date_reservation = $date_reservationn;
    }

public function getId_reservation()
    {
        return $this->id_reservation;
    }

public function getDate_reservation()
    {
        return $this->date_reservation;
    }

public function setId_reservation($id_reservation)
    {
        $this->id_reservation = $id_reservation;
    }

public function setDate_reservation($date_reservation)
    {
        $this->date_achat = $date_reservation;
    }

}

?>
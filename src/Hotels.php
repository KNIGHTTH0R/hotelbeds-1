<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;

/**
 * Description of Hotels
 *
 * @author antonio
 */
class Hotels {

    /**
     * Required
     * @var Integer[]
     */
    protected $hotel;

    public function getHotel() {
        return $this->hotel;
    }

    public function setHotel(array $hotel) {
        $this->hotel = $hotel;
        return $this;
    }

    /**
     * Function that prepares the item for JSON request
     * @return type
     */
    public function __toJson() {
        return json_encode($this);
    }

}

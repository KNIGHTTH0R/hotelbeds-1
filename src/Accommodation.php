<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;

/**
 * Description of Accommodation
 *
 * @author antonio
 */
class Accommodation {

    /**
     * Required
     * @var String 
     * Values: Hotels, Hostel,etc
     */
    protected $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function __toString() {
        return $this->name;
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of Stay
 *
 * @author antonio
 */
class Stay extends BaseJsonEncodable {

    /**
     * Required
     * @var string Required 
     * @example YYYY-MM-DD 
     */
    protected $checkIn;

    /**
     * Required
     * @var string Required 
     * @example YYYY-MM-DD 
     */
    protected $checkOut;

    /**
     * Optional
     * @var integer
     * @example Integer from 1 to 5 
     * @description Amount of days after and before the check-in to check availability, keeping the same stay duration
     */
    protected $shiftDays;

    /**
     * Optional
     * @var Boolean
     * @example TRUE = Return shiftDays even if there is no availability for the searched dates (default)
     * @example FALSE = If there is no availability for the searched dates, do not return any shiftDays.
     */
    protected $allowOnlyShift;

    /* Getters & Setters */

    public function getCheckIn() {
        return $this->checkIn;
    }

    public function getCheckOut() {
        return $this->checkOut;
    }

    public function getShiftDays() {
        return $this->shiftDays;
    }

    public function getAllowOnlyShift() {
        return $this->allowOnlyShift;
    }

    public function setCheckIn($checkIn) {
        $this->checkIn = $checkIn;
        return $this;
    }

    public function setCheckOut($checkOut) {
        $this->checkOut = $checkOut;
        return $this;
    }

    public function setShiftDays($shiftDays) {
        $this->shiftDays = $shiftDays;
        return $this;
    }

    public function setAllowOnlyShift(Boolean $allowOnlyShift) {
        $this->allowOnlyShift = $allowOnlyShift;
        return $this;
    }

}

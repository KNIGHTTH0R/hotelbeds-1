<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;

/**
 * Description of Filter
 *
 * @author antonio
 */
class Filter {

    /**
     * Optional
     * It filters rates which ‘net’ value is lower than minRate
     * @var Float
     */
    protected $minRate;

    /**
     * Optional
     * It filters rates which ‘net’ value is higher than maxRate
     * @var Float 
     */
    protected $maxRate;

    /**
     * Optional
     * @var Integer
     * Between 1 and 5
     */
    protected $minCategory;

    /**
     * Optional
     * @var Integer
     * Between 1 and 5
     */
    protected $maxCategory;

    /**
     * Optional
     * @var String Optional
     * @example AT_WEB, AT_HOTEL, BOTH
     */
    protected $paymentType;

    /**
     * Optional
     * Maximum number of rates per room
     * @var Integer
     */
    protected $maxRatesPerRoom;

    /**
     * Optional
     * The attribute is used to include or exclude package rates. Values are
     * TRUE = Package rates are included
     * FALSE = Package rates are excluded (default value)
     * @var Boolean
     */
    protected $packaging;

    /**
     * Optional
     * It is used to include or exclude hotel packages. Those are packages 
     * created by Hotelbeds that include another product (like massage, a ticket, etc.)
     * together with the hotel.Values:
     * @var String
     * YES : To retrieve only hotel packages
     * NO: To retrieve only non hotel packages.
     * BOTH: To receive both hotel packages and not (option by default)
     */
    protected $hotelPackage;

    /**
     * Optional
     * Maximum number of rooms you want to receive for each hotel
     * @var Integer
     */
    protected $maxRooms;

    public function getMinRate() {
        return $this->minRate;
    }

    public function getMaxRate() {
        return $this->maxRate;
    }

    public function getMinCategory() {
        return $this->minCategory;
    }

    public function getMaxCategory() {
        return $this->maxCategory;
    }

    public function getPaymentType() {
        return $this->paymentType;
    }

    public function getMaxRatesPerRoom() {
        return $this->maxRatesPerRoom;
    }

    public function getPackaging() {
        return $this->packaging;
    }

    public function getHotelPackage() {
        return $this->hotelPackage;
    }

    public function getMaxRooms() {
        return $this->maxRooms;
    }

    public function setMinRate(Float $minRate) {
        $this->minRate = $minRate;
        return $this;
    }

    public function setMaxRate(Float $maxRate) {
        $this->maxRate = $maxRate;
        return $this;
    }

    public function setMinCategory($minCategory) {
        $this->minCategory = $minCategory;
        return $this;
    }

    public function setMaxCategory($maxCategory) {
        $this->maxCategory = $maxCategory;
        return $this;
    }

    public function setPaymentType(String $paymentType) {
        $this->paymentType = $paymentType;
        return $this;
    }

    public function setMaxRatesPerRoom(Integer $maxRatesPerRoom) {
        $this->maxRatesPerRoom = $maxRatesPerRoom;
        return $this;
    }

    public function setPackaging(Boolean $packaging) {
        $this->packaging = $packaging;
        return $this;
    }

    public function setHotelPackage($hotelPackage) {
        $this->hotelPackage = $hotelPackage;
        return $this;
    }

    public function setMaxRooms(Integer $maxRooms) {
        $this->maxRooms = $maxRooms;
        return $this;
    }

    public function __toJson() {
        return json_encode($this);
    }

}

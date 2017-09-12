<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of Hotel
 *
 * @author antonio
 */
class Hotel extends BaseJsonEncodable {

    /**
     * Array of keyword elements
     * @var Keyword[]
     */
    protected $keywords;

    /**
     * Name of the hotel
     * @var string
     */
    protected $name;

    /**
     * Hotelbeds internal hotel code
     * @var integer
     */
    protected $code;

    /**
     * Hotel address
     * @var string
     */
    protected $address;

    /**
     * Hotel category code
     * @var string
     */
    protected $categoryCode;

    /**
     * Category name
     * @var string
     */
    protected $categoryName;

    /**
     * Destination code for hotel location
     * @var string
     */
    protected $destinationCode;

    /**
     * Destination name for hotel location
     * @var string
     */
    protected $destinationName;

    /**
     * Zone name for hotel location
     * @var string
     */
    protected $zoneName;

    /**
     * Zone code for hotel location
     * @var integer
     */
    protected $zoneCode;

    /**
     * Latitude data for geolocation
     * @var float
     */
    protected $latitude;

    /**
     * Longitude data for geolocation
     * @var float
     */
    protected $longitude;

    /**
     * Client currency 
     * @var string
     */
    protected $currency;

    /**
     * Maximum hotel room price
     * @var float
     */
    protected $maxRate;

    /**
     * Minimum hotel room price 
     * @var float
     */
    protected $minRate;

    /**
     * Giata hotel code
     * @var integer
     */
    protected $giata;

    /**
     * List of credit cards accepted by the hotel in case of Liberate (pay at hotel) model
     * @var CreditCard[]
     */
    protected $creditCards;

    /**
     * List of rooms available for a particular hotel
     * @var Room[]
     */
    protected $rooms;

    public function getKeywords(): array {
        return $this->keywords;
    }

    public function getName() {
        return $this->name;
    }

    public function getCode() {
        return $this->code;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCategoryCode() {
        return $this->categoryCode;
    }

    public function getCategoryName() {
        return $this->categoryName;
    }

    public function getDestinationCode() {
        return $this->destinationCode;
    }

    public function getDestinationName() {
        return $this->destinationName;
    }

    public function getZoneName() {
        return $this->zoneName;
    }

    public function getZoneCode() {
        return $this->zoneCode;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function getCurrency() {
        return $this->currency;
    }

    public function getMaxRate() {
        return $this->maxRate;
    }

    public function getMinRate() {
        return $this->minRate;
    }

    public function getGiata() {
        return $this->giata;
    }

    public function getCreditCards(): array {
        return $this->creditCards;
    }

    public function getRooms(): array {
        return $this->rooms;
    }

    public function setKeywords(array $keywords) {
        $this->keywords = $keywords;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    public function setCategoryCode($categoryCode) {
        $this->categoryCode = $categoryCode;
        return $this;
    }

    public function setCategoryName($categoryName) {
        $this->categoryName = $categoryName;
        return $this;
    }

    public function setDestinationCode($destinationCode) {
        $this->destinationCode = $destinationCode;
        return $this;
    }

    public function setDestinationName($destinationName) {
        $this->destinationName = $destinationName;
        return $this;
    }

    public function setZoneName($zoneName) {
        $this->zoneName = $zoneName;
        return $this;
    }

    public function setZoneCode($zoneCode) {
        $this->zoneCode = $zoneCode;
        return $this;
    }

    public function setLatitude($latitude) {
        $this->latitude = $latitude;
        return $this;
    }

    public function setLongitude($longitude) {
        $this->longitude = $longitude;
        return $this;
    }

    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    public function setMaxRate($maxRate) {
        $this->maxRate = $maxRate;
        return $this;
    }

    public function setMinRate($minRate) {
        $this->minRate = $minRate;
        return $this;
    }

    public function setGiata($giata) {
        $this->giata = $giata;
        return $this;
    }

    public function setCreditCards(array $creditCards) {
        $this->creditCards = $creditCards;
        return $this;
    }

    public function setRooms(array $rooms) {
        $this->rooms = $rooms;
        return $this;
    }

}

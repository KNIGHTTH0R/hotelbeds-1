<?php

namespace LadonLabs\Hotelbeds;

/**
 * Description of Geolocation
 *
 * @author antonio
 */
class Geolocation {

    /**
     * Required
     * @var Float
     */
    protected $longitude;

    /**
     * Required
     * @var Float
     */
    protected $latitude;

    /**
     * Required
     * @var Integer 
     */
    protected $radius;

    /**
     * Required
     * @var String
     * @allowed (mi)=>Miles,(km)=>Kilometers
     */
    protected $unit;

    /**
     * Optional
     * @var Float Optional
     * @description GPS longitude of the bottom right point of the area rectangle
     */
    protected $secondaryLongitude;

    /**
     * Optional
     * @var Float Optional
     * @description GPS latitude of the bottom right point of the area rectangle 
     */
    protected $secondaryLatitude;

    /* Getter & Setters */

    public function getLongitude() {
        return $this->longitude;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getUnit() {
        return $this->unit;
    }

    public function getSecondaryLongitude() {
        return $this->secondaryLongitude;
    }

    public function getSecondaryLatitude() {
        return $this->secondaryLatitude;
    }

    public function setLongitude(Float $longitude) {
        $this->longitude = $longitude;
        return $this;
    }

    public function setLatitude(Float $latitude) {
        $this->latitude = $latitude;
        return $this;
    }

    public function setRadius(Integer $radius) {
        $this->radius = $radius;
        return $this;
    }

    public function setUnit(String $unit) {
        $this->unit = $unit;
        return $this;
    }

    public function setSecondaryLongitude(Float $secondaryLongitude) {
        $this->secondaryLongitude = $secondaryLongitude;
        return $this;
    }

    public function setSecondaryLatitude(Float $secondaryLatitude) {
        $this->secondaryLatitude = $secondaryLatitude;
        return $this;
    }

    public function __toJson() {
        return json_encode($this);
    }

}

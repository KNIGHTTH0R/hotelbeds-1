<?php

namespace LadonLabs\Hotelbeds;
use LadonLabs\Hotelbeds\BaseJsonEncodable;
/**
 * Description of Destination
 *
 * @author antonio
 */
class Destination extends BaseJsonEncodable {

    /**
     * Optional
     * @var string 
     * @description Destination code for hotel location (mandatory if the destination element is used)
     */
    protected $code;

    /**
     * Optional
     * @var Integer
     * @description Destination zone for hotel location
     */
    protected $zone;

    /* Getters & Setters */

    public function getCode() {
        return $this->code;
    }

    public function getZone() {
        return $this->zone;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setZone($zone) {
        $this->zone = $zone;
        return $this;
    }

    public function __toJson() {
        return json_encode($this);
    }

}

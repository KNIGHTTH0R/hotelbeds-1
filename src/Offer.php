<?php

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of Offer
 *
 * @author antonio
 */
class Offer extends BaseJsonEncodable {

    /**
     * Offer code
     * @var integer
     */
    protected $code;

    /**
     * Offer amount
     * @var float 
     */
    protected $amount;

    /**
     * Offer name
     * @var string
     */
    protected $name;

    public function getCode() {
        return $this->code;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getName() {
        return $this->name;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

}

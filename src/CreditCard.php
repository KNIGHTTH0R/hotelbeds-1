<?php

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of CreditCard
 *
 * @author antonio
 */
class CreditCard extends BaseJsonEncodable {

    /**
     * Credit card code
     * @var integer
     */
    protected $code;

    /**
     * Credit card name
     * @var string
     */
    protected $name;

    /**
     * Type of payment AT_HOTEL OR AT_WEB
     * @var string 
     */
    protected $paymentType;

    public function getCode() {
        return $this->code;
    }

    public function getName() {
        return $this->name;
    }

    public function getPaymentType() {
        return $this->paymentType;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setPaymentType($paymentType) {
        $this->paymentType = $paymentType;
        return $this;
    }

}

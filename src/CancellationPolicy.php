<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of CancellationPolicy
 *
 * @author antonio
 */
class CancellationPolicy extends BaseJsonEncodable {

    /**
     * Amount that will be charged after a certain date
     * @var float
     */
    protected $amount;

    /**
     * Beginning date when the amount will be charged
     * @var DateTime
     */
    protected $from;

    /**
     * Amount that will be charged after a certain date in hotel currency (for the pay at hotel mode)
     * @var float
     */
    protected $hotelAmount;

    public function getAmount() {
        return $this->amount;
    }

    public function getFrom(): DateTime {
        return $this->from;
    }

    public function getHotelAmount() {
        return $this->hotelAmount;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    public function setFrom(DateTime $from) {
        $this->from = $from;
        return $this;
    }

    public function setHotelAmount($hotelAmount) {
        $this->hotelAmount = $hotelAmount;
        return $this;
    }

}

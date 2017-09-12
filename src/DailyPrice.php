<?php

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of DailyPrice
 *
 * @author antonio
 */
class DailyPrice extends BaseJsonEncodable {

    /**
     * Day number of the searched period
     * @var integer
     */
    protected $offset;

    /**
     * Daily selling price for the room
     * @var float
     */
    protected $dailySellingRate;

    /**
     * Daily net price
     * @var float
     */
    protected $dailyNet;

    public function getOffset() {
        return $this->offset;
    }

    public function getDailySellingRate() {
        return $this->dailySellingRate;
    }

    public function getDailyNet() {
        return $this->dailyNet;
    }

    public function setOffset($offset) {
        $this->offset = $offset;
        return $this;
    }

    public function setDailySellingRate($dailySellingRate) {
        $this->dailySellingRate = $dailySellingRate;
        return $this;
    }

    public function setDailyNet($dailyNet) {
        $this->dailyNet = $dailyNet;
        return $this;
    }

}

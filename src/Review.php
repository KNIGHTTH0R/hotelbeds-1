<?php

namespace LadonLabs\Hotelbeds;

/**
 * Description of Review
 *
 * @author antonio
 */
class Review {

    /**
     *
     * @var String
     * Values: TRIPADVISOR or HOTELBEDS
     */
    protected $type;

    /**
     * Minimum review rating you want the results to have.
     * @var Integer
     */
    protected $minRate;

    /**
     * Maximum review rating you want the results to have.
     * @var Integer
     */
    protected $maxRate;

    /**
     * Minimum number of counts you want the reviews in the response to have.
     * @var Integer
     */
    protected $minReviewCount;

    public function getType() {
        return $this->type;
    }

    public function getMinRate() {
        return $this->minRate;
    }

    public function getMaxRate() {
        return $this->maxRate;
    }

    public function getMinReviewCount() {
        return $this->minReviewCount;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setMinRate(Integer $minRate) {
        $this->minRate = $minRate;
        return $this;
    }

    public function setMaxRate(Integer $maxRate) {
        $this->maxRate = $maxRate;
        return $this;
    }

    public function setMinReviewCount(Integer $minReviewCount) {
        $this->minReviewCount = $minReviewCount;
        return $this;
    }

    public function __toJson() {
        return json_encode($this);
    }

}

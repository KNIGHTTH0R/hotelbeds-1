<?php

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of Keyword
 *
 * @author antonio
 */
class Keyword extends BaseJsonEncodable {

    /**
     * Keyword code
     * @var integer
     */
    protected $code;

    /**
     * Keyword rating
     * @var integer
     */
    protected $rating;

    public function getCode() {
        return $this->code;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setRating($rating) {
        $this->rating = $rating;
        return $this;
    }

}

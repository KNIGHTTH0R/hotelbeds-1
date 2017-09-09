<?php

namespace LadonLabs\Hotelbeds;

/**
 * Description of Keyword
 *
 * @author antonio
 */
class Keyword {

    protected $code;

    public function getCode() {
        return $this->code;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function __toString() {
        return $this->code;
    }

}

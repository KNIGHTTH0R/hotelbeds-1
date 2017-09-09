<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;

/**
 * Description of Keywords
 *
 * @author antonio
 */
class Keywords {

    /**
     * Required
     * @var Boolean
     */
    protected $allIncluded;

    /**
     * Required
     * @var Keyword[]
     */
    protected $keyword;

    public function getAllIncluded() {
        return $this->allIncluded;
    }

    public function getKeyword() {
        return $this->keyword;
    }

    public function setAllIncluded(Boolean $allIncluded) {
        $this->allIncluded = $allIncluded;
        return $this;
    }

    public function setKeyword(array $keyword) {
        $this->keyword = $keyword;
        return $this;
    }

    public function __toJson() {
        return json_encode($this);
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;

/**
 * Description of Boards
 *
 * @author antonio
 */
class Boards {

    /**
     * Required
     * Indicates if the board list values should be excluded or included in the response
     * @var Boolean
     * FALSE: the boards will be excluded from the response
     * TRUE: the response will return only the boards listed
     * 
     */
    protected $included;

    /**
     * Required
     * @var String[]   
     */
    protected $board;

    public function getIncluded() {
        return $this->included;
    }

    public function getBoard() {
        return $this->board;
    }

    public function setIncluded($included) {
        $this->included = $included;
        return $this;
    }

    public function setBoard(array $board) {
        $this->board = $board;
        return $this;
    }

    public function __toJson() {
        return json_encode($this);
    }

}

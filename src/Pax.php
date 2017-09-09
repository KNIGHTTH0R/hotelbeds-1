<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;
use LadonLabs\Hotelbeds\BaseJsonEncodable;
/**
 * Description of Pax
 *
 * @author antonio
 */
class Pax extends BaseJsonEncodable {
    /*
     * Optional
     * Pax type (string)
     * AD=Adult
     * CH=Child
     */

    protected $type;

    /**
     * Required for children
     * @var Integer Required if type is Children(CH)
     */
    protected $age;

    /**
     * Optional
     * @var String 
     */
    protected $name;

    /**
     * Optional
     * @var String 
     */
    protected $surname;

    public function getType() {
        return $this->type;
    }

    public function getAge() {
        return $this->age;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
        return $this;
    }

    public function __toJson() {
        return json_encode($this);
    }

}

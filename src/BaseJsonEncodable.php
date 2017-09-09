<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;

/**
 * Description of Base
 *
 * @author antonio
 */
class BaseJsonEncodable implements \JsonSerializable {

    public function jsonSerialize() {
        $attributes = get_object_vars($this);
        foreach ($attributes as $key => $value) {
            if (!$value) {
                unset($attributes[$key]);
            }
        }
        return $attributes;
    }

    public function __toJson() {
        return json_encode($this);
    }

}

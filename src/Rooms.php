<?php

namespace LadonLabs\Hotelbeds;

/**
 * Description of Rooms
 *
 * @author antonio
 */
class Rooms {

    /**
     * True : Includes the specified room codes in the response
     * False : Exclude the specified room codes in the response
     * @var Boolean 
     */
    protected $included;

    /**
     * Room Codes array
     * @var String[] 
     */
    protected $room;

    public function getIncluded() {
        return $this->included;
    }

    public function getRoom() {
        return $this->room;
    }

    public function setIncluded(Boolean $included) {
        $this->included = $included;
        return $this;
    }

    public function setRoom(array $room) {
        $this->room = $room;
        return $this;
    }
    
    public function __toJson(){
        return json_encode($this);
    }

}

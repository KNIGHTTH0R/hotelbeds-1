<?php

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of Room
 *
 * @author antonio
 */
class Room extends BaseJsonEncodable {

    /**
     * Internal room code (do not confuse with roomId)
     * @var string
     */
    protected $code;

    /**
     * Name of the room
     * @var string 
     */
    protected $name;
    /**
     * List of rates
     * @var Rate[]
     */
    protected $rates;

}

<?php



namespace LadonLabs\Hotelbeds;
use LadonLabs\Hotelbeds\Rate; 
/**
 * Description of Shift
 *
 * @author antonio
 */
class ShiftRate extends Rate {
    /**
     * Format: YYYY-MM-DD
     * @var string
     */
    protected $checkIn;
    /**
     * Format: YYYY-MM-DD
     * @var string
     */
    protected $checkOut;
    
}

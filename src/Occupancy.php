<?php

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\Pax;
use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of occupancy
 *
 * @author antonio
 */
class Occupancy extends BaseJsonEncodable {

    /**
     * Required
     * Number of rooms
     * @var Integer
     */
    protected $rooms;

    /**
     * Required
     * Number of adults
     * @var INteger 
     */
    protected $adults;

    /**
     * Required
     * Number of children
     * @var Integer 
     */
    protected $children;

    /**
     * Optional
     * @var Pax[]
     */
    protected $paxes;

    public function __construct($rooms, $adults, array $children) {
        $this->rooms = $rooms;
        $this->adults = $adults;
        $this->children = count($children);
        $this->paxes = [];
        $this->generateChildrenPaxes($children);
        $this->generateAdultsPaxes();
    }

    /**
     * Function to generate the Children in pax array
     * @param array $children
     */
    private function generateChildrenPaxes(array $children) {
        foreach ($this->paxes as $key => $pax) {
            if ($pax->getType() == 'CH') {
                unset($this->paxes[$key]);
            }
        }
        $this->paxes = array_values($this->paxes);
        for ($ch = 0; $ch < count($children); $ch++) {
            $child = new Pax();
            $child->setAge($children[$ch]);
            $child->setType("CH");
            $this->paxes[] = $child;
        }
    }

    /**
     * Function that generate the correct structure for paxes array with Adults items
     */
    private function generateAdultsPaxes() {
        foreach ($this->paxes as $key=> $pax) {
            if ($pax->getType() == 'AD') {
               unset($this->paxes[$key]);
            }
        }
        $this->paxes = array_values($this->paxes);
        for ($a = 0; $a < $this->adults; $a++) {
            $adult = new Pax();
            $adult->setType("AD");
            $this->paxes[] = $adult;
        }
    }

    public function getRooms() {
        return $this->rooms;
    }

    public function getAdults() {
        return $this->adults;
    }

    public function getChildren() {
        return $this->children;
    }

    public function getPaxes() {
        return $this->paxes;
    }

    public function setRooms($rooms) {
        $this->rooms = $rooms;
        return $this;
    }

    public function setAdults($adults) {
        $this->adults = $adults;
        $this->generateAdultsPaxes();
        return $this;
    }

    public function setChildren(array $children) {
        $this->children = count($children);
        $this->generateChildrenPaxes($children);
        return $this;
    }

    public function setPaxes($paxes) {
        $this->paxes = $paxes;
        return $this;
    }


}

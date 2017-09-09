<?php

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;


class AvailabilityRQ extends BaseJsonEncodable {

    /**
     * Optional
     * @var Boolean 
     */
    protected $dailyRate = true;

    /**
     * Optional
     * @var String Optional 
     */
    protected $sourceMarket;

    /**
     * Optional
     * @var String Optional 
     */
    protected $language;

    /**
     * Required
     * @var Stay 
     */
    protected $stay;

    /**
     * Required
     * @var Occupancy[] 
     */
    protected $occupancies;

    /**
     * Optional
     * @var Destination
     */
    protected $destination;

    /**
     * Optional
     * @var Geolocation
     */
    protected $geolocation;

    /**
     * Optional
     * @var Keywords 
     */
    protected $keywords;

    /**
     * Optional
     * @var Hotels 
     */
    protected $hotels;

    /**
     * Optional
     * @var Boards
     */
    protected $boards;

    /**
     * Optional
     * @var Accommodation[]    
     */
    protected $accommodations;

    /**
     * Optional
     * @var Filter
     */
    protected $filter;

    /**
     *
     * @var Review[]
     */
    protected $reviews;

    public function getDailyRate() {
        return $this->dailyRate;
    }

    public function getSourceMarket() {
        return $this->sourceMarket;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getStay() {
        return $this->stay;
    }

    public function getOccupancies() {
        return $this->occupancies;
    }

    public function getDestination() {
        return $this->destination;
    }

    public function getGeolocation() {
        return $this->geolocation;
    }

    public function getKeywords() {
        return $this->keywords;
    }

    public function getHotels() {
        return $this->hotels;
    }

    public function getBoards() {
        return $this->boards;
    }

    public function getAccommodations() {
        return $this->accommodations;
    }

    public function getFilter() {
        return $this->filter;
    }

    public function getReviews() {
        return $this->reviews;
    }

    public function setDailyRate(Boolean $dailyRate) {
        $this->dailyRate = $dailyRate;
        return $this;
    }

    public function setSourceMarket(String $sourceMarket) {
        $this->sourceMarket = $sourceMarket;
        return $this;
    }

    public function setLanguage(String $language) {
        $this->language = $language;
        return $this;
    }

    public function setStay(Stay $stay) {
        $this->stay = $stay;
        return $this;
    }

    public function setOccupancies(array $occupancies) {
        $this->occupancies = $occupancies;
        return $this;
    }

    public function setDestination(Destination $destination) {
        $this->destination = $destination;
        return $this;
    }

    public function setGeolocation(Geolocation $geolocation) {
        $this->geolocation = $geolocation;
        return $this;
    }

    public function setKeywords(Keywords $keywords) {
        $this->keywords = $keywords;
        return $this;
    }

    public function setHotels(Hotels $hotels) {
        $this->hotels = $hotels;
        return $this;
    }

    public function setBoards(Boards $boards) {
        $this->boards = $boards;
        return $this;
    }

    public function setAccommodations(array $accommodations) {
        $this->accommodations = $accommodations;
        return $this;
    }

    public function setFilter(Filter $filter) {
        $this->filter = $filter;
        return $this;
    }

    public function setReviews(array $reviews) {
        $this->reviews = $reviews;
        return $this;
    }

    


}

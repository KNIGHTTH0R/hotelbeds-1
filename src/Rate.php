<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of Rate
 *
 * @author antonio
 */
class Rate extends BaseJsonEncodable {

    /**
     * Comments associated to this rate (more information here)
     * @var integer
     */
    protected $rateCommentsId;

    /**
     * Key identifier of the rate
     * @var string
     */
    protected $rateKey;

    /**
     *
     * @var string
     * NOR = Normal
     * NRF = Non-refundable
     * SPE = Special
     * OFE = Offer
     * PAQ = Package
     * NRP = Non-refundable pack
     */
    protected $rateClass;

    /**
     * BOOKABLE or three steps (RECHECK)
     * @var string
     */
    protected $rateType;

    /**
     * Identifies if it is pay at hotel or merchant model
     * @var type 
     */
    protected $paymentType;

    /**
     * Identifies if the rate is for packaging
     * @var string
     */
    protected $packaging;

    /**
     * Internal board code
     * @var string
     */
    protected $boardCode;

    /**
     * Board Name
     * @var string
     */
    protected $boardName;

    /**
     * Room net price
     * @var float
     */
    protected $net;

    /**
     * Agency commission
     * @var float
     */
    protected $discount;

    /**
     * Agency commission percentage
     * @var float
     */
    protected $discountPCT;

    /**
     * Room gross price in case it is included
     * @var float
     */
    protected $sellingRate;

    /**
     * Commission for commissionable model
     * @var float
     */
    protected $commission;

    /**
     * VAT Commission
     * @var float
     */
    protected $commissionVAT;

    /**
     * Percentage of the commission
     * @var float
     */
    protected $commissionPCT;

    /**
     * Room gross price in hotelCurrency (for the pay at hotel model)
     * @var float
     */
    protected $hotelSellingRate;

    /**
     * Hotel currency (for the pay at hotel model)
     * @var string
     */
    protected $hotelCurrency;

    /**
     * Identifies if the rate price is recommended
     * @var boolean
     */
    protected $hotelMandatory;

    /**
     * Number of rooms available for a particular room type
     * @var integer
     */
    protected $allotment;

    /**
     * Number of rooms requested with the same occupancy
     * @var integer
     */
    protected $rooms;

    /**
     * Number of adults for the room
     * @var integer
     */
    protected $adults;

    /**
     * Number of children requested
     * @var integer
     */
    protected $children;

    /**
     * Children ages separated by commas
     * @var string
     */
    protected $childrenAges;

    /**
     * List of rates for the flexible dates with availability
     * @var ShiftRate[]
     */
    protected $shifts;

    /**
     * List of cancellation policies
     * @var type CancellationPolicy[]
     */
    protected $cancellationPolicies;

    /**
     * Daily prices for the searched period
     * @var DailyPrice[]
     */
    protected $dailyPrices;

    /**
     * List of offers 
     * @var Offer[]
     */
    protected $offers;

    /**
     * List of promotions for a particular rate
     * @var Promotion[]
     */
    protected $promotions;

    /**
     * List of prices with taxes included or excluded
     * @var Tax[]
     */
    protected $taxes;

    public function getRateCommentsId() {
        return $this->rateCommentsId;
    }

    public function getRateKey() {
        return $this->rateKey;
    }

    public function getRateClass() {
        return $this->rateClass;
    }

    public function getRateType() {
        return $this->rateType;
    }

    public function getPaymentType(): type {
        return $this->paymentType;
    }

    public function getPackaging() {
        return $this->packaging;
    }

    public function getBoardCode() {
        return $this->boardCode;
    }

    public function getBoardName() {
        return $this->boardName;
    }

    public function getNet() {
        return $this->net;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getDiscountPCT() {
        return $this->discountPCT;
    }

    public function getSellingRate() {
        return $this->sellingRate;
    }

    public function getCommission() {
        return $this->commission;
    }

    public function getCommissionVAT() {
        return $this->commissionVAT;
    }

    public function getCommissionPCT() {
        return $this->commissionPCT;
    }

    public function getHotelSellingRate() {
        return $this->hotelSellingRate;
    }

    public function getHotelCurrency() {
        return $this->hotelCurrency;
    }

    public function getHotelMandatory() {
        return $this->hotelMandatory;
    }

    public function getAllotment() {
        return $this->allotment;
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

    public function getChildrenAges() {
        return $this->childrenAges;
    }

    public function getShifts(): array {
        return $this->shifts;
    }

    public function getCancellationPolicies(): type {
        return $this->cancellationPolicies;
    }

    public function getDailyPrices(): array {
        return $this->dailyPrices;
    }

    public function getOffers(): array {
        return $this->offers;
    }

    public function getPromotions(): array {
        return $this->promotions;
    }

    public function getTaxes(): array {
        return $this->taxes;
    }

    public function setRateCommentsId($rateCommentsId) {
        $this->rateCommentsId = $rateCommentsId;
        return $this;
    }

    public function setRateKey($rateKey) {
        $this->rateKey = $rateKey;
        return $this;
    }

    public function setRateClass($rateClass) {
        $this->rateClass = $rateClass;
        return $this;
    }

    public function setRateType($rateType) {
        $this->rateType = $rateType;
        return $this;
    }

    public function setPaymentType(type $paymentType) {
        $this->paymentType = $paymentType;
        return $this;
    }

    public function setPackaging($packaging) {
        $this->packaging = $packaging;
        return $this;
    }

    public function setBoardCode($boardCode) {
        $this->boardCode = $boardCode;
        return $this;
    }

    public function setBoardName($boardName) {
        $this->boardName = $boardName;
        return $this;
    }

    public function setNet($net) {
        $this->net = $net;
        return $this;
    }

    public function setDiscount($discount) {
        $this->discount = $discount;
        return $this;
    }

    public function setDiscountPCT($discountPCT) {
        $this->discountPCT = $discountPCT;
        return $this;
    }

    public function setSellingRate($sellingRate) {
        $this->sellingRate = $sellingRate;
        return $this;
    }

    public function setCommission($commission) {
        $this->commission = $commission;
        return $this;
    }

    public function setCommissionVAT($commissionVAT) {
        $this->commissionVAT = $commissionVAT;
        return $this;
    }

    public function setCommissionPCT($commissionPCT) {
        $this->commissionPCT = $commissionPCT;
        return $this;
    }

    public function setHotelSellingRate($hotelSellingRate) {
        $this->hotelSellingRate = $hotelSellingRate;
        return $this;
    }

    public function setHotelCurrency($hotelCurrency) {
        $this->hotelCurrency = $hotelCurrency;
        return $this;
    }

    public function setHotelMandatory($hotelMandatory) {
        $this->hotelMandatory = $hotelMandatory;
        return $this;
    }

    public function setAllotment($allotment) {
        $this->allotment = $allotment;
        return $this;
    }

    public function setRooms($rooms) {
        $this->rooms = $rooms;
        return $this;
    }

    public function setAdults($adults) {
        $this->adults = $adults;
        return $this;
    }

    public function setChildren($children) {
        $this->children = $children;
        return $this;
    }

    public function setChildrenAges($childrenAges) {
        $this->childrenAges = $childrenAges;
        return $this;
    }

    public function setShifts(array $shifts) {
        $this->shifts = $shifts;
        return $this;
    }

    public function setCancellationPolicies(type $cancellationPolicies) {
        $this->cancellationPolicies = $cancellationPolicies;
        return $this;
    }

    public function setDailyPrices(array $dailyPrices) {
        $this->dailyPrices = $dailyPrices;
        return $this;
    }

    public function setOffers(array $offers) {
        $this->offers = $offers;
        return $this;
    }

    public function setPromotions(array $promotions) {
        $this->promotions = $promotions;
        return $this;
    }

    public function setTaxes(array $taxes) {
        $this->taxes = $taxes;
        return $this;
    }

}

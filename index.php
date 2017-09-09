<?php

require_once "vendor/autoload.php";
use LadonLabs\Hotelbeds\AvailabilityRQ;
use LadonLabs\Hotelbeds\Stay;
use LadonLabs\Hotelbeds\Occupancy;
use  LadonLabs\Hotelbeds\Destination;

$stay = new Stay();
$stay->setCheckIn("2017-10-21")->setCheckOut("2017-10-25");

$occupancy = new Occupancy(1, 2, [10,7]);
$occupancy->setAdults(1);

$destination = new Destination();
$destination->setCode("MIA");

$availability = new AvailabilityRQ();
$availability->setStay($stay);
$availability->setOccupancies([$occupancy]);
$availability->setDestination($destination);

$apiContext = new \LadonLabs\Hotelbeds\ApiContext();
$apiContext->setApi_key("kz3e632xd8s7w623ufw4mcga");
$apiContext->setEndpoint("http://testapi.hotelbeds.com/hotel-api/1.0/hotels")->setMethod("POST");

$requester = new LadonLabs\Hotelbeds\Requester();

print_r($requester->request($apiContext, $availability));
//print_r($availability->__toJson());



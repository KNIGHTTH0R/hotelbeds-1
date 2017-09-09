<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LadonLabs\Hotelbeds;

/**
 * Description of PaymentTypeEnum
 *
 * @author antonio
 */
abstract class PaymentTypeEnum {

    /**
     * Merchant model
     */
    const AT_WEB = 0;

    /**
     * Pay at hotel model
     */
    const AT_HOTEL = 1;

    /**
     * Both (Default value)
     */
    const BOTH = 2;

}

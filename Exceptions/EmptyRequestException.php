<?php

namespace LadonLabs\Hotelbeds\Exceptions;

class EmptyRequestException extends \Exception {

    protected $context;
    protected $message = "Error: Empty Request.";
    protected $code = "1000";

    public function __construct($context = null) {
        $this->context = $context;
    }

}

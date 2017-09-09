<?php

namespace LadonLabs\Hotelbeds\Exceptions;

/**
 * Description of EmptyApiContextException
 *
 * @author antonio
 */
class EmptyApiContextException extends \Exception {

    protected $context;

    public function getContext() {
        return $this->context;
    }

    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    protected $message = "Error: Empty Api context.";
    protected $code = "1001";

    public function __construct($context = null) {
        $this->context = $context;
    }

}

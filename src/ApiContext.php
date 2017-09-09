<?php

namespace LadonLabs\Hotelbeds;

class ApiContext {

    protected $endpoint;
    protected $api_key;
    protected $log_path;
    protected $method;

    public function __construct($endpoint = "", $api_key = "", $log_path = null, $method = "POST") {

        $this->method = $method;
        $this->api_key = $api_key;
        $this->endpoint = $endpoint;
        $this->log_path = $log_path;
    }

    public function getEndpoint() {
        return $this->endpoint;
    }

    public function getApi_key() {
        return $this->api_key;
    }

    public function getLog_path() {
        return $this->log_path;
    }

    public function getMethod() {
        return $this->method;
    }

    public function setEndpoint($endpoint) {
        $this->endpoint = $endpoint;
        return $this;
    }

    public function setApi_key($api_key) {
        $this->api_key = $api_key;
        return $this;
    }

    public function setLog_path($log_path) {
        $this->log_path = $log_path;
        return $this;
    }

    public function setMethod($method) {
        $this->method = $method;
        return $this;
    }

}

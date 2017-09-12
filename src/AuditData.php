<?php

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of AuditData
 *
 * @author antonio
 */
class AuditData extends BaseJsonEncodable {

    /**
     * Server process time in milliseconds
     * @var float
     */
    protected $processTime;

    /**
     * Date/time when the request has been processed (always in Spanish time)
     * @var date
     */
    protected $timestamp;

    /**
     * IP address of the system host
     * @var string 
     */
    protected $requestHost;

    /**
     * Server code or ID (for internal use)
     * @var string
     */
    protected $serverId;

    /**
     * Environment where the request has been sent and processed
     * @var string
     */
    protected $environment;

    /**
     * Release version identifier
     * @var string
     */
    protected $release;

    /**
     * Token identifier of the operation
     * @var string
     */
    protected $token;

    /**
     * Internal identifier of the parameters of the operation
     * @var string
     */
    protected $internal;

    public function getProcessTime() {
        return $this->processTime;
    }

    public function getTimestamp(): date {
        return $this->timestamp;
    }

    public function getRequestHost() {
        return $this->requestHost;
    }

    public function getServerId() {
        return $this->serverId;
    }

    public function getEnvironment() {
        return $this->environment;
    }

    public function getRelease() {
        return $this->release;
    }

    public function getToken() {
        return $this->token;
    }

    public function getInternal() {
        return $this->internal;
    }

    public function setProcessTime($processTime) {
        $this->processTime = $processTime;
        return $this;
    }

    public function setTimestamp(date $timestamp) {
        $this->timestamp = $timestamp;
        return $this;
    }

    public function setRequestHost($requestHost) {
        $this->requestHost = $requestHost;
        return $this;
    }

    public function setServerId($serverId) {
        $this->serverId = $serverId;
        return $this;
    }

    public function setEnvironment($environment) {
        $this->environment = $environment;
        return $this;
    }

    public function setRelease($release) {
        $this->release = $release;
        return $this;
    }

    public function setToken($token) {
        $this->token = $token;
        return $this;
    }

    public function setInternal($internal) {
        $this->internal = $internal;
        return $this;
    }

}

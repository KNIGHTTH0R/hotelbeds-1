<?php

namespace LadonLabs\Hotelbeds;

use GuzzleHttp\Client;
use LadonLabs\Hotelbeds\ApiContext;
use Exceptions\EmptyApiContextException;
use Exceptions\EmptyRequestException;

/**
 * Description of Requester
 *
 * @author antonio
 */
class Requester {

    /**
     * Object to request through Guzzle
     * @var GuzzleHttp\Client 
     */
    private $client;

    public function getClient() {
        return $this->client;
    }

    public function setClient(GuzzleHttp\Client $client) {
        $this->client = $client;
        return $this;
    }

    public function __construct() {
        $this->client = new Client();
    }

    public function request(ApiContext $context, BaseJsonEncodable $request) {
        try {
            if (!$context) {
                throw new EmptyApiContextException($context);
            }
            if (!$request) {
                throw new Exceptions\EmptyRequestException($request);
            }
            $jsonData = $request->__toJson();
            $res = $this->client->request($context->getMethod(), $context->getEndpoint(), [
                'body' => $jsonData,
                'headers' => [
                    'api-key' => $context->getApi_key()."sds",
                    'content-type' => 'application/json'
                ]
            ]);
            return ['success' => true, 'data' => $res->getBody()->getContents()];
        } catch (\Exception $e) {
            return ['success' => false, 'message' => $e->getMessage(), 'code' => $e->getCode()];
        }
    }

}

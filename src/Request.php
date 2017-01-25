<?php

namespace hiqdev\hiart\httpclient;

/**
 * Class Request is a proxy for [[\yii\httpclient\Request]] class
 */
class Request extends \hiqdev\hiart\proxy\Request
{
    public $workerClass = \yii\httpclient\Request::class;

    public $handlerClass = \yii\httpclient\Client::class;

    public $responseClass = Response::class;

    public function createWorker()
    {
        return new $this->workerClass([
            'method' => $this->method,
            'url' => $this->getFullUri(),
            'headers' => $this->headers,
            'content' => $this->body,
            'client' => $this->getHandler(),
            'options' => [
                'protocolVersion' => $this->version,
            ],
        ]);
    }
}

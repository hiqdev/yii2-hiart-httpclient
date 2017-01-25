<?php

namespace hiqdev\hiart\httpclient;

/**
 * Class Response is a proxy for [[\yii\httpclient\Response]]
 */
class Response extends \hiqdev\hiart\proxy\Response
{
    /**
     * @var \yii\httpclient\Response
     */
    protected $worker;

    /**
     * {@inheritdoc}
     */
    public function getRawData()
    {
        return $this->worker->getContent();
    }

    public function getStatusCode()
    {
        return $this->worker->getStatusCode();
    }

    public function getReasonPhrase()
    {
        return $this->worker->getStatusCode();
    }

    public function getHeader($name)
    {
        return [$this->worker->getHeaders()->get($name)];
    }
}

<?php

namespace Aubruz\Mainframe\Responses;

use Aubruz\Mainframe\ArrayType;

/**
 * Class AuthenticationData
 * @package Aubruz\Mainframe\Response
 */
class AuthenticationData extends ArrayType
{

    /**
     * AuthenticationData constructor.
     * @param $url
     * @param string $type
     */
    public function __construct($url, $type = 'authentication')
    {
        $this->json = [
            'type'  => $type,
            'url'   => $url
        ];
        return $this;
    }

    /**
     * @param array $payload
     * @return $this
     */
    public function addPayload($payload)
    {
        $this->json['payload'] = $payload;
        return$this;
    }
}
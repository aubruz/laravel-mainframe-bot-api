<?php

namespace Aubruz\Mainframe\Response;

use Aubruz\Mainframe\ArrayType;

/**
 * Class AuthentificationData
 * @package Aubruz\Mainframe\Response
 */
class AuthentificationData extends ArrayType
{

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
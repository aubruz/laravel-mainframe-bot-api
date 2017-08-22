<?php

namespace Aubruz\Mainframe;

use GuzzleHttp\Client;


/**
 * Class Mainframe
 * @package Aubruz\Mainframe
 */
class Mainframe
{

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var string
     */
    private $botSecret;

    /**
     * @var array
     */
    private $headers = array();

    /**
     * Mainframe constructor.
     * @param string $botSecret
     * @param string $baseUri
     */
    function __construct($botSecret, $baseUri = 'https://api-staging.mainframe.com/bots/v1/')
    {
        $this->botSecret = $botSecret;
        $this->baseUri = $baseUri;
        $this->client = new Client(['base_uri' => $baseUri]);

        $this->headers = [
            'Authorization'     => 'Mainframe-Bot ' . $botSecret,
            'Content-Type'      => ['application/json', 'charset=utf-8']
        ];
    }

    /**
     * @param string $conversationID
     * @param string $message
     */
    public function sendMessage($conversationID, $message = '')
    {
        $this->client->request('POST', 'send_message', [
            'headers'   => $this->headers,
            'json'      => [
                'conversation_id'   => $conversationID,
                'message'           => $message,
            ]
        ]);
    }
}
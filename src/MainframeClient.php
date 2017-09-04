<?php

namespace Aubruz\Mainframe;

use Aubruz\Mainframe\Response\UIPayload;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;


/**
 * Class Mainframe
 * @package Aubruz\Mainframe
 */
class MainframeClient
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
    private $headers;

    /**
     * Mainframe constructor.
     * @param string $botSecret
     * @param string $baseUri
     */
    function __construct($botSecret, $baseUri = 'https://api.mainframe.com/bots/v1/')
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
     * @param $conversationID
     * @param string|UIPayload $message
     * @param null $subscriptionID
     * @param null $type
     * @return \Exception|RequestException|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function sendMessage($conversationID, $message = '', $subscriptionID = null, $type = null)
    {
        $json = [
            'conversation_id'   => $conversationID,
        ];

        if($message instanceof UIPayload){
            $json["data"] = $message->toArray();
        }else{
            $json["message"] = $message;
        }

        if($subscriptionID){
            $json["subscription_id"] = $subscriptionID;
        }

        if($type){
            $json["type"] = $type;
        }

        return $this->makeCall('POST', 'send_message', $json);
    }

    /**
     * @param $subscriptionToken
     * @param $label
     * @return \Exception|RequestException|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function setupSubscription($subscriptionToken, $label)
    {
        $json = [
            'subscription_token'    => $subscriptionToken,
            'label'                 => $label,
        ];

        return $this->makeCall('POST', 'setup_subscription', $json);
    }

    /**
     * @param $subscriptionToken
     * @param $label
     * @return \Exception|RequestException|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function editSubscription($subscriptionToken, $label)
    {
        $json = [
            'subscription_token'    => $subscriptionToken,
            'label'                 => $label,
        ];

        return $this->makeCall('POST', 'edit_subscription', $json);
    }

    /**
     * @param $conversationID
     * @param $subscriptionID
     * @param null $message
     * @return \Exception|RequestException|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSubscription($conversationID, $subscriptionID, $message = null)
    {
        $json = [
            'conversation_id'   => $conversationID,
            'subscription_id'   => $subscriptionID,
        ];

        if($message){
            $json['message'] = $message;
        }

        return $this->makeCall('POST', 'delete_subscription', $json);
    }

    /**
     * @param $verb
     * @param $endpoint
     * @param $json
     * @return \Exception|RequestException|mixed|\Psr\Http\Message\ResponseInterface
     */
    private function makeCall($verb, $endpoint, $json)
    {
        try {
            return $this->client->request($verb, $endpoint, [
                'headers'   => $this->headers,
                'json'      => $json
            ]);
        }catch (RequestException $e) {
            return $e->getResponse();
        }
    }
}
<?php

namespace Aubruz\Mainframe\Response;

use \Aubruz\Mainframe\ArrayType;


/**
 * Class BotResponse
 */
class BotResponse extends ArrayType
{

    /**
     * BotResponse constructor.
     * @param bool $success
     */
    public function __construct($success = true)
    {
        $this->json = [
            'success'  => $success
        ];
        return $this;
    }

    /**
     * @param $message
     * @return $this
     */
    public function addMessage($message)
    {
        $this->json["message"] = $message;
        return $this;
    }

    /**
     * @param  ModalData|EmbedData|AuthentificationData $data
     * @return $this
     */
    public function addData($data)
    {
        $this->json["data"] = $data->toArray();
        return $this;
    }
}
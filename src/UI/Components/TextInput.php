<?php

namespace Aubruz\Mainframe\UI\Components;


/**
 * Class TextInput
 * @package Aubruz\Mainframe\UI\Components
 */
class TextInput extends FormChild
{

    /**
     * TextInput constructor.
     * @param $id
     * @param $label
     */
    public function __construct($id, $label)
    {
        $this->json = [
            "type"  => "TextInput",
            "props" => [
                "id"    => $id,
                "label"     =>  $label
            ]
        ];
    }

    /**
     * @param $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
       $this->json["props"]["prefix"] = $prefix;
        return $this;
    }

    /**
     * @param $error
     * @return $this
     */
    public function setErrorFeedback($error){
        $this->json["props"]["errorFeedback"] = $error;
        return $this;
    }

    /**
     * @param $title
     * @return $this
     */
    public function setButtonTitle($title){
        $this->json["props"]["buttonTitle"] = $title;
        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setButtonType($type){
        $this->json["props"]["buttonType"] = $type;
        return $this;
    }

    /**
     * @param $payload
     * @return $this
     */
    public function setButtonPayload($payload){
        $this->json["props"]["buttonPayload"] = $payload;
        return $this;
    }
}
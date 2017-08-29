<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;


/**
 * Class TextInput
 * @package Aubruz\Mainframe\UI\Components
 */
class TextInput extends ChildComponent
{

    /**
     * TextInput constructor.
     * @param $id
     * @param $label
     */
    public function __construct($id, $label)
    {
        parent::__construct();
        $this->setType("TextInput");
        $this->addProps([
            "id"    => $id,
            "label"     =>  $label
        ]);

        return $this;
    }

    /**
     * @param $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->addProps(["prefix" => $prefix]);
        return $this;
    }

    /**
     * @param $error
     * @return $this
     */
    public function setErrorFeedback($error){
        $this->addProps(["errorFeedback" => $error]);
        return $this;
    }

    /**
     * @param $title
     * @return $this
     */
    public function setButtonTitle($title){
        $this->addProps(["buttonTitle" => $title]);
        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setButtonType($type){
        $this->addProps(["buttonType" => $type]);
        return $this;
    }

    /**
     * @param $payload
     * @return $this
     */
    public function setButtonPayload($payload){
        $this->addProps(["buttonPayload" => $payload]);
        return $this;
    }
}
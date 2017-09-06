<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;


/**
 * Class TextInput
 * @package Aubruz\Mainframe\UI\Components
 *
 * A single line text input, can only be used a a child of a Form.
 *
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
     * @param boolean|string $error
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
        if($type !== 'post_payload'){
            throw new UIException("The only possible value for buttonType in a TextInput Component is \"post_payload\"!");
        }
        if($this->getProp("buttonTitle") === null){
            throw new UIException('You must provide a title in order to set a type!');
        }
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

    /**
     * @return array
     * @throws UIException
     */
    public function toArray()
    {
        if($this->getProp("buttonPayload") === null && $this->getProp("buttonPayload") !== null){
            throw new UIException('ButtonType is set to "post_payload" but no payload has been provided!');
        }
        return parent::toArray();
    }
}
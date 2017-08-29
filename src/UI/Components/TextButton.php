<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class TextButton
 * @package Aubruz\Mainframe\UI\Components
 */
class TextButton extends ChildComponent
{

    /**
     * TextButton constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->setType("TextButton");
        $this->canHaveChildren();

        return $this;
    }

    /**
     * @param $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->addProps(["title" => $title]);
        return $this;
    }

    /**
     * @param $type
     */
    public function setTextType($type)
    {
        $this->addProps(["type" => $type]);
    }

    /**
     * @param $payload
     */
    public function setPayload($payload)
    {
        $this->addProps(["payload" => $payload]);
    }

    /**
     * @param $url
     */
    public function setUrl($url)
    {
        $this->addProps(["url" => $url]);
    }

}
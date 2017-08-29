<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\RootComponent;

/**
 * Class Form
 * @package Aubruz\Mainframe\UI\Form
 */
class Form extends RootComponent
{

    /**
     * Form constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->setType("form");
        $this->canHaveChildren();
        $this->addProps([
            "data"  => []
        ]);

        return $this;
    }

    /**
     * @param $payload
     * @return $this
     */
    public function addPayload($payload)
    {
        $this->addProps(["payload" => $payload]);
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function addData($key, $value)
    {
        $this->addProps(["data" => [$key => $value]]);
        return $this;
    }

}
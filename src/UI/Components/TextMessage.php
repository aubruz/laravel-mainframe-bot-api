<?php

namespace Aubruz\Mainframe\UI\Components;


use Aubruz\Mainframe\UI\RootComponent;

/**
 * Class TextMessage
 * @package Aubruz\Mainframe\UI\Components
 */
class TextMessage extends RootComponent
{
    /**
     * TextMessage constructor.
     * @param string $payload
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("TextMessage");
        $this->canHaveChildren();
        return $this;
    }

}
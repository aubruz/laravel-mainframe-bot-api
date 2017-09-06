<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\RootComponent;

/**
 * Class Message
 * @package Aubruz\Mainframe\UI\Components
 */
class Message extends RootComponent
{
    /**
     * Message constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->setType("Message");
        $this->canHaveChildren();
        return $this;
    }

}
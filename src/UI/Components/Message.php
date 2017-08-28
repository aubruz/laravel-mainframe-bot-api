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
     * Form constructor.
     * @param string $payload
     */
    function __construct($title = '')
    {
        parent::__construct();
        $this->setType("Author");
        $this->canHaveChildren();
        $this->addProps([
            "title"    => $title
        ]);
        return $this;
    }


}
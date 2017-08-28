<?php

namespace Aubruz\Mainframe\UI\Components;


use Aubruz\Mainframe\UI\RootComponent;

/**
 * Class Dialog
 * @package Aubruz\Mainframe\UI\Components
 */
class Dialog extends RootComponent
{
    /**
     * Dialog constructor.
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
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
     * @return $this
     */
    function __construct()
    {
        parent::__construct();
        $this->setType("Dialog");
        $this->canHaveChildren();
        return $this;
    }

}
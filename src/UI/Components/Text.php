<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class Text
 * @package Aubruz\Mainframe\UI\Components
 */
class Text extends ChildComponent
{

    /**
     * Text constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->setType("Text");
        $this->canHaveChildren();
        return $this;
    }

}
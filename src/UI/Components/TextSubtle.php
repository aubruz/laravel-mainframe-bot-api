<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class TextSubtle
 * @package Aubruz\Mainframe\UI\Components
 */
class TextSubtle extends ChildComponent
{
    /**
     * TextSubtle constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("TextSubtle");
        $this->canHaveChildren();
        return $this;
    }

}
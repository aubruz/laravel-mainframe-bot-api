<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class TextStyle
 * @package Aubruz\Mainframe\UI\Components
 */
class TextStyle extends ChildComponent
{


    /**
     * TextStyle constructor.
     * @param $type
     */
    public function __construct($type)
    {
        parent::__construct();
        $this->setType("TextStyle");
        $this->canHaveChildren();
        $this->addProps([
            "type"    => $type
        ]);
        return $this;
    }

}
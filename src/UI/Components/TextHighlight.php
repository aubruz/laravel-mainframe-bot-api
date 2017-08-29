<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class TextHighlight
 * @package Aubruz\Mainframe\UI\Components
 */
class TextHighlight extends ChildComponent
{
    /**
     * TextHighlight constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("TextHighlight");
        $this->canHaveChildren();
        return $this;
    }

    /**
     * @param $color
     */
    public function setTextColor($color)
    {
        $this->addProps(["textColor" => $color]);
    }

    /**
     * @param $color
     */
    public function setHighlightColor($color)
    {
        $this->addProps(["highlightColor" => $color]);
    }

}
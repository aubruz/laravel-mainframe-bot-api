<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class TextHighlight
 * @package Aubruz\Mainframe\UI\Components
 *
 * A text with a custom color and highlight (background) color.
 *
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
        $this->mustHaveChildren();
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

    /**
     * @param ChildComponent|string $component
     * @return $this
     * @throws UIException
     */
    public function addChildren($component)
    {
        if($component instanceof TextLink || $component instanceof TextStyle || is_string($component)) {
            return parent::addChildren($component);
        }
        throw new UIException("The childs of a TextHighlight must be a string or an instance of TextLink or TextStyle!");
    }

}
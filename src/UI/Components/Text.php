<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class Text
 * @package Aubruz\Mainframe\UI\Components
 *
 * Basic text component, containing a text string or other text components.
 *
 */
class Text extends ChildComponent
{

    /**
     * Text constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("Text");
        $this->mustHaveChildren();
        return $this;
    }

    /**
     * @param ChildComponent|string $component
     * @return $this
     * @throws UIException
     */
    public function addChildren($component)
    {
        if($component instanceof Text || $component instanceof TextButton || $component instanceof TextHighlight ||
            $component instanceof TextLink || $component instanceof TextStyle || $component instanceof TextSubtle ||
            is_string($component)) {
            return parent::addChildren($component);
        }
        throw new UIException("The childs of a Text object must be a string or an instance of Text, TextButton, TextHighlight, TextLink, TextStyle or TextSubtle!");
    }

}
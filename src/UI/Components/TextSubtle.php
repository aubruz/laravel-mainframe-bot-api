<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
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
        $this->mustHaveChildren();
        return $this;
    }

    /**
     * @param TextLink|string $component
     * @return $this
     * @throws UIException
     */
    public function addChildren($component)
    {
        if($component instanceof TextLink || is_string($component)) {
            return parent::addChildren($component);
        }
        throw new UIException("The childs of a TextHighlight must be a string or an instance of TextLink!");
    }

}
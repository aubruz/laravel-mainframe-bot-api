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
        $this->canHaveChildren();
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

    /**
     * @return array
     * @throws UIException
     */
    public function toArray()
    {
        if($this->getProp("children") === null){
            throw new UIException('A TextSubtle must have at least one children!');
        }
        return parent::toArray();
    }

}
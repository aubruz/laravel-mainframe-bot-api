<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;
use Aubruz\Mainframe\UI\RootComponent;

/**
 * Class TextMessage
 * @package Aubruz\Mainframe\UI\Components
 */
class TextMessage extends RootComponent
{
    /**
     * TextMessage constructor.
     * @param string $payload
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("TextMessage");
        $this->canHaveChildren();
        return $this;
    }

    /**
     * @param ChildComponent $component
     * @return $this
     * @throws UIException
     */
    public function addChildren(ChildComponent $component)
    {
        if($component instanceof Text) {
            return parent::addChildren($component);
        }
        throw new UIException("The childs of a TextMessage must be an instance of Text!");
    }

}
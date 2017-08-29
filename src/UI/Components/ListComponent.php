<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class ListComponent
 * @package Aubruz\Mainframe\UI\Components
 */
class ListComponent extends ChildComponent
{

    /**
     * ListComponent constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("ListComponent");
        $this->canHaveChildren();
        return $this;
    }

    /**
     * @param ListItem $listItem
     * @return $this
     */
    public function addChildren(ListItem $listItem)
    {
        parent::addChildren($listItem);
        return $this;
    }
}
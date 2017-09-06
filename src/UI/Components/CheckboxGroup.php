<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class CheckboxGroup
 * @package Aubruz\Mainframe\UI\Components
 *
 * A group of CheckboxItems but with a main label above the grouping
 *
 */
class CheckboxGroup extends ChildComponent
{

    /**
     * CheckboxGroup constructor.
     * @param $title
     */
    public function __construct($title)
    {
        parent::__construct();
        $this->setType("CheckboxGroup");
        $this->canHaveChildren();
        $this->addProps([
            "title"    => $title,
        ]);
       return $this;
    }

    /**
     * @param CheckboxItem $checkbox
     * @return $this
     */
    public function addChildren(CheckboxItem $checkbox)
    {
        parent::addChildren($checkbox);
        return $this;
    }
}
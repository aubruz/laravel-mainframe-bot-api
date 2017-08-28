<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class CheckboxGroup
 * @package Aubruz\Mainframe\UI\Components
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
}
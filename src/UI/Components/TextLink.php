<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class TextLink
 * @package Aubruz\Mainframe\UI\Components
 */
class TextLink extends ChildComponent
{

    /**
     * CheckboxGroup constructor.
     * @param $title
     */
    function __construct($title = '')
    {
        parent::__construct();
        $this->setType("Author");
        $this->canHaveChildren();
        $this->addProps([
            "title"    => $title
        ]);
        return $this;
    }

}
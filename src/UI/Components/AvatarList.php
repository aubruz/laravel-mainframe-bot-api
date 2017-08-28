<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class AvatarList
 * @package Aubruz\Mainframe\UI\Components
 */
class AvatarList extends ChildComponent
{

    /**
     * AvatarList constructor.
     * @param $title
     */
    public function __construct($title)
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
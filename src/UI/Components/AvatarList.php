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
     * @param string $avatars
     */
    public function __construct($avatars)
    {
        parent::__construct();
        $this->setType("AvatarList");
        $this->addProps([
            "avatars"    => $avatars
        ]);
        return $this;
    }

    /**
     * @return $this
     */
    public function isCircle()
    {
        $this->addProps(["isCircle" => true]);
        return $this;
    }

}
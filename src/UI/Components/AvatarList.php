<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class AvatarList
 * @package Aubruz\Mainframe\UI\Components
 *
 * A component that represents a horizontal row/list of images.
 *
 */
class AvatarList extends ChildComponent
{

    /**
     * AvatarList constructor.
     * @param array $avatars
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
     * @param $name
     * @return $this
     */
    public function addAvatar($name)
    {
        $this->addProps(["avatars" => $name], true);
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
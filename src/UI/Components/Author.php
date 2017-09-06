<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class Author
 * @package Aubruz\Mainframe\UI\Components
 *
 * A component that can represent a user with simple user data.
 *
 */
class Author extends ChildComponent
{
    /**
     * Author constructor.
     * @param $title
     */
    public function __construct($displayName, $username)
    {
        parent::__construct();
        $this->setType("Author");
        $this->addProps([
            "displayName"   => $displayName,
            "username"      =>  $username
        ]);
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function addAvatarUrl($url)
    {
        $this->addProps(["avatarUrl" => $url]);
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
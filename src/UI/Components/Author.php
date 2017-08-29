<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class Author
 * @package Aubruz\Mainframe\UI\Components
 */
class Author extends ChildComponent
{
    /**
     * Author constructor.
     * @param $title
     */
    public function __construct($title, $username)
    {
        parent::__construct();
        $this->setType("Author");
        $this->addProps([
            "displayName"    => $title,
            "username" =>  $username
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
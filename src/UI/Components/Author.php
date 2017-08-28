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
     * CheckboxGroup constructor.
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
     * @param string $url
     */
    public function addAvatarUrl($url)
    {
        $this->json['avatarUrl'] = $url;
    }

    /**
     *
     */
    public function isCircle()
    {
        $this->json['isCircle'] = true;
    }

}
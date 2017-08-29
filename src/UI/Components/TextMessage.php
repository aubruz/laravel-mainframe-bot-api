<?php

namespace Aubruz\Mainframe\UI\Components;


use Aubruz\Mainframe\UI\RootComponent;

/**
 * Class TextMessage
 * @package Aubruz\Mainframe\UI\Components
 */
class TextMessage extends RootComponent
{
    /**
     * Form constructor.
     * @param string $payload
     */
    public function __construct($title = '')
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
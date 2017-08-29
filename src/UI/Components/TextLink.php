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
     * TextLink constructor.
     * @param $url
     */
    public function __construct($url)
    {
        parent::__construct();
        $this->setType("TextLink");
        $this->canHaveChildren();
        $this->addProps([
            "url"    => $url
        ]);
        return $this;
    }

    /**
     * @return $this
     */
    public function noStyle()
    {
        $this->addProps(["noStyle" => true]);
        return $this;
    }

    /**
     * @return $this
     */
    public function noEmojify()
    {
        $this->addProps(["noEmojify" => true]);
        return $this;
    }
}
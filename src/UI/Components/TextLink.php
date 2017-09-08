<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class TextLink
 * @package Aubruz\Mainframe\UI\Components
 *
 * Text field which is a link to an external URL.
 *
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
        $this->mustHaveChildren();
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

    public function addChildren($component)
    {
        if(is_string($component)) {
            return parent::addChildren($component);
        }
        throw new UIException("The childs of a Text object must be a string only!");
    }
}
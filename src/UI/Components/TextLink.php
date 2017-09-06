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

    /**
     * @return array
     * @throws UIException
     */
    public function toArray()
    {
        if($this->getProp("children") === null){
            throw new UIException('A TextLink must have at least one children!');
        }
        return parent::toArray();
    }
}
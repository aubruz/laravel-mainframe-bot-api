<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class IconTextGroup
 * @package Aubruz\Mainframe\UI\Components
 *
 * A component that renders a group of image, primary text and secondary text.
 *
 */
class IconTextGroup extends ChildComponent
{
    /**
     * CheckboxGroup constructor.
     * @param string $primaryText
     */
    public function __construct($primaryText)
    {
        parent::__construct();
        $this->setType("IconTextGroup");
        $this->addProps([
            "primaryText" => $primaryText
        ]);
        return $this;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setSecondaryText($text)
    {
        $this->addProps(["secondaryText" => $text]);
        return $this;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setImageUrl($url)
    {
        $this->addProps(["imageUrl" => $url]);
        return $this;
    }

}
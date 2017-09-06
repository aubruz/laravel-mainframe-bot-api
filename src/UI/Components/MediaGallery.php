<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class MediaGallery
 * @package Aubruz\Mainframe\UI\Components
 *
 * Container for a list of MediaItem children
 *
 */
class MediaGallery extends ChildComponent
{

    /**
     * MediaGallery constructor.
     * @param $title
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("MediaGallery");
        $this->canHaveChildren();
        return $this;
    }

    /**
     * @return $this
     */
    public function showSquareImages()
    {
        $this->addProps(["showSquareImages" => true]);
        return $this;
    }

    /**
     * @param MediaItem $component
     * @return $this
     */
    public function addChildren(MediaItem $component)
    {
        return parent::addChildren($component);
    }

    /**
     * @return array|UIException
     */
    public function toArray()
    {
        if($this->getProp("children") === null){
            return new UIException("You must add children to a MediaGallery object!");
        }
        return parent::toArray();
    }

}
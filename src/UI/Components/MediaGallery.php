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
        $this->mustHaveChildren();
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
    public function addChildren($component)
    {
        if($component instanceof MediaItem) {
            return parent::addChildren($component);
        }
        throw new UIException("Child of MediaGallery can only be a MediaItem");
    }

}
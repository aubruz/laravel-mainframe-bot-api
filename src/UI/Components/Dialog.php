<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;
use Aubruz\Mainframe\UI\RootComponent;

/**
 * Class Dialog
 * @package Aubruz\Mainframe\UI\Components
 *
 * Generic root container for modal dialogs that do not require user inputs.
 *
 */
class Dialog extends RootComponent
{
    /**
     * Dialog constructor.
     * @return $this
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("Dialog");
        $this->canHaveChildren();
        return $this;
    }

    /**
     * @param ChildComponent $component
     * @return $this
     * @throws UIException
     */
    public function addChildren(ChildComponent $component)
    {
        if($component instanceof Author || $component instanceof AvatarList || $component instanceof IconTextGroup ||
            $component instanceof Image || $component instanceof LinkPreview || $component instanceof Text ||
            $component instanceof VideoLinkPreview || $component instanceof ListComponent || $component instanceof MediaGallery) {
            return parent::addChildren($component);
        }
        throw new UIException("The childs of a Dialog must be an instance of Author, AvatarList, IconTextGroup, Image, LinkPreview, Text, ListComponent, MediaGallery or VideoLinkPreview!");
    }

}
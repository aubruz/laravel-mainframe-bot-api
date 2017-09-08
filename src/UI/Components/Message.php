<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;
use Aubruz\Mainframe\UI\RootComponent;

/**
 * Class Message
 * @package Aubruz\Mainframe\UI\Components
 *
 * Root container for the UI that goes inside bot messages and embeds, similar to how all form components get nested inside Form.
 *
 */
class Message extends RootComponent
{
    /**
     * Message constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("Message");
        $this->mustHaveChildren();
        return $this;
    }

    /**
     * @param ChildComponent $component
     * @return $this
     * @throws UIException
     */
    public function addChildren($component)
    {
        if($component instanceof Author || $component instanceof AvatarList || $component instanceof IconTextGroup ||
            $component instanceof Image || $component instanceof LinkPreview || $component instanceof Text ||
            $component instanceof VideoLinkPreview) {
            return parent::addChildren($component);
        }
        throw new UIException("The childs of a Message must be an instance of Author, AvatarList, IconTextGroup, Image, LinkPreview, Text or VideoLinkPreview!");
    }

}
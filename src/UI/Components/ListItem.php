<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class ListItem
 * @package Aubruz\Mainframe\UI\Components
 *
 * Item container to be used as a child of a List component.
 *
 */
class ListItem extends ChildComponent
{

    /**
     * ListItem constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("ListItem");
        $this->mustHaveChildren();
        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setListType($type)
    {
        if(!in_array($type, ["copy_url", "open_url", "open_modal", "message_embed", "post_payload"])) {
            throw new UIException('The type of a ListItem must be either "copy_url", "open_url", "open_modal", "message_embed" or "post_payload"!');
        }
        $this->addProps(["type" => $type]);
        return $this;
    }

    /**
     * @param $payload
     * @return $this
     */
    public function setPayload($payload)
    {
        if(!in_array($this->getProp("type"), ["open_modal", "message_embed", "post_payload"])) {
            throw new UIException('To set a payload, the type of the ListItem must be either "open_modal", "message_embed" or "post_payload"!');
        }
        $this->addProps(["payload" => $payload]);
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function setUrl($url)
    {
        if(!in_array($this->getProp("type"), ["copy_url", "open_url"])) {
            throw new UIException('To set an url, the type of the ListItem must be either "copy_url" or "open_url"!');
        }
        $this->addProps(["url" => $url]);
        return $this;
    }

    /**
     * @param $title
     * @return $this
     */
    public function setModalTitle($title)
    {
        if(!in_array($this->getProp("type"), ["open_modal"])) {
            throw new UIException('To set a modal title, the type of the ListItem must be "open_modal"!');
        }
        $this->addProps(["modalTitle" => $title]);
        return $this;
    }

    /**
     * @param ChildComponent $component
     * @return $this
     * @throws UIException
     */
    public function addChildren($component)
    {
        if($component instanceof Author || $component instanceof AvatarList || $component instanceof LinkPreview ||
            $component instanceof IconTextGroup || $component instanceof Image || $component instanceof Text ||
             $component instanceof VideoLinkPreview) {
            return parent::addChildren($component);
        }
        throw new UIException("The childs of a ListItem must be an instance of Author, AvatarList, IconTextGroup, Image, LinkPreview, Text or VideoLinkPreview!");
    }

}
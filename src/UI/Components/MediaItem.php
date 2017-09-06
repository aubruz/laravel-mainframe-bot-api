<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class MediaItem
 * @package Aubruz\Mainframe\UI\Components
 *
 * A child of MediaGallery displaying an image and possibly supporting interactions based on the parent MediaGallery type when provided.
 *
 */
class MediaItem extends ChildComponent
{

    /**
     * MediaItem constructor.
     * @param $imageUrl
     */
    public function __construct($imageUrl)
    {
        parent::__construct();
        $this->setType("MediaItem");
        $this->addProps([
            "imageUrl"    => $imageUrl
        ]);
        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setListType($type)
    {
        if(!in_array($type, ["copy_url", "open_url", "open_modal", "message_embed", "post_payload"])) {
            throw new UIException('The type of a MediaItem must be either "copy_url", "open_url", "open_modal", "message_embed" or "post_payload"!');
        }
        $this->addProps(["type" => $type]);
        return $this;
    }

    /**
     * @param $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->addProps(["width" => $width]);
        return $this;
    }

    /**
     * @param $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->addProps(["height" => $height]);
        return $this;
    }

    /**
     * @param $payload
     * @return $this
     */
    public function setPayload($payload)
    {
        if(!in_array($this->getProp("type"), ["open_modal", "message_embed", "post_payload"])) {
            throw new UIException('To set a payload, the type of the MediaItem must be either "open_modal", "message_embed" or "post_payload"!');
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
            throw new UIException('To set an url, the type of the MediaItem must be either "copy_url" or "open_url"!');
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
            throw new UIException('To set a modal title, the type of the MediaItem must be "open_modal"!');
        }
        $this->addProps(["modalTitle" => $title]);
        return $this;
    }

    /**
     * @return $this
     */
    public function isSelected()
    {
        $this->addProps(["isSelected" => true]);
        return $this;
    }

    /**
     * @param $color
     * @return $this
     * @throws UIException
     */
    public function setSelectedBorderColor($color)
    {
        if($this->getProp("isSelected") === null || $this->getProp("isSelected") === false){
            throw new UIException("You need to set isSelected to true in order to use setSelectedBorderColor() in a MediaItem!");
        }
        $this->addProps(["selectedBorderColor" => $color]);
        return $this;
    }

    /**
     * @param $color
     * @return $this
     */
    public function setBackgroundColor($color)
    {
        $this->addProps(["backgroundColor" => $color]);
        return $this;
    }
}
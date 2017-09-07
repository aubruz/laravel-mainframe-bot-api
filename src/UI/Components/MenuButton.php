<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\UIButton;

/**
 * Class MenuButton
 * @package Aubruz\Mainframe\UI\Components
 */
class MenuButton extends UIButton
{
    /**
     * MenuButton constructor.
     * @param $title
     * @param string $type
     * @throws UIException
     */
    public function __construct($title)
    {
        parent::__construct($title);
    }

    /**
     * @param $type
     * @return $this
     * @throws UIException
     */
    public function setType($type)
    {
        if(!in_array($type, ["copy_url", "open_url", "open_modal", "message_embed", "post_payload"])) {
            throw new UIException('The type of a MenuButton must be either "copy_url", "open_url", "open_modal", "message_embed" or "post_payload"!');
        }
        return parent::setType($type);
    }

    /**
     * @param $icon
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->setProp('icon', $icon);
        return $this;
    }

    /**
     * @param $title
     * @return $this
     * @throws UIException
     */
    public function setModalTitle($title)
    {
        if(!in_array($this->getProp("type"), ["open_modal"])) {
            throw new UIException('To set a modal title, the type of the MenuButton must be either "open_modal"!');
        }
        $this->setProp('modalTitle', $title);
        return $this;
    }

    /**
     * @param $payload
     * @return $this
     * @throws UIException
     */
    public function setPayload($payload)
    {
        if(!in_array($this->getProp("type"), ["open_modal", "message_embed", "post_payload"])) {
            throw new UIException('To set a payload, the type of the MenuButton must be either "open_modal", "message_embed" or "post_payload"!');
        }
        return parent::setPayload($payload);
    }

    /**
     * @return array
     * @throws UIException
     */
    public function toArray()
    {
        if($this->getProp("icon") === null){
            throw new UIException('The icon property hasn\'t been set!');
        }
        if($this->getProp("type") === null){
            throw new UIException('The type property hasn\'t been set!');
        }
        return parent::toArray();
    }
}
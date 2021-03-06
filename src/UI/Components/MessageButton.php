<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\UIButton;

/**
 * Class MessageButton
 * @package Aubruz\Mainframe\UI\Components
 */
class MessageButton extends UIButton
{

    /**
     * MessageButton constructor.
     * @param $title
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
        if(!in_array($type, ["copy_url", "open_url", "open_modal", "post_payload"])) {
            throw new UIException('The type of a MenuButton must be either "copy_url", "open_url", "open_modal" or "post_payload"!');
        }
        return parent::setType($type);
    }

    /**
     * @param $title
     * @return $this
     * @throws UIException
     */
    public function setModalTitle($title)
    {
        if(!in_array($this->getProp("type"), ["open_modal"])) {
            throw new UIException('To set a modal title, the type of the button must be either "open_modal"!');
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
        return parent::setPayload($payload);
    }

    /**
     * @return array
     * @throws UIException
     */
    public function toArray()
    {
        if($this->getProp("type") === null){
            throw new UIException('The type property hasn\'t been set!');
        }
        return parent::toArray();
    }

}
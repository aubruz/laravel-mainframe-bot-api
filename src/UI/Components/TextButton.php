<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class TextButton
 * @package Aubruz\Mainframe\UI\Components
 *
 * Text component acting as a button to handle interactions.
 *
 */
class TextButton extends ChildComponent
{

    /**
     * TextButton constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->setType("TextButton");
        $this->canHaveChildren();

        return $this;
    }

    /**
     * @param $type
     */
    public function setTextType($type)
    {
        if(!in_array($type, ["copy_url", "open_url", "open_modal", "post_payload"])) {
            throw new UIException('The type of a TextButton must be either "copy_url", "open_url", "open_modal" or "post_payload"!');
        }
        $this->addProps(["type" => $type]);
    }

    /**
     * @param $payload
     */
    public function setPayload($payload)
    {
        if(!in_array($this->getProp("type"), ["open_modal", "post_payload"])) {
            throw new UIException('To set a payload, the type of the TextButton must be either "open_modal" or "post_payload"!');
        }
        $this->addProps(["payload" => $payload]);
    }

    /**
     * @param $url
     */
    public function setUrl($url)
    {
        if(!in_array($this->getProp("type"), ["copy_url", "open_url"])) {
            throw new UIException('To set an url, the type of the TextButton must be either "copy_url" or "open_url"!');
        }
        $this->addProps(["url" => $url]);
    }

    /**
     * @param $title
     * @return $this
     */
    public function setModalTitle($title)
    {
        if(!in_array($this->getProp("type"), ["open_modal"])) {
            throw new UIException('To set a modal title, the type of the TextButton must be "open_modal"!');
        }
        $this->addProps(["modalTitle" => $title]);
        return $this;
    }

}
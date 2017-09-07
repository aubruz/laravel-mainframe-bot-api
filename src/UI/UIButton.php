<?php

namespace Aubruz\Mainframe\UI;

use Aubruz\Mainframe\ArrayType;
use Aubruz\Mainframe\Exceptions\UIException;


/**
 * Class Button
 * @package Aubruz\Mainframe\UI
 */
abstract class UIButton extends ArrayType
{

    /**
     * Button constructor.
     * @param $title
     */
    function __construct($title)
    {
        $this->json = [
            "title" => $title
        ];
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function setUrl($url)
    {
        if(!in_array($this->getProp("type"), ["copy_url", "open_url"])) {
            throw new UIException('To set an url, the type of the button must be either "copy_url" or "open_url"!');
        }
        $this->setProp("url", $url);
        return $this;
    }


    /**
     * @param $payload
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->setProp("payload", $payload);
        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type)
    {
        $this->setProp("type", $type);
        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setTitle($title)
    {
        $this->setProp("title", $title);
        return $this;
    }

    /**
     * @param $prop
     * @param $value
     * @return $this
     */
    public function setProp($prop, $value)
    {
        $this->json[$prop] = $value;
        return $this;
    }

    /**
     * @param $prop
     * @return mixed
     */
    public function getProp($prop)
    {
        if(array_key_exists($prop, $this->json)) {
            return $this->json[$prop];
        }
        return null;
    }
}
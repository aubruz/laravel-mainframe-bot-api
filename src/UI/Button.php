<?php

namespace Aubruz\Mainframe\UI;


/**
 * Class Button
 * @package Aubruz\Mainframe\UI
 */
class Button extends Component
{

    /**
     * Button constructor.
     * @param $title
     */
    function __construct($title)
    {
        $this->json = [
            "title" => $title,
            "type"  => 'post_payload',
            "style" => 'primary',
        ];
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->json["url"] = $url;
        return $this;
    }

    /**
     * @param $style
     * @return $this
     */
    public function setStyle($style)
    {
        $this->json["style"] = $style;
        return $this;
    }

    /**
     * @param $payload
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->json["payload"] = $payload;
        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type)
    {
        $this->json["type"] = $type;
        return $this;
    }
}
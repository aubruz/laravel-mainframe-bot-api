<?php

namespace Aubruz\Mainframe\Responses;

use Aubruz\Mainframe\ArrayType;
use Aubruz\Mainframe\UI\UIButton;
use Aubruz\Mainframe\UI\RootComponent;

/**
 * Class UIPayload
 * @package Aubruz\Mainframe\UI
 */
class UIPayload extends ArrayType
{
    /**
     * UIPayload constructor.
     * @param int $version
     */
    function __construct($version = 1)
    {
        $this->json = [
            'version'   => $version,
            'buttons'   => []
        ];
        return $this;
    }

    /**
     * @param UIButton $button
     * @return $this
     */
    public function addButton(UIButton $button)
    {
        array_push($this->json["buttons"], $button->toArray());
        return $this;
    }

    /**
     * @param RootComponent $component
     * @return $this
     */
    public function setRender(RootComponent $component)
    {
        $this->json["render"] = $component->toArray();
        return $this;
    }
}
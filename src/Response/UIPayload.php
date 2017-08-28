<?php

namespace Aubruz\Mainframe\Response;

use Aubruz\Mainframe\ArrayType;
use Aubruz\Mainframe\UI\Button;
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
     * @param Button $button
     * @return $this
     */
    public function addButton(Button $button)
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
<?php

namespace Aubruz\Mainframe\UI;


class Modal
{
    /**
     * @var array
     */
    private $json;

    /**
     * Modal constructor.
     * @param string $title
     */
    function __construct($title = '')
    {
        $this->json = [
            'type'  => 'modal',
            'title' => $title,
            'ui'    => [
                'version'   => 1,
                'buttons'   => [],
                'render'    => '',
            ]
        ];
        return $this;
    }

    /**
     * @param Button $button
     * @return $this
     */
    function addButton(Button $button)
    {
        array_push($this->json["ui"]["buttons"], $button->toArray());
        return $this;
    }

    /**
     * @param Component $component
     * @return $this
     */
    public function setRender(Component $component)
    {
        $this->json["ui"]["render"] = $component->toArray();
        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->json;
    }

}
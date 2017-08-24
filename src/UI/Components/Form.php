<?php

namespace Aubruz\Mainframe\UI\Components;


use Aubruz\Mainframe\UI\UIComponent;

/**
 * Class Form
 * @package Aubruz\Mainframe\UI\Form
 */
class Form extends UIComponent
{
    /**
     * Form constructor.
     * @param string $payload
     */
    function __construct($payload = '')
    {
        $this->json = [
            "type"  => "Form",
            "props" => [
                "payload"   => [
                    "type"  => $payload
                ],
                "children"   => [],
                "data"  => []
            ]
        ];
        return $this;
    }

    /**
     * @param FormChild $child
     * @return $this
     */
    public function addChildren(FormChild $child)
    {
        array_push($this->json["props"]["children"], $child->toArray());
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function addData($key, $value)
    {
        $this->json["props"]["data"][$key] = $value;
        return $this;
    }

}
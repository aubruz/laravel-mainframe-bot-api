<?php

namespace Aubruz\Mainframe\UI\Components;


/**
 * Class CheckboxGroup
 * @package Aubruz\Mainframe\UI\Components
 */
class CheckboxGroup extends FormChild
{

    /**
     * CheckboxGroup constructor.
     * @param $title
     */
    public function __construct($title)
    {
        $this->json = [
            "type"  => "CheckboxGroup",
            "props" => [
                "title"    => $title,
                "children" =>  []
            ]
        ];
    }

    /**
     * @param CheckboxItem $checkbox
     * @return $this
     */
    public function addChildren(CheckboxItem $checkbox)
    {
        array_push($this->json["props"]["children"], $checkbox->toArray());
        return $this;
    }

}
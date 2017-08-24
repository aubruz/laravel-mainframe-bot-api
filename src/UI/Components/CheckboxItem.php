<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\UIComponent;


/**
 * Class CheckboxItem
 * @package Aubruz\Mainframe\UI\Components
 */
class CheckboxItem extends UIComponent
{

    /**
     * CheckboxItem constructor.
     * @param $id
     * @param $label
     */
    public function __construct($id, $label)
    {
        $this->json = [
            "type"  => "CheckboxItem",
            "props" => [
                "id"    => $id,
                "label" =>  $label
            ]
        ];
    }


}
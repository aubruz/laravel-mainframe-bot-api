<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class RadioButtonSelect
 * @package Aubruz\Mainframe\UI\Components
 */
class RadioButtonSelect extends ChildComponent
{

    /**
     * RadioButtonSelect constructor.
     * @param $id
     * @param $title
     */
    function __construct($id, $title)
    {
        parent::__construct();
        $this->setType("RadioButtonSelect");
        $this->addProps([
            "id"        => $id,
            "title"     => $title,
            "options"   => []
        ]);
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function addOptions($options)
    {
        $this->addProps(["options" => $options]);
        return $this;
    }

}
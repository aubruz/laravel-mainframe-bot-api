<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class MultiSelect
 * @package Aubruz\Mainframe\UI\Components
 */
class MultiSelect extends ChildComponent
{

    /**
     * MultiSelect constructor.
     * @param $id
     * @param $label
     */
    public function __construct($id, $label)
    {
        parent::__construct();
        $this->setType("MultiSelect");
        $this->addProps([
            "id"        => $id,
            "label"     => $label,
            "options"   => []
        ]);
        return $this;
    }

    /**
     * @return $this
     */
    public function disable()
    {
        $this->addProps(["disabled" => true]);
        return $this;
    }

    /**
     * @param string|array $options
     * @return $this
     */
    public function addOptions($options)
    {
        $this->addProps(["options" => $options]);
        return $this;
    }

}
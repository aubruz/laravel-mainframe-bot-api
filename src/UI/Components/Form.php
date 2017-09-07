<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;
use Aubruz\Mainframe\UI\RootComponent;

/**
 * Class Form
 * @package Aubruz\Mainframe\UI\Form
 *
 * Top level component to handle data from its supported children components.
 *
 */
class Form extends RootComponent
{

    /**
     * Form constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("Form");
        $this->mustHaveChildren();
        $this->addProps([
            "data"  => []
        ]);

        return $this;
    }

    /**
     * @param $payload
     * @return $this
     */
    public function addPayload($payload)
    {
        $this->addProps(["payload" => $payload]);
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function addData($key, $value)
    {
        $this->addProps(["data" => [$key => $value]]);
        return $this;
    }

    /**
     * @param ChildComponent $component
     * @return $this
     * @throws UIException
     */
    public function addChildren(ChildComponent $component)
    {
        if($component instanceof CheckboxGroup || $component instanceof CheckboxItem || $component instanceof Dropdown ||
            $component instanceof MultiLineInput || $component instanceof MultiSelect || $component instanceof RadioButtonSelect ||
            $component instanceof Text || $component instanceof TextInput) {
            return parent::addChildren($component);
        }
        throw new UIException("The childs of a Form must be an instance of CheckboxGroup, CheckboxItem, Dropdown, MultiLineInput, MultiSelect, RadioButtonSelect, Text or TextInput!");
    }

}
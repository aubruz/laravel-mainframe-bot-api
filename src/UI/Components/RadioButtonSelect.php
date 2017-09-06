<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class RadioButtonSelect
 * @package Aubruz\Mainframe\UI\Components
 *
 * A selector displaying a list of radio buttons with a main label above the grouping.
 *
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
     * @param string|array $options
     * @return $this
     */
    public function addOptions($options)
    {
        if(is_string($options)) {
            $this->addProps(["options" => $options], true);
        }else if(is_array($options)){
            foreach ($options as $key => $value) {
                $this->addProps(["options" => [
                    "label" => $value,
                    "value" => $key
                ]], true);
            }
        }

        return $this;
    }

    /**
     * @return array
     * @throws UIException
     */
    public function toArray()
    {
        if($this->getProp("options") === null){
            throw new UIException('The options property of RadioButtonSelect component is missing!');
        }
        return parent::toArray();
    }

}
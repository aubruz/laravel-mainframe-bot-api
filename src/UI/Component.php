<?php

namespace Aubruz\Mainframe\UI;

use Aubruz\Mainframe\ArrayType;

/**
 * Class Component
 * @package Aubruz\Mainframe\UI
 */
class Component extends ArrayType
{
    /**
     * @var boolean
     */
    private $canHaveChildren = false;

    /**
     * Component constructor.
     */
    public function __construct()
    {
        $this->json = [
            "type"  => "",
            "props" => []
        ];
        return $this;
    }

    /**
     * @return $this
     */
    protected function canHaveChildren()
    {
        $this->canHaveChildren = true;
        $this->json["props"]["children"] = [];
        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type)
    {
        $this->json["type"] = $type;
        return $this;
    }

    /**
     * @param array $props
     * @return $this
     */
    public function addProps($props)
    {
        foreach($props as $propertyKey => $propertyValue){
            if(is_array($propertyValue)){
                foreach($propertyValue as $key => $value){
                    $this->json["props"][$propertyKey][$key] = $value;
                }
            }else {
                $this->json["props"][$propertyKey] = $propertyValue;
            }
        }
        return $this;
    }

    /**
     * @param ChildComponent $component
     * @return $this
     */
    public function addChildren(ChildComponent $component)
    {
        if($this->canHaveChildren) {
            array_push($this->json["props"]["children"],  $component->toArray());
        }

        return $this;
    }
}
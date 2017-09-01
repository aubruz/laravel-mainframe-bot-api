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
    protected function __construct()
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
    protected function setType($type)
    {
        $this->json["type"] = $type;
        return $this;
    }


    /**
     * @param $props
     * @param bool $push
     * @return $this
     */
    protected function addProps($props, $push = false)
    {
        foreach($props as $propertyKey => $propertyValue){
            if($push){
                array_push($this->json["props"][$propertyKey], $propertyValue);
            }else if(is_array($propertyValue) && count($propertyValue) > 0){
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
            $this->addProps(["children" => $component->toArray()], true);
        }

        return $this;
    }
}
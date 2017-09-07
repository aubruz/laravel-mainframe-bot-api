<?php

namespace Aubruz\Mainframe\UI;

use Aubruz\Mainframe\ArrayType;
use Aubruz\Mainframe\Exceptions\UIException;

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
     * @var boolean
     */
    private $mustHaveChildren = false;

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
     * @return $this
     */
    protected function mustHaveChildren()
    {
        $this->mustHaveChildren = true;
        return $this->canHaveChildren();
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
     * @param $prop
     * @return mixed
     */
    public function getProp($prop)
    {
        if(array_key_exists($prop, $this->json["props"])) {
            return $this->json["props"][$prop];
        }
        return null;
    }

    /**
     * @param ChildComponent|string $component
     * @return $this
     */
    public function addChildren($component)
    {
        if($this->canHaveChildren) {
            if($component instanceof ChildComponent) {
                $this->addProps(["children" => $component->toArray()], true);
            }else if(is_string($component)) {
                $this->addProps(["children" => $component], true);
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
        if($this->mustHaveChildren && $this->getProp("children") === null){
            throw new UIException($this->getProp("type") . " must have at least one children!");
        }
        return parent::toArray();
    }
}
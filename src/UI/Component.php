<?php

namespace Aubruz\Mainframe\UI;


/**
 * Class Component
 * @package Aubruz\Mainframe\UI
 */
abstract class Component
{
    /**
     * @var array
     */
    protected $json;


    /**
     * @return array
     */
    public function toArray()
    {
        return $this->json;
    }

}
<?php

namespace Aubruz\Mainframe;

/**
 * Class ArrayType
 * @package Aubruz\Mainframe
 */
abstract class ArrayType
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
<?php

namespace Aubruz\Mainframe\UI;

/**
 * Class ArrayType
 * @package Aubruz\Mainframe\UI
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
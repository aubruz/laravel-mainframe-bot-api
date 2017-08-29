<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class Image
 * @package Aubruz\Mainframe\UI\Components
 */
class Image extends ChildComponent
{

    /**
     * Image constructor.
     * @param $imageUrl
     * @param $height
     * @param $width
     */
    public function __construct($imageUrl, $height, $width)
    {
        parent::__construct();
        $this->setType("Image");
        $this->addProps([
            "imageUrl"  => $imageUrl,
            "height"    => $height,
            "width"     => $width
        ]);
        return $this;
    }

    /**
     * @return $this
     */
    public function allowOpenFullImage()
    {
        $this->addProps(["allowOpenFullImage" => true]);
        return $this;
    }

}
<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class CheckboxGroup
 * @package Aubruz\Mainframe\UI\Components
 *
 * A group of CheckboxItems but with a main label above the grouping
 *
 */
class CheckboxGroup extends ChildComponent
{

    /**
     * CheckboxGroup constructor.
     * @param $title
     */
    public function __construct($title)
    {
        parent::__construct();
        $this->setType("CheckboxGroup");
        $this->mustHaveChildren();
        $this->addProps([
            "title"    => $title,
        ]);
       return $this;
    }

    /**
     * @param CheckboxItem $checkbox
     * @return $this
     */
    public function addChildren($checkbox)
    {
        if($checkbox instanceof CheckboxItem) {
            return parent::addChildren($checkbox);
        }
        throw new UIException("Child of MediaGallery can only be a MediaItem");
    }
}
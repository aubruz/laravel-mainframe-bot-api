<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;


/**
 * Class CheckboxItem
 * @package Aubruz\Mainframe\UI\Components
 *
 * A text label with a checkbox positioned at the front of the label
 *
 */
class CheckboxItem extends ChildComponent
{

    /**
     * CheckboxItem constructor.
     * @param $id
     * @param $label
     */
    public function __construct($id, $label)
    {
        parent::__construct();
        $this->setType("CheckboxItem");
        $this->addProps([
            "id"    => $id,
            "label" =>  $label
        ]);
        return $this;
    }

}
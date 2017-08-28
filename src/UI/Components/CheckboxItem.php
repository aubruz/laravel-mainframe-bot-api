<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;


/**
 * Class CheckboxItem
 * @package Aubruz\Mainframe\UI\Components
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
        $this->canHaveChildren();
        $this->addProps([
            "id"    => $id,
            "label" =>  $label
        ]);
        return $this;
    }


}
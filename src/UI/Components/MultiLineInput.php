<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class MultiLineInput
 * @package Aubruz\Mainframe\UI\Components
 *
 * Text input for when you want the text to be wrapped and to display multiple lines, can only be used a a child of a Form.
 *
 */
class MultiLineInput extends ChildComponent
{

    /**
     * MultiLineInput constructor.
     * @param $id
     * @param $label
     */
    public function __construct($id, $label)
    {
        parent::__construct();
        $this->setType("MultiLineInput");
        $this->addProps([
            "id"    => $id,
            "label" => $label
        ]);
        return $this;
    }

    /**
     * @param $error
     * @return $this
     */
    public function setErrorFeedback($error)
    {
        $this->addProps(["errorFeedback" => $error]);
        return $this;
    }

}
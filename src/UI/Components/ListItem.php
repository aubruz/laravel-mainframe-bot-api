<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class ListItem
 * @package Aubruz\Mainframe\UI\Components
 */
class ListItem extends ChildComponent
{

    /**
     * ListItem constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setType("ListItem");
        $this->canHaveChildren();
        return $this;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setListType($type)
    {
        $this->addProps(["type" => $type]);
        return $this;
    }

    /**
     * @param $payload
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->addProps(["payload" => $payload]);
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->addProps(["url" => $url]);
        return $this;
    }

    /**
     * @param $title
     * @return $this
     */
    public function setModalTitle($title)
    {
        $this->addProps(["modalTitle" => $title]);
        return $this;
    }

}
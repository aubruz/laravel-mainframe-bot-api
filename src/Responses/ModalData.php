<?php

namespace Aubruz\Mainframe\Responses;

use Aubruz\Mainframe\ArrayType;

/**
 * Class Modal
 * @package Aubruz\Mainframe\UI
 */
class ModalData extends ArrayType
{

    /**
     * Modal constructor.
     * @param string $title
     */
    public function __construct($title = '')
    {
        $this->json = [
            'type'  => 'modal',
            'title' => $title
        ];
        return $this;
    }

    /**
     * @param UIPayload $uiPayload
     * @return $this
     */
    public function setUI(UIPayload $uiPayload)
    {
        $this->json['ui'] = $uiPayload->toArray();
        return$this;
    }

    /**
     * @param $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->json['title'] = $title;
        return $this;
    }

}
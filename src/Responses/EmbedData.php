<?php

namespace Aubruz\Mainframe\Responses;

use Aubruz\Mainframe\ArrayType;

/**
 * Class EmbedData
 * @package Aubruz\Mainframe\Response
 */
class EmbedData extends ArrayType
{

    /**
     * EmbedData constructor.
     * @param string $type
     */
    public function __construct($type = 'embed')
    {
        $this->json = [
            'type'  => $type
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
}
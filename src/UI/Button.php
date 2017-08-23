<?php

namespace Aubruz\Mainframe\UI;


class Button extends Component
{

    /**
     * Button constructor.
     * @param $title
     * @param string $payload
     * @param string $style
     * @param string $type
     */
    function __construct($title, $payload = '', $style = 'primary', $type = 'post_payload' )
    {
        $this->json = [
            "title" => $title,
            "type"  => $type,
            "style" => $style,
            "payload"   => [
                "type"      => $payload
            ]
        ];
        return $this;
    }
}
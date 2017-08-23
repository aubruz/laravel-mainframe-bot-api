<?php

namespace Aubruz\Mainframe\UI;


class Form extends Component
{
    /**
     * Form constructor.
     * @param string $payload
     */
    function __construct($payload = '')
    {
        $this->json = [
            "type"  => "Form",
            "props" => [
                "payload"   => [
                    "type"  => $payload
                ],
                "children"   => [],
                "data"  => []
            ]
        ];
        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    function addData($key, $value)
    {
        $this->json["props"]["data"][$key] = $value;
        return $this;
    }

    /**
     *
     */
    public function addCheckboxGroup()
    {

    }

    /**
     *
     */
    public function addCheckboxItem()
    {

    }

    /**
     *
     */
    public function addDropdown()
    {

    }

    /**
     *
     */
    public function addMultiLineInput()
    {

    }

    /**
     *
     */
    public function addMultiSelect()
    {

    }

    /**
     *
     */
    public function addRadioButtonSelect()
    {

    }

    /**
     * @param $id
     * @param $label
     * @param string $prefix
     * @param bool $errorFeedback
     * @return $this
     */
    public function addTextInput($id, $label, $prefix = '', $errorFeedback = false)
    {
        array_push($this->json["props"]["children"], [
            "type"  => "TextInput",
            "props" => [
                "id"    => $id,
                "label"     =>  $label,
                "prefix"    => $prefix,
                "errorFeedback" => $errorFeedback
            ]
        ]);
        return $this;
    }

}
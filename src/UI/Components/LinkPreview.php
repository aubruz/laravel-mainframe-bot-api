<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class LinkPreview
 * @package Aubruz\Mainframe\UI\Components
 *
 * A component that represents a link on the web
 *
 */
class LinkPreview extends ChildComponent
{

    /**
     * LinkPreview constructor.
     * @param $title
     * @param $url
     */
    public function __construct($title, $url)
    {
        parent::__construct();
        $this->setType("LinkPreview");
        $this->addProps([
            "title"  => $title,
            "url"    => $url
        ]);
        return $this;
    }

    /**
     * @param $excerpt
     * @return $this
     */
    public function addExcerpt($excerpt)
    {
        $this->addProps(["excerpt" => $excerpt]);
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function addImageUrl($url)
    {
        $this->addProps(["imageUrl" => $url]);
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function addDomainIconUrl($url)
    {
        $this->addProps(["domainIconUrl" => $url]);
        return $this;
    }

    /**
     * @param $domainName
     * @return $this
     */
    public function addDomainName($domainName)
    {
        $this->addProps(["domainName" => $domainName]);
        return $this;
    }

}
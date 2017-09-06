<?php

namespace Aubruz\Mainframe\UI\Components;

use Aubruz\Mainframe\Exceptions\UIException;
use Aubruz\Mainframe\UI\ChildComponent;

/**
 * Class VideoLinkPreview
 * @package Aubruz\Mainframe\UI\Components
 *
 * A component that represents a link of a video on the web
 *
 */
class VideoLinkPreview extends ChildComponent
{

    /**
     * VideoLinkPreview constructor.
     * @param $title
     */
    public function __construct($title)
    {
        parent::__construct();
        $this->setType("VideoLinkPreview");
        $this->canHaveChildren();
        $this->addProps([
            "title" => $title
        ]);
        return $this;
    }

    /**
     * @param $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->addProps(["author" => $author]);
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
     * @param $imageUrl
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->addProps(["imageUrl" => $imageUrl]);
        return $this;
    }

    /**
     * @param $width
     * @return $this
     */
    public function setImageWidth($width)
    {
        $this->addProps(["imageWidth" => $width]);
        return $this;
    }

    /**
     * @param $height
     * @return $this
     */
    public function setImageHeight($height)
    {
        $this->addProps(["imageHeight" => $height]);
        return $this;
    }

    /**
     * @param $domainIconUrl
     * @return $this
     */
    public function setDomainIconUrl($domainIconUrl)
    {
        $this->addProps(["domainIconUrl" => $domainIconUrl]);
        return $this;
    }

    /**
     * @param $domainName
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->addProps(["domainName" => $domainName]);
        return $this;
    }

    /**
     * @param $videoProvider
     * @return $this
     * @throws UIException
     */
    public function setVideoProvider($videoProvider)
    {
        if($videoProvider !== 'youtube' && $videoProvider !== 'vimeo'){
            throw new UIException('Only youtube and vimeo are supported video provider.');
        }
        $this->addProps(["videoProvider" => $videoProvider]);
        return $this;
    }

    /**
     * @param $videoID
     * @return $this
     * @throws UIException
     */
    public function setVideoID($videoID)
    {
        if($this->getProp('videoProvider') === null){
            throw new UIException('You need to specify a video provider.');
        }
        $this->addProps(["videoId" => $videoID]);
        return $this;
    }

    /**
     * @param $width
     * @return $this
     */
    public function setVideoWidth($width)
    {
        $this->addProps(["videoWidth" => $width]);
        return $this;
    }

    /**
     * @param $height
     * @return $this
     */
    public function setVideoHeight($height)
    {
        $this->addProps(["videoHeight" => $height]);
        return $this;
    }

    /**
     * @return $this
     */
    public function noPlayButton()
    {
        $this->addProps(["noPlayButton" => true]);
        return $this;
    }
}
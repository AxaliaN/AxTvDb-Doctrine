<?php

namespace AxTvDbDoctrine\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Serie.
 *
 * @ORM\Entity
 * @ORM\Table(name="AxTvDbDoctrineSerie")
 */
class Serie
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", unique=true)
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $language;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $banner;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $overview;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    protected $firstAired;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $imdbId;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $actors;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $airsDayOfWeek;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $airsTime;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $contentRating;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $genres;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $network;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $rating;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $ratingCount;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $runtime;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $status;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $added;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $addedBy;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $fanArt;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $lastUpdated;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $poster;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $zap2ItId;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * @param string $banner
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;
    }

    /**
     * @return string
     */
    public function getOverview()
    {
        return $this->overview;
    }

    /**
     * @param string $overview
     */
    public function setOverview($overview)
    {
        $this->overview = $overview;
    }

    /**
     * @return DateTime
     */
    public function getFirstAired()
    {
        return $this->firstAired;
    }

    /**
     * @param string $firstAired
     */
    public function setFirstAired($firstAired)
    {
        $this->firstAired = $firstAired;
    }

    /**
     * @return string
     */
    public function getImdbId()
    {
        return $this->imdbId;
    }

    /**
     * @param string $imdbId
     */
    public function setImdbId($imdbId)
    {
        $this->imdbId = $imdbId;
    }

    /**
     * @return string
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param string $actors
     */
    public function setActors($actors)
    {
        $this->actors = $actors;
    }

    /**
     * @return string
     */
    public function getAirsDayOfWeek()
    {
        return $this->airsDayOfWeek;
    }

    /**
     * @param string $airsDayOfWeek
     */
    public function setAirsDayOfWeek($airsDayOfWeek)
    {
        $this->airsDayOfWeek = $airsDayOfWeek;
    }

    /**
     * @return string
     */
    public function getAirsTime()
    {
        return $this->airsTime;
    }

    /**
     * @param string $airsTime
     */
    public function setAirsTime($airsTime)
    {
        $this->airsTime = $airsTime;
    }

    /**
     * @return string
     */
    public function getContentRating()
    {
        return $this->contentRating;
    }

    /**
     * @param string $contentRating
     */
    public function setContentRating($contentRating)
    {
        $this->contentRating = $contentRating;
    }

    /**
     * @return string
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * @param string $genres
     */
    public function setGenres($genres)
    {
        $this->genres = $genres;
    }

    /**
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param string $network
     */
    public function setNetwork($network)
    {
        $this->network = $network;
    }

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param string $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return int
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * @param int $ratingCount
     */
    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;
    }

    /**
     * @return int
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * @param int $runtime
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return DateTime
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @param string $added
     */
    public function setAdded($added)
    {
        $this->added = $added;
    }

    /**
     * @return int
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * @param int $addedBy
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;
    }

    /**
     * @return string
     */
    public function getFanArt()
    {
        return $this->fanArt;
    }

    /**
     * @param string $fanArt
     */
    public function setFanArt($fanArt)
    {
        $this->fanArt = $fanArt;
    }

    /**
     * @return DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * @param DateTime $lastUpdated
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
    }

    /**
     * @return string
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * @param string $poster
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;
    }

    /**
     * @return string
     */
    public function getZap2ItId()
    {
        return $this->zap2ItId;
    }

    /**
     * @param string $zap2ItId
     */
    public function setZap2ItId($zap2ItId)
    {
        $this->zap2ItId = $zap2ItId;
    }

    /**
     * Takes data from an AxTvDbSerie object and s
     * @param Serie $data
     * @return Serie $this
     */
    public function populate($data){
        $this->setId($data->getId());
        $this->setLanguage($data->getLanguage());
        $this->setName($data->getName());
        $this->setBanner($data->getBanner());
        $this->setOverview($data->getOverview());
        $this->setFirstAired($data->getFirstAired()->getTimestamp());
        $this->setImdbId($data->getImdbId());
        $this->setActors(implode("|", $data->getActors()));
        $this->setAirsDayOfWeek($data->getAirsDayOfWeek());
        $this->setAirsTime($data->getAirsTime());
        $this->setContentRating($data->getContentRating());
        $this->setGenres(implode("|", $data->getGenres()));
        $this->setNetwork($data->getNetwork());
        $this->setRating($data->getRating());
        $this->setRatingCount($data->getRatingCount());
        $this->setRuntime($data->getRuntime());
        $this->setStatus($data->getStatus());
        $this->setAdded($data->getAdded()->getTimestamp());
        $this->setAddedBy($data->getAddedBy());
        $this->setFanArt($data->getFanArt());
        $this->setLastUpdated($data->getLastUpdated()->getTimestamp());
        $this->setPoster($data->getPoster());
        $this->setZap2ItId($data->getZap2ItId());

        return $this;
    }
}
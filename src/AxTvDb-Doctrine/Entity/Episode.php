<?php

namespace AxTvDbDoctrine\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * An Episode.
 *
 * @ORM\Entity
 * @ORM\Table(name="AxTvDbDoctrineEpisode")
 */
class Episode
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", unique=true)
     */
    protected $id;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $number;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $season;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $directors;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $guestStars;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $writers;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var int
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
     * @ORM\Column(type="string")
     */
    protected $language;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $overview;

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
    protected $lastUpdated;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $seasonId;

    /**
     * @ORM\ManyToOne(targetEntity="AxTvDbDoctrine\Entity\Serie")
     * @ORM\JoinColumn(name="serieId", referencedColumnName="id")
     */
    protected $serieId;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $thumbnail;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $dvdChapter;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $dvdDiscId;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $dvdEpisodeNumber;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $dvdSeason;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $productionCode;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $absoluteNumber;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $airsAfterSeason = '';

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $airsBeforeEpisode = '';

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $airsBeforeSeason = '';

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
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param int $season
     */
    public function setSeason($season)
    {
        $this->season = $season;
    }

    /**
     * @return string
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param string $directors
     */
    public function setDirectors($directors)
    {
        $this->directors = $directors;
    }

    /**
     * @return string
     */
    public function getGuestStars()
    {
        return $this->guestStars;
    }

    /**
     * @param string $guestStars
     */
    public function setGuestStars($guestStars)
    {
        $this->guestStars = $guestStars;
    }

    /**
     * @return string
     */
    public function getWriters()
    {
        return $this->writers;
    }

    /**
     * @param string $writers
     */
    public function setWriters($writers)
    {
        $this->writers = $writers;
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
     * @return int
     */
    public function getFirstAired()
    {
        return $this->firstAired;
    }

    /**
     * @param int $firstAired
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
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * @param int $lastUpdated
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
    }

    /**
     * @return int
     */
    public function getSeasonId()
    {
        return $this->seasonId;
    }

    /**
     * @param int $seasonId
     */
    public function setSeasonId($seasonId)
    {
        $this->seasonId = $seasonId;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSerieId()
    {
        return $this->serieId;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $serieId
     */
    public function setSerieId($serieId)
    {
        $this->serieId = $serieId;
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return int
     */
    public function getDvdChapter()
    {
        return $this->dvdChapter;
    }

    /**
     * @param int $dvdChapter
     */
    public function setDvdChapter($dvdChapter)
    {
        $this->dvdChapter = $dvdChapter;
    }

    /**
     * @return int
     */
    public function getDvdDiscId()
    {
        return $this->dvdDiscId;
    }

    /**
     * @param int $dvdDiscId
     */
    public function setDvdDiscId($dvdDiscId)
    {
        $this->dvdDiscId = $dvdDiscId;
    }

    /**
     * @return int
     */
    public function getDvdEpisodeNumber()
    {
        return $this->dvdEpisodeNumber;
    }

    /**
     * @param int $dvdEpisodeNumber
     */
    public function setDvdEpisodeNumber($dvdEpisodeNumber)
    {
        $this->dvdEpisodeNumber = $dvdEpisodeNumber;
    }

    /**
     * @return int
     */
    public function getDvdSeason()
    {
        return $this->dvdSeason;
    }

    /**
     * @param int $dvdSeason
     */
    public function setDvdSeason($dvdSeason)
    {
        $this->dvdSeason = $dvdSeason;
    }

    /**
     * @return string
     */
    public function getProductionCode()
    {
        return $this->productionCode;
    }

    /**
     * @param string $productionCode
     */
    public function setProductionCode($productionCode)
    {
        $this->productionCode = $productionCode;
    }

    /**
     * @return int
     */
    public function getAbsoluteNumber()
    {
        return $this->absoluteNumber;
    }

    /**
     * @param int $absoluteNumber
     */
    public function setAbsoluteNumber($absoluteNumber)
    {
        $this->absoluteNumber = $absoluteNumber;
    }

    /**
     * @return int
     */
    public function getAirsAfterSeason()
    {
        return $this->airsAfterSeason;
    }

    /**
     * @param int $airsAfterSeason
     */
    public function setAirsAfterSeason($airsAfterSeason)
    {
        $this->airsAfterSeason = $airsAfterSeason;
    }

    /**
     * @return int
     */
    public function getAirsBeforeEpisode()
    {
        return $this->airsBeforeEpisode;
    }

    /**
     * @param int $airsBeforeEpisode
     */
    public function setAirsBeforeEpisode($airsBeforeEpisode)
    {
        $this->airsBeforeEpisode = $airsBeforeEpisode;
    }

    /**
     * @return int
     */
    public function getAirsBeforeSeason()
    {
        return $this->airsBeforeSeason;
    }

    /**
     * @param int $airsBeforeSeason
     */
    public function setAirsBeforeSeason($airsBeforeSeason)
    {
        $this->airsBeforeSeason = $airsBeforeSeason;
    }
}
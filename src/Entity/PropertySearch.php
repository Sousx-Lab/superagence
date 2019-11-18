<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

class PropertySearch
{
    /**
     * Search by max Price in Property
     * @var int|null
     */
    private $maxPrice;

    /**
     * Search by min Surface in Property
     * @var int|null
     * @Assert\Range(min=10, max=400)
     */
    private $minSurface;

    /**
     * Search by options
     * @var ArrayCollection
     */
    private $options;

    /**
     * @var integer|null
     */
    private $distance;

    /**
     * @var float|null
     */
    private $lat;

    /**
     * @var float|null
     */ 
    private $lng;

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    /**
     * Get search by max Price in Property
     *
     * @return int|null
     */ 
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * Set search by max Price in Property
     *
     * @param int|null  $maxPrice  Search by max Price in Property
     *
     * @return self
     */ 
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Get search by min Surface in Property
     *
     * @return int|null
     */ 
    public function getMinSurface()
    {
        return $this->minSurface;
    }

    /**
     * Set search by min Surface in Property
     *
     * @param int|null  $minSurface  Search by min Surface in Property
     *
     * @return self
     */ 
    public function setMinSurface(int $minSurface): PropertySearch
    {
        $this->minSurface = $minSurface;

        return $this;
    }

    /**
     * Get search by options
     *
     * @return ArrayCollection
     */ 
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set search by options
     *
     * @param ArrayCollection  $options  Search by options
     *
     * @return self
     */ 
    public function setOptions(ArrayCollection $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get the value of distance
     *
     * @return integer|null
     */ 
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set the value of distance
     *
     * @param integer|null $distance
     *
     * @return self
     */ 
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get the value of lat
     * @return float|null
     */ 
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set the value of lat
     * @param float|null $lat
     * @return self
     */ 
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get the value of lng
     */ 
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set the value of lng
     * @param float|null $lng
     * @return self
     */ 
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }
}
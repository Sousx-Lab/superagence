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

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    /**
     * Get search by max Price in Property
     *
     * @return  int|null
     */ 
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * Set search by max Price in Property
     *
     * @param  int|null  $maxPrice  Search by max Price in Property
     *
     * @return  self
     */ 
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Get search by min Surface in Property
     *
     * @return  int|null
     */ 
    public function getMinSurface()
    {
        return $this->minSurface;
    }

    /**
     * Set search by min Surface in Property
     *
     * @param  int|null  $minSurface  Search by min Surface in Property
     *
     * @return  self
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
     * @return  self
     */ 
    public function setOptions(ArrayCollection $options)
    {
        $this->options = $options;

        return $this;
    }
}
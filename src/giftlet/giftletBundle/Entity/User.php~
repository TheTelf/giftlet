<?php

namespace giftlet\giftletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $handle;

    /**
     * @var \DateTime
     */
    private $createddate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $gifts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contributions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gifts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contributions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set handle
     *
     * @param string $handle
     * @return User
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
    
        return $this;
    }

    /**
     * Get handle
     *
     * @return string 
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * Set createddate
     *
     * @param \DateTime $createddate
     * @return User
     */
    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;
    
        return $this;
    }

    /**
     * Get createddate
     *
     * @return \DateTime 
     */
    public function getCreateddate()
    {
        return $this->createddate;
    }

    /**
     * Add gifts
     *
     * @param \giftlet\giftletBundle\Entity\Gift $gifts
     * @return User
     */
    public function addGift(\giftlet\giftletBundle\Entity\Gift $gifts)
    {
        $this->gifts[] = $gifts;
    
        return $this;
    }

    /**
     * Remove gifts
     *
     * @param \giftlet\giftletBundle\Entity\Gift $gifts
     */
    public function removeGift(\giftlet\giftletBundle\Entity\Gift $gifts)
    {
        $this->gifts->removeElement($gifts);
    }

    /**
     * Get gifts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGifts()
    {
        return $this->gifts;
    }

    /**
     * Add contributions
     *
     * @param \giftlet\giftletBundle\Entity\Contribution $contributions
     * @return User
     */
    public function addContribution(\giftlet\giftletBundle\Entity\Contribution $contributions)
    {
        $this->contributions[] = $contributions;
    
        return $this;
    }

    /**
     * Remove contributions
     *
     * @param \giftlet\giftletBundle\Entity\Contribution $contributions
     */
    public function removeContribution(\giftlet\giftletBundle\Entity\Contribution $contributions)
    {
        $this->contributions->removeElement($contributions);
    }

    /**
     * Get contributions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContributions()
    {
        return $this->contributions;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedDateValue()
    {
        $this->createddate = new \DateTime();
    }

    public function __toString()
    {
        return $this->getHandle();
    }
}
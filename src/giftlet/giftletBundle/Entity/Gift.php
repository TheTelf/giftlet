<?php

namespace giftlet\giftletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gift
 */
class Gift
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $createddate;

    /**
     * @var integer
     */
    private $createdby;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contributions;

    /**
     * @var \giftlet\giftletBundle\Entity\User
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set title
     *
     * @param string $title
     * @return Gift
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set createddate
     *
     * @param \DateTime $createddate
     * @return Gift
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
     * Set createdby
     *
     * @param integer $createdby
     * @return Gift
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;
    
        return $this;
    }

    /**
     * Get createdby
     *
     * @return integer 
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * Add contributions
     *
     * @param \giftlet\giftletBundle\Entity\Contribution $contributions
     * @return Gift
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
     * Set users
     *
     * @param \giftlet\giftletBundle\Entity\User $users
     * @return Gift
     */
    public function setUsers(\giftlet\giftletBundle\Entity\User $users = null)
    {
        $this->users = $users;
    
        return $this;
    }

    /**
     * Get users
     *
     * @return \giftlet\giftletBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @var float
     */
    private $cost;


    /**
     * Set cost
     *
     * @param float $cost
     * @return Gift
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    
        return $this;
    }

    /**
     * Get cost
     *
     * @return float 
     */
    public function getCost()
    {
        return $this->cost;
    }
    /**
     * @var integer
     */
    private $createdby_test;


    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $link;


    /**
     * Set description
     *
     * @param string $description
     * @return Gift
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Gift
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
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
        return $this->getTitle();
    }


    public function getContributionTotal()
    {
        $total = 0;

        foreach ($this->getContributions() as $contribution)
        {
            $total += $contribution->getAmount();
        }

        return $total;
    }
}
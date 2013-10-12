<?php

namespace giftlet\giftletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contribution
 */
class Contribution
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $user;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var integer
     */
    private $gift;

    /**
     * @var \DateTime
     */
    private $createddate;

    /**
     * @var \giftlet\giftletBundle\Entity\Gift
     */
    private $gifts;

    /**
     * @var \giftlet\giftletBundle\Entity\User
     */
    private $users;


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
     * Set user
     *
     * @param integer $user
     * @return Contribution
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Contribution
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set gift
     *
     * @param integer $gift
     * @return Contribution
     */
    public function setGift($gift)
    {
        $this->gift = $gift;
    
        return $this;
    }

    /**
     * Get gift
     *
     * @return integer 
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * Set createddate
     *
     * @param \DateTime $createddate
     * @return Contribution
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
     * Set gifts
     *
     * @param \giftlet\giftletBundle\Entity\Gift $gifts
     * @return Contribution
     */
    public function setGifts(\giftlet\giftletBundle\Entity\Gift $gifts = null)
    {
        $this->gifts = $gifts;
    
        return $this;
    }

    /**
     * Get gifts
     *
     * @return \giftlet\giftletBundle\Entity\Gift 
     */
    public function getGifts()
    {
        return $this->gifts;
    }

    /**
     * Set users
     *
     * @param \giftlet\giftletBundle\Entity\User $users
     * @return Contribution
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
     * @ORM\PrePersist
     */
    public function setCreatedDateValue()
    {
        $this->createddate = new \DateTime();
    }
}
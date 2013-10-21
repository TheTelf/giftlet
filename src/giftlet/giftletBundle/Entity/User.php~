<?php

namespace giftlet\giftletBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

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
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $salt;

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
        return $this->getUsername();
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Required for UserInterface. Very few roles required: 99% of the time the user will just be a user.
     * @return array|\Symfony\Component\Security\Core\Role\Role[]
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * Required for UserInterface.
     */
    public function eraseCredentials()
    {
        return;
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            ) = unserialize($serialized);
    }
    /**
     * @var string
     */
    private $email;


    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
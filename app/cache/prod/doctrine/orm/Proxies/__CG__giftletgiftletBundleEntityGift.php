<?php

namespace Proxies\__CG__\giftlet\giftletBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Gift extends \giftlet\giftletBundle\Entity\Gift implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setCreateddate($createddate)
    {
        $this->__load();
        return parent::setCreateddate($createddate);
    }

    public function getCreateddate()
    {
        $this->__load();
        return parent::getCreateddate();
    }

    public function setCreatedby($createdby)
    {
        $this->__load();
        return parent::setCreatedby($createdby);
    }

    public function getCreatedby()
    {
        $this->__load();
        return parent::getCreatedby();
    }

    public function addContribution(\giftlet\giftletBundle\Entity\Contribution $contributions)
    {
        $this->__load();
        return parent::addContribution($contributions);
    }

    public function removeContribution(\giftlet\giftletBundle\Entity\Contribution $contributions)
    {
        $this->__load();
        return parent::removeContribution($contributions);
    }

    public function getContributions()
    {
        $this->__load();
        return parent::getContributions();
    }

    public function setUsers(\giftlet\giftletBundle\Entity\User $users = NULL)
    {
        $this->__load();
        return parent::setUsers($users);
    }

    public function getUsers()
    {
        $this->__load();
        return parent::getUsers();
    }

    public function setCost($cost)
    {
        $this->__load();
        return parent::setCost($cost);
    }

    public function getCost()
    {
        $this->__load();
        return parent::getCost();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setLink($link)
    {
        $this->__load();
        return parent::setLink($link);
    }

    public function getLink()
    {
        $this->__load();
        return parent::getLink();
    }

    public function setCreatedDateValue()
    {
        $this->__load();
        return parent::setCreatedDateValue();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getContributionTotal()
    {
        $this->__load();
        return parent::getContributionTotal();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'title', 'description', 'link', 'cost', 'createddate', 'contributions', 'createdby');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}
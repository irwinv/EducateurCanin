<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PatrickElevageBundleEntityImagesConcoursProxy extends \Patrick\ElevageBundle\Entity\ImagesConcours implements \Doctrine\ORM\Proxy\Proxy
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
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setImg($img)
    {
        $this->__load();
        return parent::setImg($img);
    }

    public function getImg()
    {
        $this->__load();
        return parent::getImg();
    }

    public function setThumb($thumb)
    {
        $this->__load();
        return parent::setThumb($thumb);
    }

    public function getThumb()
    {
        $this->__load();
        return parent::getThumb();
    }

    public function setConcour(\Patrick\ElevageBundle\Entity\Concours $concour)
    {
        $this->__load();
        return parent::setConcour($concour);
    }

    public function getConcour()
    {
        $this->__load();
        return parent::getConcour();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'img', 'thumb', 'concour');
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
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}
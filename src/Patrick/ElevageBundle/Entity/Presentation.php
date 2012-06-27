<?php

namespace Patrick\ElevageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patrick\ElevageBundle\Entity\Presentation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Presentation
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var text $presentation
     *
     * @ORM\Column(name="presentation", type="text")
     */
    private $presentation;


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
     * Set presentation
     *
     * @param text $presentation
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }

    /**
     * Get presentation
     *
     * @return text 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
}
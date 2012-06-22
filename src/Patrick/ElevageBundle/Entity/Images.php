<?php

namespace Patrick\ElevageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patrick\ElevageBundle\Entity\Images
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Images
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
     * @var string $img
     *
     * @ORM\Column(name="img", type="string", length=255)
     */
    private $img;

    /**
     * @var string $thumb
     *
     * @ORM\Column(name="thumb", type="string", length=255, nullable=true)
     */
    private $thumb;

	/**
     * @var string $chien
     *
     * @ORM\ManyToOne(targetEntity="Chiens", inversedBy="img", cascade={"all"})
     * @ORM\JoinColumn(name="chien_id", referencedColumnName="id")
     */
    private $chien;

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
     * Set img
     *
     * @param string $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set thumb
     *
     * @param string $thumb
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    }

    /**
     * Get thumb
     *
     * @return string
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set chien
     *
     * @param Patrick\ElevageBundle\Entity\Chiens $chien
     */
    public function setChien(\Patrick\ElevageBundle\Entity\Chiens $chien)
    {
        $this->chien = $chien;
    }

    /**
     * Get chien
     *
     * @return Patrick\ElevageBundle\Entity\Chiens
     */
    public function getChien()
    {
        return $this->chien;
    }
}
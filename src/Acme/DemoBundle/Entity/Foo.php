<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foo
 *
 * @ORM\Table(name="foo")
 * @ORM\Entity
 */
class Foo
{
    
	  /**
     * @var string
     *
     * @ORM\Column(name="foobar2", type="string", length=250, nullable=false)
     */
    private $foobar2;
	/**
	 
	 /**
     * @var string
     *
     * @ORM\Column(name="foobar", type="string", length=250, nullable=false)
     */
    private $foobar;
	/**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=250, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=250, nullable=false)
     */
    private $apellidos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="index", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $index;



    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Foo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Foo
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Foo
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set foobar
     *
     * @param string $foobar
     * @return Foo
     */
    public function setFoobar($foobar)
    {
        $this->foobar = $foobar;
    
        return $this;
    }

    /**
     * Get foobar
     *
     * @return string 
     */
    public function getFoobar()
    {
        return $this->foobar;
    }

    /**
     * Get index
     *
     * @return integer 
     */
    public function getIndex()
    {
        return $this->index;
    }
}
<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foo
 *
 * @ORM\Table(name="bar")
 * @ORM\Entity
 */
class Bar
{
    
	/**
     * @var string
     *
     * @ORM\Column(name="barfoo2", type="string", length=250, nullable=false)
     */
    private $barfoo2;
	
	/**
     * @var string
     *
     * @ORM\Column(name="barfoo", type="string", length=250, nullable=false)
     */
    private $barfoo;
	
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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

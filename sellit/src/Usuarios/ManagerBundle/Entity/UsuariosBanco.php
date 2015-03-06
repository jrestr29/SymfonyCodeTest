<?php

namespace Usuarios\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuariosBanco
 */
class UsuariosBanco
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreBanco;

    /**
     * @var string
     */
    private $nombreTitular;

    /**
     * @var string
     */
    private $tipoCuenta;

    /**
     * @var string
     */
    private $numeroCuenta;

    /**
     * @var string
     */
    private $ciudadTitular;

    /**
     * @var \Usuarios\ManagerBundle\Entity\Usuarios
     */
    private $idusuario;


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
     * Set nombreBanco
     *
     * @param string $nombreBanco
     * @return UsuariosBanco
     */
    public function setNombreBanco($nombreBanco)
    {
        $this->nombreBanco = $nombreBanco;

        return $this;
    }

    /**
     * Get nombreBanco
     *
     * @return string 
     */
    public function getNombreBanco()
    {
        return $this->nombreBanco;
    }

    /**
     * Set nombreTitular
     *
     * @param string $nombreTitular
     * @return UsuariosBanco
     */
    public function setNombreTitular($nombreTitular)
    {
        $this->nombreTitular = $nombreTitular;

        return $this;
    }

    /**
     * Get nombreTitular
     *
     * @return string 
     */
    public function getNombreTitular()
    {
        return $this->nombreTitular;
    }

    /**
     * Set tipoCuenta
     *
     * @param string $tipoCuenta
     * @return UsuariosBanco
     */
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;

        return $this;
    }

    /**
     * Get tipoCuenta
     *
     * @return string 
     */
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    /**
     * Set numeroCuenta
     *
     * @param string $numeroCuenta
     * @return UsuariosBanco
     */
    public function setNumeroCuenta($numeroCuenta)
    {
        $this->numeroCuenta = $numeroCuenta;

        return $this;
    }

    /**
     * Get numeroCuenta
     *
     * @return string 
     */
    public function getNumeroCuenta()
    {
        return $this->numeroCuenta;
    }

    /**
     * Set ciudadTitular
     *
     * @param string $ciudadTitular
     * @return UsuariosBanco
     */
    public function setCiudadTitular($ciudadTitular)
    {
        $this->ciudadTitular = $ciudadTitular;

        return $this;
    }

    /**
     * Get ciudadTitular
     *
     * @return string 
     */
    public function getCiudadTitular()
    {
        return $this->ciudadTitular;
    }

    /**
     * Set idusuario
     *
     * @param \Usuarios\ManagerBundle\Entity\Usuarios $idusuario
     * @return UsuariosBanco
     */
    public function setIdusuario(\Usuarios\ManagerBundle\Entity\Usuarios $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \Usuarios\ManagerBundle\Entity\Usuarios 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
    /**
     * @var string
     */
    private $informacionExtra;


    /**
     * Set informacionExtra
     *
     * @param string $informacionExtra
     * @return UsuariosBanco
     */
    public function setInformacionExtra($informacionExtra)
    {
        $this->informacionExtra = $informacionExtra;

        return $this;
    }

    /**
     * Get informacionExtra
     *
     * @return string 
     */
    public function getInformacionExtra()
    {
        return $this->informacionExtra;
    }
}

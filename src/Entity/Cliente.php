<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
class Cliente
{


    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="codigo_cliente_pk", type="integer", unique=true)
     */
    private $codigoClientePk;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=11, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=255, nullable=true)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_comercial", type="string", length=255, nullable=true)
     */
    private $nombreComercial;

    /**
     *
     * @ORM\OneToMany(targetEntity="Llamada", mappedBy="clienteRel")
     */

    public function getCodigoClientePk()
    {
        return $this->codigoClientePk;
    }

    /**
     * Set nit
     *
     * @param string $nit
     *
     * @return Cliente
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set razonSocial
     *
     * @param string $razonSocial
     *
     * @return Cliente
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set nombreComercial
     *
     * @param string $nombreComercial
     *
     * @return Cliente
     */
    public function setNombreComercial($nombreComercial)
    {
        $this->nombreComercial = $nombreComercial;

        return $this;
    }

    /**
     * Get nombreComercial
     *
     * @return string
     */
    public function getNombreComercial()
    {
        return $this->nombreComercial;
    }

}


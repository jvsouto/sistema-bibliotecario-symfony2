<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\person
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\UserBundle\Entity\personRepository")
 */
class person
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $apellido_paterno
     *
     * @ORM\Column(name="apellido_paterno", type="string", length=255)
     */
    private $apellido_paterno;

    /**
     * @var string $apellido_materno
     *
     * @ORM\Column(name="apellido_materno", type="string", length=255)
     */
    private $apellido_materno;

    /**
     * @var date $fecha_nacimiento
     *
     * @ORM\Column(name="fecha_nacimiento", type="date")
     */
    private $fecha_nacimiento;

    /**
     * @var string $ocupacion
     *
     * @ORM\Column(name="ocupacion", type="string", length=255, nullable=true)
     */
    private $ocupacion;

    /**
     * @var string $escuela
     *
     * @ORM\Column(name="escuela", type="string", length=255, nullable=true)
     */
    private $escuela;

    /**
     * @var string $periodo_escolar
     *
     * @ORM\Column(name="periodo_escolar", type="string", length=255, nullable=true)
     */
    private $periodo_escolar;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $status
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string $clave
     *
     * @ORM\Column(name="clave", type="string", length=255)
     */
    private $clave;

    /**
     * @var date $fecha_registro
     *
     * @ORM\Column(name="fecha_registro", type="date")
     */
    private $fecha_registro;

    /**
     * @var string $foto
     *
     * @ORM\Column(name="foto", type="string", length=255, nullable=true)
     */
    private $foto;

    /**
     * @var string $comentario
     *
     * @ORM\Column(name="comentario", type="string", length=510, nullable=true)
     */
    private $comentario;

    /**
     * 
     * @ORM\OneToMany(targetEntity="Record", mappedBy="person_id")
     */
    private $record;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection() $RecordMaterial
     * @ORM\OneToMany(targetEntity="RecordMaterial", mappedBy="person_id")
     */
    private $RecordMaterial;

    /**
     * 
     * @ORM\OneToOne(targetEntity="Phone", mappedBy="persona")
     */
    /*private $telefono;*/

    /**
     * @var string $telefono
     * @ORM\ManyToOne(targetEntity="Phone", inversedBy="person")
     * @ORM\JoinColumn(name="telefono", referencedColumnName="id", nullable=true)
     * @return integer
     */
    private $telefono;

    /**
     * @var string $address_id
     * @ORM\ManyToOne(targetEntity="Address", inversedBy="person")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id", nullable=true)
     * @return integer
     */
    private $address_id;

    
    public function __construct()
    {
        $this->record = new \Doctrine\Common\Collections\ArrayCollection();
        $this->RecordMaterial = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return "$this->nombre $this->apellido_paterno $this->apellido_materno";
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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * Set apellido_paterno
     *
     * @param string $apellidoPaterno
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellido_paterno = $apellidoPaterno;
    }

    /**
     * Get apellido_paterno
     *
     * @return string 
     */
    public function getApellidoPaterno()
    {
        return $this->apellido_paterno;
    }

    /**
     * Set apellido_materno
     *
     * @param string $apellidoMaterno
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellido_materno = $apellidoMaterno;
    }

    /**
     * Get apellido_materno
     *
     * @return string 
     */
    public function getApellidoMaterno()
    {
        return $this->apellido_materno;
    }

    /**
     * Set fecha_nacimiento
     *
     * @param date $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fecha_nacimiento = $fechaNacimiento;
    }

    /**
     * Get fecha_nacimiento
     *
     * @return date 
     */
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Set ocupacion
     *
     * @param string $ocupacion
     */
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;
    }

    /**
     * Get ocupacion
     *
     * @return string 
     */
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /**
     * Set escuela
     *
     * @param string $escuela
     */
    public function setEscuela($escuela)
    {
        $this->escuela = $escuela;
    }

    /**
     * Get escuela
     *
     * @return string 
     */
    public function getEscuela()
    {
        return $this->escuela;
    }

    /**
     * Set periodo_escolar
     *
     * @param string $periodoEscolar
     */
    public function setPeriodoEscolar($periodoEscolar)
    {
        $this->periodo_escolar = $periodoEscolar;
    }

    /**
     * Get periodo_escolar
     *
     * @return string 
     */
    public function getPeriodoEscolar()
    {
        return $this->periodo_escolar;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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

    /**
     * Set status
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set clave
     *
     * @param string $clave
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set foto
     *
     * @param string $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Add record
     *
     * @param Acme\UserBundle\Entity\Record $record
     */
    public function addRecord(\Acme\UserBundle\Entity\Record $record)
    {
        $this->record[] = $record;
    }

    /**
     * Get record
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Set telefono
     *
     * @param Acme\UserBundle\Entity\Phone $telefono
     */
    public function setTelefono(\Acme\UserBundle\Entity\Phone $telefono)
    {
        if($telefono instanceof \Acme\UserBundle\Entity\Phone) {
            $this->telefono = $telefono;
        } else {
            $tel = new \Acme\UserBundle\Entity\Phone ($telefono);
            $this->telefono = $tel;
        }
        
    }

    /**
     * Get telefono
     *
     * @return Acme\UserBundle\Entity\Phone 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    
    
    /**
     * Add RecordMaterial
     *
     * @param Acme\UserBundle\Entity\RecordMaterial $recordMaterial
     */
    public function addRecordMaterial(\Acme\UserBundle\Entity\RecordMaterial $recordMaterial)
    {
        $this->RecordMaterial[] = $recordMaterial;
    }

    /**
     * Get RecordMaterial
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRecordMaterial()
    {
        return $this->RecordMaterial;
    }

    /**
     * Set address_id
     *
     * @param Acme\UserBundle\Entity\Address $addressId
     */
    public function setAddressId(\Acme\UserBundle\Entity\Address $addressId)
    {
        $this->address_id = $addressId;
    }

    /**
     * Get address_id
     *
     * @return Acme\UserBundle\Entity\Address 
     */
    public function getAddressId()
    {
        return $this->address_id;
    }

    
}
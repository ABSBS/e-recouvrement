<?php

namespace Recover\ErecoverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Recover\ErecoverBundle\Entity\SocieteRepository")
 */
class Societe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="raisoc", type="string", length=255)
     */
    private $raisoc;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string", length=30)
     */
    private $siteweb;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var integer
     *
     * @ORM\Column(name="capital", type="integer")
     */
    private $capital;

    /**
     * @var string
     *
     * @ORM\Column(name="rc", type="string", length=255)
     */
    private $rc;

    /**
     * @var string
     *
     * @ORM\Column(name="ninea", type="string", length=255)
     */
    private $ninea;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=30)
     */
    private $pays;


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
     * Set raisoc
     *
     * @param string $raisoc
     * @return Societe
     */
    public function setRaisoc($raisoc)
    {
        $this->raisoc = $raisoc;

        return $this;
    }

    /**
     * Get raisoc
     *
     * @return string 
     */
    public function getRaisoc()
    {
        return $this->raisoc;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Societe
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Societe
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     * @return Societe
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string 
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Societe
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

    /**
     * Set fax
     *
     * @param string $fax
     * @return Societe
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set capital
     *
     * @param integer $capital
     * @return Societe
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return integer 
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set rc
     *
     * @param string $rc
     * @return Societe
     */
    public function setRc($rc)
    {
        $this->rc = $rc;

        return $this;
    }

    /**
     * Get rc
     *
     * @return string 
     */
    public function getRc()
    {
        return $this->rc;
    }

    /**
     * Set ninea
     *
     * @param string $ninea
     * @return Societe
     */
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;

        return $this;
    }

    /**
     * Get ninea
     *
     * @return string 
     */
    public function getNinea()
    {
        return $this->ninea;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Societe
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Societe
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }
    
    public function __toString()
    {
    	return $this->raisoc;
    }
}

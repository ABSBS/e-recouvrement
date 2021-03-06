<?php

namespace Recover\ErecoverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Recover\ErecoverBundle\Entity\ImageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Image
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
    
    /*  /**
     *
     * @ORM\ManyToOne(targetEntity="Recover\ErecoverBundle\Entity\Facture", inversedBy="images", cascade={"persist",})
     
     
    private $facture;
     */
    private $file;
    // On ajoute cet attribut pour y stocker le nom du fichier temporairement
    private $tempFilename;
 

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
     * Set url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Image
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set facture
     *
     * @param \Recover\ErecoverBundle\Entity\Facture $facture
     * @return Image
     */
    public function setFacture(\Recover\ErecoverBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \Recover\ErecoverBundle\Entity\Facture 
     */
    public function getFacture()
    {
        return $this->facture;
    }
 
    // On modifie le setter de File, pour prendre en compte l'upload d'un fichier lorsqu'il en existe déjà un autre
    public function setFile(UploadedFile $file)
    {
    	$this->file = $file;
    	// On vérifie si on avait déjà un fichier pour cette entité
    	if (null !== $this->url) {
    		// On sauvegarde l'extension du fichier pour le supprimer    		plus tard
    		$this->tempFilename = $this->url;
    		// On réinitialise les valeurs des attributs url et alt
    		$this->url = null;
    		$this->alt = null; 
    		$this->titre = null;
    	}
    }
    
    public function getFile()
    {
    	return $this->file;
    }
    
    /**
     * @ORM\PrePersist() 
     * @ORM\PreUpdate() 
     * 
     **/
    
    public function preUpload()
    { 
    	// Si jamais il n'y a pas de fichier (champ facultatif)
    	if (null === $this->file)
    	{
    	return;
    	 }
    	
    	// Le nom du fichier est son id, on doit juste stocker également son extension
    	// Pour faire propre, on devrait renommer cet attribut en « extension », plutôt que « url »
    	$this->url = $this->file->guessExtension();
    	// Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
    	$this->alt = $this->file->getClientOriginalName(); 
    	$this->titre = $this->file->getClientOriginalName(); 
    		
    }
    
    /**
 	* @ORM\PostPersist() 
 	* @ORM\PostUpdate() 
    **/
    public function upload()
    	{
    		
    		if (null === $this->file)
    		{
    			return; 
    		}
    		// Si on avait un ancien fichier, on le supprime
    		if (null !== $this->tempFilename) {
    			$oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
    			if (file_exists($oldFile)) {
    						unlink($oldFile); }
    				}
    			// On déplace le fichier envoyé dans le répertoire de notre choix
    				$this->file->move($this->getUploadRootDir(), // Le répertoire de destination
    				$this->id.'.'.$this->url // le nom du fichier a creer ici « id.extension »
    				                  );
    	 }
    	 
    /**
     * @ORM\PreRemove()
   	 */
    public function preRemoveUpload()
    	 {
    	 	// On sauvegarde temporairement le nom du fichier, car il dépend de l'id
    	 	$this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
    	 }
     /**
      * @ORM\PostRemove()
      */
   public function removeUpload()
    	 {
    	 	// En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
    	 	if (file_exists($this->tempFilename)) { // On supprime le fichier
    	 		unlink($this->tempFilename); }
    	 }
    	 
/*     
    
    
    
    public function upload()
    {
    
    	if (null === $this->file){
    	return ;
   		 }
    	// On garde le nom original du fichier de l'internaute
    	$name = $this->file->getClientOriginalName();
    	// On déplace le fichier envoyé dans le répertoire de notre choix
    	$this->file->move($this->getUploadRootDir(), $name);
    	// On sauvegarde le nom de fichier dans notre attribut $url
    	$this->url = $name;
    	// On crée également le futur attribut alt de notre balise <img>
    	$this->alt = $name;
    	$this->titre = $name; 
    	
    } */

    public function getUploadDir()
    	{
    		// On retourne le chemin relatif vers l'image pour un navigateur
    		return 'uploads/img'; 
    	}
    protected function getUploadRootDir()
    		{
    			
    			// On retourne le chemin relatif vers l'image pour notre code PHP
    			// Si jamais il n'y a pas de fichier (champ facultatif)
    			return __DIR__.'/../../../../web/'.$this->getUploadDir();
    		}
    public function getWebPath()
    		{
    			return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl(); 
    		}
   
}

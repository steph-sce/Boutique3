<?php

namespace BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 * 
 * @ORM\Table(name="produit")
 * @ORM\Entity()
 */
class Produit
{
    /**
     * @ORM\Column(name="idProduit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idProduit;

    /**
     * @ORM\Column(name="reference", type="string", length=20)
     */
    private $reference;

    /**
     * @ORM\Column(name="categorie", type="string", length=20)
     */
    private $categorie;

    /**
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;

    /**
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\Column(name="couleur", type="string", length=20)
     */
    private $couleur;

    /**
     * @ORM\Column(name="taille", type="string", length=5)
     */
    private $taille;

    /**
     * @ORM\Column(name="public", type="string", length=5)
     */
    private $public;

    /**
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @ORM\Column(name="stock", type="integer", length=3)
     */
    private $stock;

    // idProduit
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    public function setIdProduit($arg)
    {
        $this->idProduit = $arg;
        return $this;
    }

    // reference
    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($arg)
    {
        $this->reference = $arg;
        return $this;
    }

    // categorie
    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($arg)
    {
        $this->idProduit = $arg;
        return $this;
    }

    // titre
    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($arg)
    {
        $this->titre = $arg;
        return $this;
    }

    // description
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($arg)
    {
        $this->description = $arg;
        return $this;
    }

    // couleur
    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($arg)
    {
        $this->couleur = $arg;
        return $this;
    }

    // taille
    public function getTaille()
    {
        return $this->taille;
    }

    public function setTaille($arg)
    {
        $this->taille = $arg;
        return $this;
    }

    // public
    public function getPublic()
    {
        return $this->public;
    }

    public function setPublic($arg)
    {
        $this->public = $arg;
        return $this;
    }

    // photo
    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($arg)
    {
        $this->photo = $arg;
        return $this;
    }

    // prix
    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($arg)
    {
        $this->prix = $arg;
        return $this;
    }

    // stock
    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($arg)
    {
        $this->stock = $arg;
        return $this;
    }
}

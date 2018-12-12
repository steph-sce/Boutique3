<?php

namespace BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="BoutiqueBundle\Repository\ProduitRepository")
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
    private $file; //cette propiété n'est pas mappé parce qu'elle n'a pas vocation à être enregistré

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

    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
        return $this;
    }

    // reference
    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    // categorie
    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }

    // titre
    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    // description
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    // couleur
    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
        return $this;
    }

    // taille
    public function getTaille()
    {
        return $this->taille;
    }

    public function setTaille($taille)
    {
        $this->taille = $taille;
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

    // file
    public function getFile()
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        return $this;
    }

    public function uploadPhoto()
    {
        $nom_photo = $this->file->getClientOriginalName();
        $new_nom_photo = $this->renameFile($nom_photo);
        $chemin_dir_photo = $this->dirPhoto();

        //1: enregistrer en BDD le $new_nom_photo
        $this->photo = $new_nom_photo;

        //2: Déplacer la photo dans son répertoire définitif
        $this->file->move($chemin_dir_photo, $new_nom_photo);
        //Move deplace la photo dna sle dossier indiqué en arg1, et la renomme selon l'arg2
    }

    public function renameFile($nom)
    {
        return 'photo_' . time() . '_' . rand(1, 9999) . '-' . $nom;
    }

    public function dirPhoto()
    {
        return __DIR__ . '/../../../web/photo/';
    }

    public function removePhoto()
    {
        $file = $this->dirPhoto() . $this->getPhoto();
        if ($file) {
            unlink($file);
        }
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

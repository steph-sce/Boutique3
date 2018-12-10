<?php

namespace BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetailsCommande
 *
 * @ORM\Table(name="details_commande")
 * @ORM\Entity(repositoryClass="BoutiqueBundle\Repository\DetailsCommandeRepository")
 */
class DetailsCommande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDetailsCommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddetailscommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCommande", type="integer", nullable=true)
     */
    private $idcommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="idProduit", type="integer", nullable=true)
     */
    private $idproduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;



    /**
     * Get iddetailscommande
     *
     * @return integer
     */
    public function getIddetailscommande()
    {
        return $this->iddetailscommande;
    }

    /**
     * Set idcommande
     *
     * @param integer $idcommande
     *
     * @return DetailsCommande
     */
    public function setIdcommande($idcommande)
    {
        $this->idcommande = $idcommande;

        return $this;
    }

    /**
     * Get idcommande
     *
     * @return integer
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * Set idproduit
     *
     * @param integer $idproduit
     *
     * @return DetailsCommande
     */
    public function setIdproduit($idproduit)
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    /**
     * Get idproduit
     *
     * @return integer
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return DetailsCommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return DetailsCommande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }
}

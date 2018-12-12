<?php

namespace BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BoutiqueBundle\Entity\Membre;

/**
 * Membre
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity()
 */
class Commande
{
    /**
     * Une commande a un seul membre, on dit qu'ici on est coté propiétaire
     * @ORM\ManyToOne(targetEntity="Membre", inversedBy="commandes")
     * @ORM\JoinColumn(name="idMembre", referencedColumnName="idMembre")
     */
    private $membre;

    public function getMembre()
    {
        return $this->membre;
    }

    public function setMembre(Membre $membre)
    {
        $this->membre = $membre;
        return $this;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="idCommande", type="integer", length=11, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMembre", type="integer", length=3, nullable=false)
     */
    private $idMembre;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", length=3, nullable=false)
     */
    private $montant;

    /**
     * @var datetime
     *
     * @ORM\Column(name="dateEnregistrement", type="datetime")
     */
    private $dateEnregistrement;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", length=1, nullable=false)
     */
    private $etat;

    /**
     * Get idCommande
     *
     * @return integer
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set idCommande
     *
     * @param string $idCommande
     *
     * @return Commande
     */
    public function setIdcommande($idCommande)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idMembre
     *
     * @return string
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set idMembre
     *
     * @param integer $idMembre
     *
     * @return Commande
     */
    public function setidMembre($idMembre)
    {
        $this->idMembre = $idMembre;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set montant
     *
     * @param string $montant
     *
     * @return Commande
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return datetime
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }

    /**
     * Set dateEnregistrement
     *
     * @param string $dateEnregistrement
     *
     * @return Commande
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get etat
     *
     * @return etat
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Commande
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
}

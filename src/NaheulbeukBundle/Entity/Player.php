<?php

namespace NaheulbeukBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="NaheulbeukBundle\Repository\PlayerRepository")
 */
class Player
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="sexe", type="integer")
     */
    private $sexe;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="race", type="integer")
     */
    private $race;

    /**
     * @var int
     *
     * @ORM\Column(name="classe", type="integer")
     */
    private $classe;

    /**
     * @var int
     *
     * @ORM\Column(name="xp", type="integer")
     */
    private $xp;

    /**
     * @var int
     *
     * @ORM\Column(name="destin", type="integer")
     */
    private $destin;

    /**
     * @var int
     *
     * @ORM\Column(name="chance", type="integer")
     */
    private $chance;

    /**
     * @var int
     *
     * @ORM\Column(name="gold", type="integer")
     */
    private $gold;

    /**
     * @var int
     *
     * @ORM\Column(name="pv", type="integer")
     */
    private $pv;

    /**
     * @var int
     *
     * @ORM\Column(name="pa", type="integer")
     */
    private $pa;

    /**
     * @var int
     *
     * @ORM\Column(name="courage", type="integer")
     */
    private $courage;

    /**
     * @var int
     *
     * @ORM\Column(name="intelligence", type="integer")
     */
    private $intelligence;

    /**
     * @var int
     *
     * @ORM\Column(name="charisme", type="integer")
     */
    private $charisme;

    /**
     * @var int
     *
     * @ORM\Column(name="adresse", type="integer")
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="fo", type="integer")
     */
    private $fo;

    /**
     * @var int
     *
     * @ORM\Column(name="attaque", type="integer")
     */
    private $attaque;

    /**
     * @var int
     *
     * @ORM\Column(name="parade", type="integer")
     */
    private $parade;

    /**
     * @var int
     *
     * @ORM\Column(name="pa_naturelle", type="integer")
     */
    private $paNaturelle;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Player
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sexe
     *
     * @param integer $sexe
     *
     * @return Player
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return int
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Player
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set race
     *
     * @param integer $race
     *
     * @return Player
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return int
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set classe
     *
     * @param integer $classe
     *
     * @return Player
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return int
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set xp
     *
     * @param integer $xp
     *
     * @return Player
     */
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get xp
     *
     * @return int
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set destin
     *
     * @param integer $destin
     *
     * @return Player
     */
    public function setDestin($destin)
    {
        $this->destin = $destin;

        return $this;
    }

    /**
     * Get destin
     *
     * @return int
     */
    public function getDestin()
    {
        return $this->destin;
    }

    /**
     * Set chance
     *
     * @param integer $chance
     *
     * @return Player
     */
    public function setChance($chance)
    {
        $this->chance = $chance;

        return $this;
    }

    /**
     * Get chance
     *
     * @return int
     */
    public function getChance()
    {
        return $this->chance;
    }

    /**
     * Set gold
     *
     * @param integer $gold
     *
     * @return Player
     */
    public function setGold($gold)
    {
        $this->gold = $gold;

        return $this;
    }

    /**
     * Get gold
     *
     * @return int
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * Set pv
     *
     * @param integer $pv
     *
     * @return Player
     */
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get pv
     *
     * @return int
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set pa
     *
     * @param integer $pa
     *
     * @return Player
     */
    public function setPa($pa)
    {
        $this->pa = $pa;

        return $this;
    }

    /**
     * Get pa
     *
     * @return int
     */
    public function getPa()
    {
        return $this->pa;
    }

    /**
     * Set courage
     *
     * @param integer $courage
     *
     * @return Player
     */
    public function setCourage($courage)
    {
        $this->courage = $courage;

        return $this;
    }

    /**
     * Get courage
     *
     * @return int
     */
    public function getCourage()
    {
        return $this->courage;
    }

    /**
     * Set intelligence
     *
     * @param integer $intelligence
     *
     * @return Player
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get intelligence
     *
     * @return int
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set charisme
     *
     * @param integer $charisme
     *
     * @return Player
     */
    public function setCharisme($charisme)
    {
        $this->charisme = $charisme;

        return $this;
    }

    /**
     * Get charisme
     *
     * @return int
     */
    public function getCharisme()
    {
        return $this->charisme;
    }

    /**
     * Set adresse
     *
     * @param integer $adresse
     *
     * @return Player
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return int
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set fo
     *
     * @param integer $fo
     *
     * @return Player
     */
    public function setFo($fo)
    {
        $this->fo = $fo;

        return $this;
    }

    /**
     * Get fo
     *
     * @return int
     */
    public function getFo()
    {
        return $this->fo;
    }

    /**
     * Set attaque
     *
     * @param integer $attaque
     *
     * @return Player
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get attaque
     *
     * @return int
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set parade
     *
     * @param integer $parade
     *
     * @return Player
     */
    public function setParade($parade)
    {
        $this->parade = $parade;

        return $this;
    }

    /**
     * Get parade
     *
     * @return int
     */
    public function getParade()
    {
        return $this->parade;
    }

    /**
     * Set paNaturelle
     *
     * @param integer $paNaturelle
     *
     * @return Player
     */
    public function setPaNaturelle($paNaturelle)
    {
        $this->paNaturelle = $paNaturelle;

        return $this;
    }

    /**
     * Get paNaturelle
     *
     * @return int
     */
    public function getPaNaturelle()
    {
        return $this->paNaturelle;
    }
}


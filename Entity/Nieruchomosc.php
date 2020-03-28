<?php

namespace Entity;

/**
 * Nieruchomosc
 */
class Nieruchomosc
{
    /**
     * @var string
     */
    private $typ_oferty;

    /**
     * @var float
     */
    private $powierzchnia;

    /**
     * @var float
     */
    private $cena;

    /**
     * @var float
     */
    private $cena_m2;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Entity\Mieszkanie
     */
    private $mieszkanie;

    /**
     * @var \Entity\Miasto
     */
    private $miasto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $opcjekomunikacji;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->opcjekomunikacji = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set typOferty.
     *
     * @param string $typOferty
     *
     * @return Nieruchomosc
     */
    public function setTypOferty($typOferty)
    {
        $this->typ_oferty = $typOferty;

        return $this;
    }

    /**
     * Get typOferty.
     *
     * @return string
     */
    public function getTypOferty()
    {
        return $this->typ_oferty;
    }

    /**
     * Set powierzchnia.
     *
     * @param float $powierzchnia
     *
     * @return Nieruchomosc
     */
    public function setPowierzchnia($powierzchnia)
    {
        $this->powierzchnia = $powierzchnia;

        return $this;
    }

    /**
     * Get powierzchnia.
     *
     * @return float
     */
    public function getPowierzchnia()
    {
        return $this->powierzchnia;
    }

    /**
     * Set cena.
     *
     * @param float $cena
     *
     * @return Nieruchomosc
     */
    public function setCena($cena)
    {
        $this->cena = $cena;

        return $this;
    }

    /**
     * Get cena.
     *
     * @return float
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * Set cenaM2.
     *
     * @param float $cenaM2
     *
     * @return Nieruchomosc
     */
    public function setCenaM2($cenaM2)
    {
        $this->cena_m2 = $cenaM2;

        return $this;
    }

    /**
     * Get cenaM2.
     *
     * @return float
     */
    public function getCenaM2()
    {
        return $this->cena_m2;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mieszkanie.
     *
     * @param \Entity\Mieszkanie|null $mieszkanie
     *
     * @return Nieruchomosc
     */
    public function setMieszkanie(\Entity\Mieszkanie $mieszkanie = null)
    {
        $this->mieszkanie = $mieszkanie;

        return $this;
    }

    /**
     * Get mieszkanie.
     *
     * @return \Entity\Mieszkanie|null
     */
    public function getMieszkanie()
    {
        return $this->mieszkanie;
    }

    /**
     * Set miasto.
     *
     * @param \Entity\Miasto|null $miasto
     *
     * @return Nieruchomosc
     */
    public function setMiasto(\Entity\Miasto $miasto = null)
    {
        $this->miasto = $miasto;

        return $this;
    }

    /**
     * Get miasto.
     *
     * @return \Entity\Miasto|null
     */
    public function getMiasto()
    {
        return $this->miasto;
    }

    /**
     * Add opcjekomunikacji.
     *
     * @param \Entity\Komunikacja $opcjekomunikacji
     *
     * @return Nieruchomosc
     */
    public function addOpcjekomunikacji(\Entity\Komunikacja $opcjekomunikacji)
    {
        $this->opcjekomunikacji[] = $opcjekomunikacji;

        return $this;
    }

    /**
     * Remove opcjekomunikacji.
     *
     * @param \Entity\Komunikacja $opcjekomunikacji
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeOpcjekomunikacji(\Entity\Komunikacja $opcjekomunikacji)
    {
        return $this->opcjekomunikacji->removeElement($opcjekomunikacji);
    }

    /**
     * Get opcjekomunikacji.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOpcjekomunikacji()
    {
        return $this->opcjekomunikacji;
    }
    /**
     * @var string
     */
    private $numer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $opcjedodatkowe;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $opcjematerialu;


    /**
     * Set numer.
     *
     * @param string $numer
     *
     * @return Nieruchomosc
     */
    public function setNumer($numer)
    {
        $this->numer = $numer;

        return $this;
    }

    /**
     * Get numer.
     *
     * @return string
     */
    public function getNumer()
    {
        return $this->numer;
    }

    /**
     * Add opcjedodatkowe.
     *
     * @param \Entity\Dodatkowe $opcjedodatkowe
     *
     * @return Nieruchomosc
     */
    public function addOpcjedodatkowe(\Entity\Dodatkowe $opcjedodatkowe)
    {
        $this->opcjedodatkowe[] = $opcjedodatkowe;

        return $this;
    }

    /**
     * Remove opcjedodatkowe.
     *
     * @param \Entity\Dodatkowe $opcjedodatkowe
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeOpcjedodatkowe(\Entity\Dodatkowe $opcjedodatkowe)
    {
        return $this->opcjedodatkowe->removeElement($opcjedodatkowe);
    }

    /**
     * Get opcjedodatkowe.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOpcjedodatkowe()
    {
        return $this->opcjedodatkowe;
    }

    /**
     * Add opcjematerialu.
     *
     * @param \Entity\Material $opcjematerialu
     *
     * @return Nieruchomosc
     */
    public function addOpcjematerialu(\Entity\Material $opcjematerialu)
    {
        $this->opcjematerialu[] = $opcjematerialu;

        return $this;
    }

    /**
     * Remove opcjematerialu.
     *
     * @param \Entity\Material $opcjematerialu
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeOpcjematerialu(\Entity\Material $opcjematerialu)
    {
        return $this->opcjematerialu->removeElement($opcjematerialu);
    }

    /**
     * Get opcjematerialu.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOpcjematerialu()
    {
        return $this->opcjematerialu;
    }
}

<?php

namespace Entity;

/**
 * Material
 */
class Material
{
    /**
     * @var string
     */
    private $nazwa;

    /**
     * @var int
     */
    private $id;


    /**
     * Set nazwa.
     *
     * @param string $nazwa
     *
     * @return Material
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa.
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
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
}

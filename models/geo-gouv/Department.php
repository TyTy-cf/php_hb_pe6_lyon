<?php

class Department
{

    // Indiquer private dans un construct revient à :
    // - créer automatiquement une propriété de même nom et de même visibilité
    // - l'assigner directement à la valeur passée en paramètre du constructeur
    public function __construct(
        private string $name,
        private string $code,
        private string $codeRegion
    ) {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getCodeRegion(): string
    {
        return $this->codeRegion;
    }

}

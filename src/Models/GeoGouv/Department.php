<?php

namespace App\Models\GeoGouv;

class Department implements ISlugify
{

    private string $slug;

    // Indiquer private dans un construct revient à :
    // - créer automatiquement une propriété de même nom et de même visibilité
    // - l'assigner directement à la valeur passée en paramètre du constructeur
    /**
     * @param string $name le nom du département
     * @param string $code le code du département
     * @param string $codeRegion le code de la région
     */
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

    public function generateSlug(): void
    {
        if ($this->name) {
            $this->slug = strtolower($this->name);
        }
    }
}

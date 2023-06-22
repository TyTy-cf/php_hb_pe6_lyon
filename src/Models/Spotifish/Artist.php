<?php

namespace App\Models\Spotifish;

class Artist
{

    private string $name;

    private int $beginningYear;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getBeginningYear(): int
    {
        return $this->beginningYear;
    }

    /**
     * @param int $beginningYear
     */
    public function setBeginningYear(int $beginningYear): void
    {
        $this->beginningYear = $beginningYear;
    }

}

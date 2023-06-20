<?php

class Song
{

    private int $duration;

    private string $name;

    /** @var Genre[] $genres */
    private array $genres;

    public function __construct()
    {
        $this->genres = [];
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return Genre[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    public function addGenre(Genre $genre): void {
        if (!in_array($genre, $this->genres)) {
            $this->genres[] = $genre;
        }
    }

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

    public function displayDuration(): string {
        $seconds = $this->duration % 60;
        if ($seconds < 10) {
            $seconds = '0' . $seconds;
        }
        $minutes = floor($this->duration / 60);
        if ($minutes < 10) {
            $minutes = '0' . $minutes;
        }
        return $minutes . ':' . $seconds;
    }

}

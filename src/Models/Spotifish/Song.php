<?php

namespace App\Models\Spotifish;

class Song
{

    private int $duration;

    private string $name;

    /** @var Genre[] $genres */
    private array $genres;

    /** @var Artist[] $artists */
    private array $artists;

    public function __construct()
    {
        $this->genres = [];
        $this->artists = [];
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

    /**
     * @return Artist[]
     */
    public function getArtists(): array
    {
        return $this->artists;
    }

    public function addArtist(Artist $artist): void {
        if (!in_array($artist, $this->artists)) {
            $this->artists[] = $artist;
        }
    }

    /**
     * @return string la durée de la chanson au format mm:ss
     */
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

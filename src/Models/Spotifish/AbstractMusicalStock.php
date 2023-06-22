<?php

namespace App\Models\Spotifish;

use DateTime;

abstract class AbstractMusicalStock
{

    protected string $name;

    protected DateTime $createdAt;

    /** @var Song[] $songs */
    protected array $songs;

    public function __construct()
    {
        $this->songs = [];
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
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return Song[]
     */
    public function getSongs(): array
    {
        return $this->songs;
    }

    /**
     * @param Song $song Ajoute une chanson dans le support musical si celle-ci n'y a pas déjà été ajouté
     */
    public function addSong(Song $song): void {
        if (!in_array($song, $this->songs)) {
            $this->songs[] = $song;
        }
    }

    /**
     * @return int Durée totale du support musical en seconde
     */
    public function getTotalDuration(): int {
        $duration = 0;
        foreach ($this->songs as $song) {
            $duration += $song->getDuration();
        }
        return $duration;
    }

}

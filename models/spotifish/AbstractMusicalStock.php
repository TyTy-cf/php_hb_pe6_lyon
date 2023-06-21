<?php

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

    public function addSong(Song $song): void {
        if (!in_array($song, $this->songs)) {
            $this->songs[] = $song;
        }
    }

    public function getTotalDuration(): int {
        $duration = 0;
        foreach ($this->songs as $song) {
            $duration += $song->getDuration();
        }
        return $duration;
    }

}

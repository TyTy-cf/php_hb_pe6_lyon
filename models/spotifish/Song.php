<?php

class Song
{

    private int $duration;

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

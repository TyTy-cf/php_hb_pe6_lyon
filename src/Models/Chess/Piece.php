<?php

namespace App\Models\Chess;

abstract class Piece
{

    protected string $color;

    protected string $image;

    public function __construct(string $color, string $pieceName)
    {
        $this->color = $color;
        $this->image = '/assets/chess/' . strtolower($pieceName) . '-' . $color . '.png';
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    public abstract function move();

    public function randomMove(): void {
        echo 'RandomMove du parent <br>';
    }
}

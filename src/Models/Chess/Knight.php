<?php

namespace App\Models\Chess;

class Knight extends Piece
{

    public function __construct(string $color)
    {
        parent::__construct($color, Knight::class);
    }

    public function move(): void
    {
        echo ' c\'est un cavalier !<br>';
    }

    public function randomMove(): void {
        echo 'RandomMove du Cavalier <br>';
    }

}

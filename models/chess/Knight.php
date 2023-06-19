<?php

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

}

<?php

class Rook extends Piece
{

    public function __construct(string $color)
    {
        parent::__construct($color, Rook::class);
    }

    public function move(): void
    {
        echo 'Déplacement de la tour ! ('.Rook::class.')<br>';
    }

}

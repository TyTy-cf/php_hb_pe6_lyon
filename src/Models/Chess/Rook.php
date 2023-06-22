<?php

namespace App\Models\Chess;

use App\Models\IFooBar;

class Rook extends Piece implements IFooBar
{

    public function __construct(string $color)
    {
        parent::__construct($color, Rook::class);
    }

    public function move(): void
    {
        echo 'Déplacement de la tour ! ('.Rook::class.')<br>';
    }

    public function randomMove(): void {
        parent::randomMove();
        echo 'RandomMove de la tour <br>';
    }

    public function moveFooBar()
    {
        // TODO: Implement moveFooBar() method.
    }
}

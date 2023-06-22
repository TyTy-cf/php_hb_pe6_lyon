<?php

namespace App\Models\Spotifish;

use DateTime;

class Playlist extends AbstractMusicalStock
{

    public function __construct()
    {
        // Dans l'enfant, si le parent a un construct, alors l'enfant DOIT le rappeler
        parent::__construct();
        $this->createdAt = new DateTime();
    }

}

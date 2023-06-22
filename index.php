<?php

include_once __DIR__ . '/component/header.php';

use App\Models\Spotifish\Playlist;
use App\Models\Spotifish\Artist;
use App\Models\Spotifish\Genre;
use App\Models\Spotifish\Song;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Chess\Knight;
use App\Models\Chess\Rook;

$table = new Product();
$table->setCreatedAt(null);
$table->addTag('playmobil');

$table->setPrice(119.99);
$table->setName('Table playmobil');
$table->setDescription('Super table playmobil en excellent état, peu servie');

$seat = new Product();
$seat->setPrice(520);
$seat->setDescription('Super chaise de bureau gaming de luxe, super confortable pour vos sessions nocturnes');
$seat->setCreatedAt(new DateTime());
$seat->setName('72Z');

$ikea = new Brand();
$ikea->setName('Ikea');

$seat->setBrand($ikea);
$table->setBrand($ikea);
//
//
///************************* CHESS ******************************************************/

$pieces[] = new Knight('black');
$pieces[] = new Knight('black');
$pieces[] = new Knight('white');
$pieces[] = new Knight('white');
$pieces[] = new Rook('black');
$pieces[] = new Rook('black');
$pieces[] = new Rook('white');
$pieces[] = new Rook('white');

foreach ($pieces as $piece) {
//    echo '<img src="'. $piece->getImage() .'">';
//    $piece->randomMove();
}


/************************* SPOTIFISH ******************************************************/

$artist = new Artist();
$artist->setName('Eagles');
$artist->setBeginningYear(1971);

$genre = new Genre();
$genre->setName('Rock');

$song = new Song();
$song->setName('Hotel california');
$song->setDuration(336);
$song->addArtist($artist);
$song->addGenre($genre);

$song1 = new Song();
$song1->setName('House of the rising sun');
$song1->setDuration(464);
$song1->addArtist($artist);
$song1->addGenre($genre);

$myPlaylist = new Playlist();
$myPlaylist->setName('My super playlist oldschool');
$myPlaylist->addSong($song);
$myPlaylist->addSong($song1);

//echo '<pre>';
//var_dump($myPlaylist);
//echo '</pre>';

// => format de date
//echo $myPlaylist->getCreatedAt()->format('d/m/Y');

//echo $myPlaylist->getTotalDuration();
//
//echo '<br>';

//include_once __DIR__ . '/page/regions.php';
//include_once __DIR__ . '/page/departments.php';

?>


<div class="row">
    <div class="col">
        <a href="page/user/register.php" class="btn btn-primary mt-5">
            S'inscrire
        </a>
    </div>
    <div class="col">
        <a href="page/regions.php" class="btn btn-primary mt-5">
            Régions
        </a>
    </div>
    <div class="col">
        <a href="page/departments.php" class="btn btn-primary mt-5">
            Départements
        </a>
    </div>
</div>


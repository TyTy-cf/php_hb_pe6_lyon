<?php

include_once 'models/Product.php';

$table = new Product();
$table->name = 'Table playmobil';
$table->price = 119.99;
$table->description = 'Super table playmobil en excellent état, peu servie';

$seat = new Product();
$seat->name = '72Z';
$seat->price = 520;
$seat->description = 'Super chaise de bureau gaming de luxe, super confortable pour vos sessions nocturnes';
$seat->createdAt = new DateTime();

var_dump($seat);

$seat->description = 'Super chaise de bureau gaming de luxe mais le modèle au-dessus';

var_dump($seat);

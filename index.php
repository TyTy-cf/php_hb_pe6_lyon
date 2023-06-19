<?php

include_once 'models/Product.php';

$table = new Product();
$table->setCreatedAt(null);
$table->addTag('playmobil');

//$table->setPrice(119.99);
//$table->setName('Table playmobil');
//$table->setDescription('Super table playmobil en excellent état, peu servie');

$seat = new Product();
$seat->setPrice(520);
$seat->setDescription('Super chaise de bureau gaming de luxe, super confortable pour vos sessions nocturnes');
$seat->setCreatedAt(new DateTime());
$seat->setName('72Z');

$ikea = new Brand();
$ikea->setName('Ikea');

$seat->setBrand($ikea);
$table->setBrand($ikea);

<?php

require_once 'animal.php';
require_once 'mamifero.php';
require_once 'reptil.php';
require_once 'peixe.php';
require_once 'ave.php';
require_once 'cachorro.php';
require_once 'canguru.php';
require_once 'cobra.php';
require_once 'tartaruga.php';
require_once 'goldfish.php';
require_once 'arara.php';


$m = new Mamifero();
$a = new Ave();
$r = new Reptil();
$p = new Peixe();
$c = new Canguru();
$k = new Cachorro();
$t = new Tartaruga();
$co = new Cobra();
$g = new Goldfish();
$ar = new Arara();

$m->setPeso(68.5);
$m->locomover();
$a->locomover();
$r->locomover();
$k->locomover();
$c->locomover();
$t->locomover();
$m->emitirSom();
$k->emitirSom();
$c->emitirSom();

?>
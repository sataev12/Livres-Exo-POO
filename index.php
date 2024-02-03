<?php

spl_autoload_register(function($class_name) {
    require 'classes/'.$class_name . '.php';
});

$stephanAuteur = new Auteur("Stephen", "King");



echo "Livres de {$stephanAuteur}<br>                  <br>";

$ca = new Livre("CA", "1138", "1986", "20", $stephanAuteur);
$simetierre = new Livre("Simetierre", "374", "1983", "15", $stephanAuteur);
$leFleau = new Livre("Le Fleau", "823", "1978", "14", $stephanAuteur);
$shining = new Livre("Shining", "447", "1977", "16", $stephanAuteur);
$ca->bibliograpfie();
$simetierre->bibliograpfie();
$leFleau->bibliograpfie();
$shining->bibliograpfie();
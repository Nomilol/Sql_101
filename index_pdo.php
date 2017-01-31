<?php
require_once 'vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

$reponse = ORM::for_table('mes_chaussettes')->where('couleur', 'rose')->find_many();
//var_dump($reponse);
foreach($reponse as $mes_chaussettes){
  echo $mes_chaussettes->id . "\n";
}

<?php
  //includo le classi che mi servono
  require_once "classi/Dipendente.php";


  $dipendente_01 = new Dipendente( 1, "Marco", "Carone", "CF48574FHRH84P10DD", "Web Developer");
  $dipendente_01->indirizzo = "via geranii,380 Honolulu";
  $dipendente_01->stipendio = 1500;
  $dipendente_01->giorniFerie(35,10);

  var_dump($dipendente_01);
  ?>

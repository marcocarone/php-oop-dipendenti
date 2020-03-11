<?php
  //includo le classi che mi servono
  require_once "classi/Dipendente.php";


  $dipendente_01 = new Dipendente( 1, "Marco", "Carone", "CF48574FHRH84P10DD", "Web Developer");
  $dipendente_01->setIndirizzo("via geranii,380 Honolulu");
  $dipendente_01->setStipendio(1500);

  $dipendente_01->setGiorniFerieUtilizzati(10);
  $dipendente_01->setGiorniFerieMaturati(30);
  var_dump($dipendente_01);


    echo $dipendente_01->calcolagiorniFerieRimanenti();
  ?>

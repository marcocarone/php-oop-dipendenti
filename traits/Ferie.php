<?php

trait Ferie
{


  public $giorniFerie;

  public function giorniFerie($giorniFerieMaturati, $giorniFerieUtilizzati){
     $ferieTotali = $giorniFerieMaturati - $giorniFerieUtilizzati;
     return $this->giorniFerie = $ferieTotali;
  }
}

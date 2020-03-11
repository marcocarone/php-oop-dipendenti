<?php

trait Ferie
{

  protected $giorniFerieMaturati;
  protected $giorniFerieUtilizzati;


  public function calcolagiorniFerieRimanenti(){
     $ferieTotali = $this->giorniFerieMaturati - $this->giorniFerieUtilizzati;
     return $ferieTotali;
  }

  public function setGiorniFerieMaturati($giorniFerieMaturati)
  {
    if (empty($giorniFerieMaturati)) {
        throw new Exception('Campo non è settato');
    } else {
        $this->giorniFerieMaturati = $giorniFerieMaturati;
    }
  }

  public function getGiorniFerieMaturatio()
  {
    return $this->giorniFerieMaturati;
  }


  public function setGiorniFerieUtilizzati($giorniFerieUtilizzati)
  {
    if (empty($giorniFerieUtilizzati)) {
        throw new Exception('Campo non è settato');
    } else {
        $this->giorniFerieUtilizzati = $giorniFerieUtilizzati;
    }
  }
  public function getStipendio()
  {
    return $this->giorniFerieUtilizzati;
  }

}

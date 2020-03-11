<?php
require_once __DIR__ . "/../traits/Ferie.php";

  class Dipendente
  {
    public $id;
    public $nome;
    public $cognome;
    public $cf;
    public $ruolo;
    public $indirizzo;
    public $stipendio;
    use Ferie;

    public function __construct($_id, $_nome, $_cognome, $_cf, $_ruolo)
    {
      $this->id = $_id;
      $this->nome = $_nome;
      $this->cognome = $_cognome;
      $this->cf = $_cf;
      $this->ruolo = $_ruolo;
    }
  }

 ?>

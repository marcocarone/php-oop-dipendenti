<?php
require_once __DIR__ . "/../traits/Ferie.php";

  class Dipendente
  {
      protected $id;
      protected $nome;
      protected $cognome;
      protected $cf;
      protected $ruolo;
      protected $indirizzo;
      protected $stipendio;
      use Ferie;

      public function __construct($_id, $_nome, $_cognome, $_cf, $_ruolo)
      {
          if (empty($_id) && !is_int($_id)) {
              throw new Exception('Non è un numero');
          } else {
              $this->id = $_id;
          }
          if (empty($_nome)) {
              throw new Exception('Campo non è settato');
          } else {
              $this->nome = $_nome;
          }
          if (empty($_cognome)) {
              throw new Exception('Campo non è settato');
          } else {
              $this->cognome = $_cognome;
          }
          if (empty($_cf)) {
              throw new Exception('Campo non è settato');
          } else {
              $this->cf = $_cf;
          }
          if (empty($_ruolo)) {
              throw new Exception('Campo non è settato');
          } else {
              $this->ruolo = $_ruolo;
          }

      }

      public function setIndirizzo($indirizzo)
      {
        if (empty($indirizzo)) {
            throw new Exception('Campo non è settato');
        } else {
            $this->indirizzo = $indirizzo;
        }
      }

      public function getIndirizzo()
      {
        return $this->indirizzo;
      }


      public function setStipendio($stipendio)
      {
        if (empty($stipendio)) {
            throw new Exception('Campo non è settato');
        } else {
            $this->stipendio = $stipendio;
        }
      }
      public function getStipendio()
      {
        return $this->stipendio;
      }

    

  }
?>

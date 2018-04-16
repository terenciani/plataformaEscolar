<?php
  class Categoria {
		private $id_categoria;
		private $titulo;
    private $data;   
    private $tipo;
    private $ativa;

		public function getId_categoria() {
      return $this->id_categoria;
  	}

  	public function setId_categoria($id_categoria) {
    	$this->id_categoria = $id_categoria;
  	}

  	public function getTitulo() {
      return $this->titulo;
  	}

  	public function setTitulo($titulo) {
    	$this->titulo = $titulo;
  	}

    public function getData() {
      $timestamp = strtotime($this->data); 
      return date('d/m/Y', $timestamp); 
    }

    public function setData($data) {
      $this->data = $data;
    }

    public function getTipo() {
      return $this->tipo;
    }

    public function setTipo($tipo) {
      $this->tipo = $tipo;
    }

    public function getAtiva() {
      return $this->ativa;
    }

    public function setAtiva($ativa) {
      $this->ativa = $ativa;
    }
	}

?>
<?php
  class Artigo {
		private $id_arquivo;
		private $titulo;
    private $resumo;   
    private $edicao;
    private $arquivo;

		public function getId_artigo() {
      return $this->id_arquivo;
  	}

  	public function setId_artigo($id_artigo) {
    	$this->id_artigo = $id_artigo;
  	}

  	public function getTitulo() {
      return $this->titulo;
  	}

  	public function setTitulo($titulo) {
    	$this->titulo = $titulo;
  	}

    public function getResumo() {
      return $this->resumo;
    }

    public function setResumo($resumo) {
      $this->resumo = $resumo;
    }

    public function getEdicao() {
      return $this->edicao;
    }

    public function setEdicao($edicao) {
      $this->edicao = $edicao;
    }

    public function getArquivo() {
      return $this->arquivo;
    }

    public function setArquivo($arquivo) {
      $this->arquivo = $arquivo;
    }
	}

?>

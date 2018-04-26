<?php
  class Media {
		private $id_media;
		private $titulo;
    private $descricao;   
    private $url;
    private $alt;
    private $categoria;

		public function getId_media() {
      return $this->id_media;
  	}

  	public function setId_media($id_media) {
    	$this->id_media = $id_media;
  	}

  	public function getTitulo() {
      return $this->titulo;
  	}

  	public function setTitulo($titulo) {
    	$this->titulo = $titulo;
  	}

    public function getDescricao() {
      return $this->descricao;
    }

    public function setDescricao($descricao) {
      $this->descricao = $descricao;
    }

    public function getUrl() {
      return $this->url;
    }

    public function setUrl($url) {
      $this->url = $url;
    }

    public function getAlt() {
      return $this->alt;
    }

    public function setAlt($alt) {
      $this->alt = $alt;
    }

    public function getCategoria() {
      return $this->categoria;
    }

    public function setCategoria($categoria) {
      $this->categoria = $categoria;
    }
	}

?>

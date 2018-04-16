<?php
  class Banner {
		private $id_banner;
		private $titulo;
		private $link;
    private $alt;
		private $imagem;
		private $posicao; 
    private $data;   
    private $ativo;

		public function getId_banner() {
      return $this->id_banner;
  	}

  	public function setId_banner($id_banner) {
    	$this->id_banner = $id_banner;
  	}

  	public function getTitulo() {
      return $this->titulo;
  	}

  	public function setTitulo($titulo) {
    	$this->titulo = $titulo;
  	}

  	public function getLink() {
      return $this->link;
  	}

  	public function setLink($link) {
    	$this->link = $link;
  	}

    public function getAlt() {
      return $this->alt;
    }

    public function setAlt($alt) {
      $this->alt = $alt;
    }

    public function getImagem() {
      return $this->imagem;
    }

    public function setImagem($imagem) {
      $this->imagem = $imagem;
    }

  	public function getPosicao() {
      return $this->posicao;
  	}

  	public function setPosicao($posicao) {
    	$this->posicao = $posicao;
  	}
    
    public function getData() {
      return $this->data;
    }

    public function setData($data) {
      $this->data = $data;
    }

    public function getAtivo() {
      return $this->ativo;
    }

    public function setAtivo($ativo) {
      $this->ativo = $ativo;
    }
	}

?>
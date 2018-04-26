<?php
	class Noticia {
		private $id_noticia;
		private $titulo;
		private $chamada;
    private $imagem;
		private $texto;
		private $data;
    private $fonte;
    private $ativa;

		public function getId_noticia() {
          	return $this->id_noticia;
      	}
   
      	public function setId_noticia($id_noticia) {
        	$this->id_noticia = $id_noticia;
      	}

      	public function getTitulo() {
          	return $this->titulo;
      	}
   
      	public function setTitulo($titulo) {
        	$this->titulo = $titulo;
      	}

      	public function getChamada() {
          	return $this->chamada;
      	}
   
      	public function setChamada($chamada) {
        	$this->chamada = $chamada;
      	}

        public function getImagem() {
            return $this->imagem;
        }
   
        public function setImagem($imagem) {
          $this->imagem = $imagem;
        }

      	public function getTexto() {
          	return $this->texto;
      	}
   
      	public function setTexto($texto) {
        	$this->texto = $texto;
      	}

      	public function getData() {
          $timestamp = strtotime($this->data); 
          return date('d/m/Y', $timestamp);
      	}
   
      	public function setData($data) {
        	$this->data = $data;
      	}

      	public function getFonte() {
          	return $this->fonte;
      	}
   
      	public function setFonte($fonte) {
        	$this->fonte = $fonte;
      	}
        
        public function getAtiva() {
            return $this->ativa;
        }
   
        public function setAtiva($ativa) {
          $this->ativa = $ativa;
        }
	}

?>
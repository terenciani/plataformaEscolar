<?php
  	class Servidor {
		private $id_servidor;
		private $nome;
		private $sobrenome;
		private $imagem;
		private $funcao;
    	private $turno;
		private $atuacao;
		private $pedagogico;
		private $ativo;

		public function getId_servidor() {
	      return $this->id_servidor;
	  	}

	  	public function setId_servidor($id_servidor) {
	    	$this->id_servidor = $id_servidor;
	  	}

	  	public function getNome() {
	      return $this->nome;
	  	}

	  	public function setNome($nome) {
	    	$this->nome = $nome;
	  	}
		
		public function getSobrenome() {
	      return $this->sobrenome;
	  	}

	  	public function setSobrenome($sobrenome) {
	    	$this->sobrenome = $sobrenome;
	  	}

		public function getNomeSobrenome() {
	      return $this->nome." ".$this->sobrenome;
	  	}	

		public function getImagem() {
	     	if($this->imagem == "")
	     		return "avatar.png";
	      return $this->imagem;
	    }

	    public function setImagem($imagem) {
	      $this->imagem = $imagem;
	    }
	  	public function getFuncao() {
	      return $this->funcao;
	  	}

	  	public function setFuncao($funcao) {
	    	$this->funcao = $funcao;
	  	}

	    public function getTurno() {
	      return $this->turno;
	    }

	    public function setTurno($turno) {
	      $this->turno = $turno;
	    }

	  	public function getAtuacao() {
	      return $this->atuacao;
	  	}

	  	public function setAtuacao($atuacao) {
	    	$this->atuacao = $atuacao;
	  	}
    
	    public function getPedagogico() {
	      return $this->pedagogico;
	    }

	    public function setPedagogico($pedagogico) {
	      $this->pedagogico = $pedagogico;
	    }

	    public function getAtivo() {
	      return $this->ativo;
	    }

	    public function setAtivo($ativo) {
	      $this->ativo = $ativo;
	    }
	}

?>
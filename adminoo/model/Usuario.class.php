<?php
  class Usuario {
		private $id_usuario;
		private $nome;
    private $login;   
    private $senha;

		public function getId_usuario() {
      return $this->id_usuario;
  	}

  	public function setId_usuario($id_usuario) {
    	$this->id_usuario = $id_usuario;
  	}

  	public function getNome() {
      return $this->nome;
  	}

  	public function setNome($nome) {
    	$this->nome = $nome;
  	}

    public function getLogin() {
      return $this->login;
    }

    public function setLogin($login) {
      $this->login = $login;
    }

    public function getSenha() {
      return $this->senha;
    }

    public function setSenha($senha) {
      $this->senha = $senha;
    }
	}

?>

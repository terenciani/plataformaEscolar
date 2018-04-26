<?php
  class Aluno {
		private $id_aluno;
		private $nome;
    private $turma;   
    private $ultimo;

		public function getId_aluno() {
      return $this->id_aluno;
  	}

  	public function setId_aluno($id_aluno) {
    	$this->id_aluno = $id_aluno;
  	}

  	public function getNome() {
      return $this->nome;
  	}

  	public function setNome($nome) {
    	$this->nome = $nome;
  	}

    public function getTurma() {
      return $this->turma;
    }

    public function setTurma($turma) {
      $this->turma = $turma;
    }

    public function getUltimo() {
      return $this->ultimo;
    }

    public function setUltimo($ultimo) {
      $this->ultimo = $ultimo;
    }
	}

?>

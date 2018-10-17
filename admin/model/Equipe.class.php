<?php
class equipe {
	private $nome_completo;
	private $funcao;
	private $imagem;

	public function getId_equipe() {
          	return $this->nome_completo;
      	}
   
      	public function setId_equipe($nome_completo) {
        	$this->nome_completo = $nome_completo;
      	}

      	public function getfuncao() {
          	return $this->funcao;
      	}
   
      	public function setfuncao($funcao) {
        	$this->funcao = $funcao;
      	}

      	public function getimagem() {
          	return $this->imagem;
      	}
   
      	public function setimagem($imagem) {
        	$this->imagem = $imagem;
      	}


}





?>
<?php
  class Instituicao {
    private $nome;
    private $sigla;
    private $slogan;
		private $data;
		private $missao;
		private $visao;
    private $valores;
    private $historico;
    private $endereco;
		private $telefone;
    private $telefoneAlternativo;
    private $destinatariosDeContato;
    private $email;
    private $youtube;
    private $facebook;
    private $logoPrincipal;
    private $logoAlternativa;
    private $temProfissional;

		

    public function getNome() {
      return $nome; 
    }

    public function setNome($nome) {
      $this->nome = $nome;
    }

    public function getSigla() {
      return $sigla; 
    }

    public function setSigla($sigla) {
      $this->sigla = $sigla;
    }

    public function getSlogan() {
      return $slogan; 
    }

    public function setSlogan($slogan) {
      $this->slogan = $slogan;
    }

    public function getData() {
      $timestamp = strtotime($this->data); 
      return date('d/m/Y', $timestamp); 
    }

    public function setData($data) {
      $this->data = $data;
    }

  	public function getVisao() {
      return $this->visao;
  	}

  	public function setVisao($visao) {
    	$this->visao = $visao;
  	}

  	public function getMissao() {
      return $this->missao;
  	}

  	public function setMissao($missao) {
    	$this->missao = $missao;
  	}

    public function getValores() {
      return $this->valores;
    }

    public function setValores($valores) {
      $this->valores = $valores;
    }

    public function getHistorico() {
      return  $this->historico;
    }

    public function setHistorico($historico) {
      $this->historico = $historico;
    }

    public function getEndereco() {
      return  $this->endereco;
    }

    public function setEndereco($endereco) {
      $this->endereco = $endereco;
    }
    public function getTelefone() {
      return  $this->telefone;
    }

    public function setTelefone($telefone) {
      $this->telefone = $telefone;
    }
    public function getTelefoneAlternativo() {
      return  $this->telefoneAlternativo;
    }

    public function setTelefoneAlternativo($telefoneAlternativo) {
      $this->telefoneAlternativo = $telefoneAlternativo;
    }

    public function getDestinatariosDeContato() {
      return  $this->destinatariosDeContato;
    }

    public function setDestinatariosDeContato($destinatariosDeContato) {
      $this->destinatariosDeContato = $destinatariosDeContato;
    }

    public function getEmail() {
      return  $this->email;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function getFacebook() {
      return  $this->facebook;
    }

    public function setFacebook($facebook) {
      $this->facebook = $facebook;
    }

    public function getLogoPrincipal() {
      return  $this->logoPrincipal;
    }

    public function setLogoPrincipal($logoPrincipal) {
      $this->logoPrincipal = $logoPrincipal;
    }

    public function getLogoAlternativa() {
      return  $this->logoAlternativa;
    }

    public function setLogoAlternativa($logoAlternativa) {
      $this->logoAlternativa = $logoAlternativa;
    }

    public function getYoutube() {
      return  $this->youtube;
    }

    public function setYoutube($youtube) {
      $this->youtube = $youtube;
    } 

    public function getTemProfissional() {
      return  $this->temProfissional;
    }

    public function setTemProfissional($temProfissional) {
      $this->temProfissional = $temProfissional;
    } 
	}
?>


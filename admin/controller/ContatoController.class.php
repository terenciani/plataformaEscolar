<?php
	include_once 'dao/DaoInstituicao.class.php';
	
  	class ContatoController {

  		public function getInstituicao(){
  			try {
				$daoInstituicao = new DaoInstituicao();
				return $daoInstituicao->getInstituicao();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
  		}
  		public function enviarEmail($post){
  			
  			// Recebendo os dados passados pela página "form_contato.php"
			$recebenome = $post["nome"];
			$recebemail = $post["email"];
			$recebemsg  = $post["mensagem"];
			
			// Definindo os cabeçalhos do e-mail
			$headers = "Content-type:text/html; charset=iso-8859-1";
			
			$daoInstituicao = new DaoInstituicao();

			// Vamos definir agora o destinatário do email, ou seja, VOCÊ ou SEU CLIENTE
			$para = $daoInstituicao->getInstituicao()->getDestinatariosDeContato();


			// Definindo o aspecto da mensagem
			$mensagem   = "<h2>De:</h2> ";
			$mensagem  .= $recebenome . " - " . $recebemail;
			$mensagem  .= "<h2>Assunto:</h2>";
			$mensagem  .= "Mensagem do Site - WBS";
			$mensagem  .= "<h2>Mensagem</h2>";
			$mensagem  .= "<p>";
			$mensagem  .= $recebemsg;
			$mensagem  .= "</p>";

			// Enviando a mensagem para o destinatário
			$envia =  mail($para,"E-mail do Site",$mensagem,$headers);

			// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail será respondido.
			$mensagem2  = "<p>Olá <strong>" . $recebenome . "</strong>. Agradeçemos sua visita e a oportunidade de recebermos 
			o seu contato. Em até 48 horas você receberá no e-mail fornecido a resposta para sua questão.<br>
			Escola Estadual Waldemir Barros da Silva.
			</p>";

			$mensagem2 .= "<p>Observação - Não é necessário responder esta mensagem.</p>";
			$envia =  mail($recebemail,"Sua mensagem foi recebida!",$mensagem2,$headers);

			// Exibe na tela a mensagem de sucesso, e depois redireciona devolta para a página de contato.
			$retorno = "<div class='alert alert-success' role='alert'>
  							<h4 class='alert-heading'>Mensagem Enviada com Sucesso!</h4>
  							<hr>
  							<p class='mb-0'>
  								Você recebeu uma e-mail de confirmação de recebimento no e-mail $recebemail.
  							</p>
  						</div>";
			$retorno .= "<meta http-equiv='refresh' content='7;URL=contato.php'>";

			return $retorno;
  		}


	}
?>

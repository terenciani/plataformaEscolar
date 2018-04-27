<?php
	include_once LIB_INCLUDES.DS.'Conexao.class.php';
	include_once LIB_MODEL.DS.'Aluno.class.php';
	
	class DaoEsporte {

		public static $instancia;

		public static function getInstancia() {
			if (!isset(self::$instancia))
				self::$instancia = new DaoEsporte();

				return self::$instancia;
			}

		public function getListaPorEsporte($esporte) {
			try {
				$sql = "SELECT * FROM tb_inscricao_esporte WHERE esporte=:esporte";

				$p_sql = Conexao::getInstancia()->prepare($sql);
				$p_sql->bindValue(":esporte", $esporte);
		        $result = $p_sql->execute();
		        $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
				$f_lista = array();

				foreach ($lista as $l)
					$f_lista[] = $this->populaAluno($l);

				return $f_lista;
			} catch (Exception $e) {
				echo $e;
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}

		public function salvarInscricao($post, $esporte){
			try{
				$sql = "INSERT INTO tb_inscricao_esporte VALUES('',:nome, :turma, :ultimo, :esporte)";
				$p_sql = Conexao::getInstancia()->prepare($sql);
				$p_sql->bindValue(":nome", $post['nome']);
				$p_sql->bindValue(":turma", $post['turma']);
				$p_sql->bindValue(":ultimo", 0, PDO::PARAM_INT);
				$p_sql->bindValue(":esporte", $esporte);
	          	$p_sql->execute();
	          	return $p_sql->rowCount();	
			}catch (Exception $e) {
				echo "<br>".$e->getMessage();
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
		public function atualizarUltimo($codigo, $esporte){
			try{
				$sql = "UPDATE tb_inscricao_esporte
						SET ultimo = 0
						WHERE esporte = :esporte";

				$p_sql = Conexao::getInstancia()->prepare($sql);
				$p_sql->bindValue(":esporte", $esporte);
	          	$p_sql->execute();

				$sql = "UPDATE tb_inscricao_esporte
						SET ultimo = 1
						WHERE id_inscricao = :codigo AND esporte = :esporte";

				$p_sql = Conexao::getInstancia()->prepare($sql);
				$p_sql->bindValue(":esporte", $esporte);
				$p_sql->bindValue(":codigo", $codigo);
	          	$p_sql->execute();
				
	          	return $p_sql->rowCount();	
			}catch (Exception $e) {
				echo "<br>".$e->getMessage();
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
			
		}
		
		
		private function populaAluno($row) {
			$aluno = new Aluno();
			$aluno->setId_aluno($row['id_inscricao']);
			$aluno->setNome($row['nome']);
			$aluno->setTurma($row['turma']);
			$aluno->setUltimo($row['ultimo']);
		
			return $aluno;
		}
	}
?>
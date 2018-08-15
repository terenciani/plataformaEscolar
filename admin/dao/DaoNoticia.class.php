<?php
  include_once LIB_INCLUDES.DS.'Conexao.class.php';
  include_once LIB_MODEL.DS.'Noticia.class.php';
  
  class DaoNoticia {
   
      public static $instancia;
   
      public static function getInstancia() {
        if (!isset(self::$instancia))
            self::$instancia = new DaoNoticia();
 
        return self::$instancia;
      }
   
      public function getNextID() {
        try {
            $sql = "SELECT Auto_increment FROM information_schema.tables WHERE table_name='tb_noticia'";
            $result = Conexao::getInstancia()->query($sql);
            $final_result = $result->fetch(PDO::FETCH_ASSOC);
            return $final_result['Auto_increment'];
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
   
      public function getNoticiaPorId($id) {
        try {
          $sql = "SELECT * FROM tb_noticia WHERE id_noticia=:id";
          $p_sql = Conexao::getInstancia()->prepare($sql);
          $p_sql->bindValue(":id", $id);
          $result = $p_sql->execute();
          return $this->populaNoticia($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
          print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
   
      public function listarNoticiasPrincipais() {
        try {
            $sql = "SELECT * FROM tb_noticia WHERE ativa=1 order by data desc LIMIT 2";
            $result = Conexao::getInstancia()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
 
            foreach ($lista as $l)
                $f_lista[] = $this->populaNoticia($l);
 
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
      public function listarNoticias() {
        try {
            $sql = "SELECT * FROM tb_noticia WHERE ativa=1 order by data desc";
            $result = Conexao::getInstancia()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
 
            foreach ($lista as $l)
                $f_lista[] = $this->populaNoticia($l);
 
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }


      public function salvarNoticia($dadosFormulario, $dadosImagem){
        // Armazena os dados vindo do formul?rio
        $titulo       = $dadosFormulario['titulo_noticia'];
        $chamada      = $dadosFormulario['chamada_noticia'];
        $texto        = $dadosFormulario['texto_noticia'];
        $imagem       = $dadosImagem['imagem'];
        $dataOriginal = $dadosFormulario['data-noticia'];
        $fonte        = $dadosFormulario['fonte-noticia'];

        // Se a foto estiver sido selecionada
        if (!empty($imagem["name"])) {
          $nomeImagem = $this->uploadImagem($imagem);
          
          try{
            $sql = "INSERT INTO tb_noticia VALUES ('', :titulo, :chamada, :nomeImagem, :texto, :dataOriginal, :fonte, 1)";
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(":titulo", $titulo);
            $p_sql->bindValue(":chamada", $chamada);
            $p_sql->bindValue(":nomeImagem", $nomeImagem);
            $p_sql->bindValue(":texto", $texto);
            $p_sql->bindValue(":dataOriginal", $dataOriginal);
            $p_sql->bindValue(":fonte", $fonte);
            $result = $p_sql->execute();
            // Se os dados forem inseridos com sucesso
            if ($result){
              $msg = "Cadastro efetuado com sucesso!!!";
            }else{
              $msg = "Erro ao efetuar Cadastro!!!";
            }
            return $msg;
          }catch(Exception $e){
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
        }
      }
      
      public function excluirNoticia($id) {
        try {
            $sql = "DELETE FROM tb_noticia WHERE id_noticia=:id";
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $result = $p_sql->execute();
 
            return "Registro Excluído com Sucesso!";
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }

      private function populaNoticia($row) {
          $noticia = new Noticia;
          $noticia->setId_noticia($row['id_noticia']);
          $noticia->setTitulo($row['titulo']);
          $noticia->setChamada($row['chamada']);
          $noticia->setImagem($row['imagem']);
          $noticia->setTexto($row['texto']);
          $noticia->setData($row['data']);
          $noticia->setFonte($row['fonte']);
          $noticia->setAtiva($row['ativa']);
          return $noticia;
      }

      private function uploadImagem($imagem){
        // Largura m?xima em pixels
        $largura = 1500;
        // Altura m?xima em pixels
        $altura = 1800;
        // Tamanho m?ximo do arquivo em bytes
        $tamanho = 10;
         
        // Pega as dimens?es da imagem
        $dimensoes = getimagesize($imagem["tmp_name"]);
     
        // Verifica se a largura da imagem ? maior que a largura permitida
        if($dimensoes[0] > $largura) {
          $error[2] = "A largura da imagem n?o deve ultrapassar ".$largura." pixels";
        }
     
        // Verifica se a altura da imagem ? maior que a altura permitida
        if($dimensoes[1] > $altura) {
          $error[3] = "Altura da imagem n?o deve ultrapassar ".$altura." pixels";
        }

        // Verifica se o tamanho da imagem ? maior que o tamanho permitido
        if($imagem["size"] > $tamanho) {
          $error[4] = "A imagem deve ter no m?ximo ".$tamanho." bytes";
        }

        // Pega extens?o da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
   
        // Gera um nome ?nico para a imagem
        $nomeImagem = md5(uniqid(time())) . "." . $ext[1];
   
        // Caminho de onde ficar? a imagem
        $caminho_imagem = LIB_IMG_NOTICIAS.DS.$nomeImagem;
   
        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
        
        return $nomeImagem;
      }

  }
  ?>
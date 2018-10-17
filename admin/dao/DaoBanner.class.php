<?php

  include_once LIB_INCLUDES.DS.'Conexao.class.php';
  include_once LIB_MODEL.DS.'Banner.class.php';
  
  class DaoBanner {
   
      public static $instancia;
   
      public static function getInstancia() {
        if (!isset(self::$instancia))
            self::$instancia = new DaoBanner();
 
        return self::$instancia;
      }
      public function getNextID() {
        try {
            $sql = "SELECT Auto_increment FROM information_schema.tables WHERE table_name='tb_banner'";
            $result = Conexao::getInstancia()->query($sql);
            $final_result = $result->fetch(PDO::FETCH_ASSOC);
            return $final_result['Auto_increment'];
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
      public function getBannerCarousel() {
        try {
          $sql = "SELECT * FROM tb_banner WHERE ativo=1 AND posicao = 'ROTATIVO' ORDER BY data DESC";
          $result = Conexao::getInstancia()->query($sql);
          $lista = $result->fetchAll(PDO::FETCH_ASSOC);
          $f_lista = array();
          foreach ($lista as $l)
            $f_lista[] = $this->populaBanner($l);
          return $f_lista;
        } catch (Exception $e) {
          print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
      public function getBannerPromocional() {
        try {
          $sql = "SELECT * FROM tb_banner WHERE ativo=1 AND posicao = 'PROMOCAO' ORDER BY data DESC LIMIT 1";
          $result = Conexao::getInstancia()->query($sql);
          $banner = $result->fetchObject('Banner');
          
          return $banner;
        } catch (Exception $e) {
          print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
      public function getBannerEquipe() {
        try {
          $sql = "SELECT * FROM tb_banner WHERE ativo=1 AND posicao = 'EQUIPE' ORDER BY data DESC LIMIT 1";
          $result = Conexao::getInstancia()->query($sql);
          $banner = $result->fetchObject('Banner');
          
          return $banner;
        } catch (Exception $e) {
          print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
      public function getBannersMural() {
        try {
          $sql = "SELECT * FROM tb_banner WHERE ativo=1 AND posicao = 'MURAL' ORDER BY data DESC LIMIT 4";
          $result = Conexao::getInstancia()->query($sql);
          $lista = $result->fetchAll(PDO::FETCH_ASSOC);
          $f_lista = array();
          foreach ($lista as $l)
            $f_lista[] = $this->populaBanner($l);
          return $f_lista;
        } catch (Exception $e) {
          print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
      private function populaBanner($row) {
        $banner = new Banner();
        $banner->setId_banner($row['id_banner']);
        $banner->setTitulo($row['titulo']);
        $banner->setLink($row['link']);
        $banner->setAlt($row['alt']);
        $banner->setImagem($row['imagem']);
        $banner->setPosicao($row['posicao']);
        $banner->setData($row['data']);
        $banner->setAtivo($row['ativo']);
        return $banner;
      }
      
   
      public function getBannerPorId($id) {
        try {
          $sql = "SELECT * FROM tb_banner WHERE id_banner=:id";
          $p_sql = Conexao::getInstancia()->prepare($sql);
          $p_sql->bindValue(":id", $id);
          $result = $p_sql->execute();
          return $this->populaBanner($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
          print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
   
      public function listarBannersPrincipais() {
        try {
            $sql = "SELECT * FROM tb_banner WHERE ativo=1 order by data desc LIMIT 2";
            $result = Conexao::getInstancia()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
 
            foreach ($lista as $l)
                $f_lista[] = $this->populaBanner($l);
 
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
      public function listarBanners() {
        try {
            $sql = "SELECT * FROM tb_banner WHERE ativo=1 order by data desc";
            $result = Conexao::getInstancia()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
 
            foreach ($lista as $l)
                $f_lista[] = $this->populaBanner($l);
 
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }


      public function salvarBanner($dadosFormulario, $dadosImagem){
        
        // Armazena os dados vindo do formul?rio
        $titulo       = $dadosFormulario['titulo_banner'];
        $link         = $dadosFormulario['link_banner'];
        $alt          = $dadosFormulario['alt_banner'];
        $imagem       = $dadosImagem['imagem_banner'];
        $data         = $dadosFormulario['data_banner'];
        $posicao      = $dadosFormulario['posicao_banner'];
        $ativo        = $dadosFormulario['ativo_banner'];

        // Se a foto estiver sido selecionada
        if (!empty($imagem["name"])) {
          $nomeImagem = $this->uploadImagem($imagem);
          
          try{
            $sql = "INSERT INTO tb_banner VALUES ( null,:titulo, :link, :alt, :imagem, :posicao, :data, :ativo)";
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue("titulo", $titulo);
            $p_sql->bindValue("link", $link);
            $p_sql->bindValue("alt", $alt);
            $p_sql->bindValue("imagem",  $nomeImagem);
            $p_sql->bindValue("posicao", $posicao);
            $p_sql->bindValue("data", $data);
            $p_sql->bindValue("ativo", $ativo);
            $result = $p_sql->execute();
            // Se os dados forem inseridos com sucesso
            if ($result){
              $msg = "Cadastro efetuado com sucesso!!!";
            }else{
              $msg = "Erro ao efetuar Cadastro!!!";
            }
            return $msg;
          }catch(Exception $e){
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde." . $e->getMessage();
          }
        }
      }
      
      public function excluirBanner($id) {
        try {
            $banner = $this->getBannerPorId($id);
            
            echo LIB_IMG_BANNERS.DS.$banner->getImagem();
            unlink(LIB_IMG_BANNERS.DS.$banner->getImagem());
            


            $sql = "DELETE FROM tb_banner WHERE id_banner=:id";
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $result = $p_sql->execute();
 
            return "Registro Excluído com Sucesso!";
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
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
          $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
     
        // Verifica se a altura da imagem ? maior que a altura permitida
        if($dimensoes[1] > $altura) {
          $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }

        // Verifica se o tamanho da imagem ? maior que o tamanho permitido
        if($imagem["size"] > $tamanho) {
          $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        }

        // Pega extens?o da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
   
        // Gera um nome ?nico para a imagem
        $nomeImagem = md5(uniqid(time())) . "." . $ext[1];
   
        // Caminho de onde ficar? a imagem
        $caminho_imagem = LIB_IMG_BANNERS.DS.$nomeImagem;
   
        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
        
        return $nomeImagem;
      }

  }
  ?>
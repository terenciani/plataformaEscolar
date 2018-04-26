<?php
  include_once 'admin/includes/Conexao.class.php';
  include_once 'admin/model/Noticia.class.php';
  
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
  }
  ?>
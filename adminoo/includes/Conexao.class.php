<?php
	class Conexao
	{
	    # Variável que guarda a conexão PDO.
	    protected static $instancia;
	    # Private construct - garante que a classe só possa ser instanciada internamente.
	    private function __construct()
	    {
	        # Informações sobre o banco de dados:
	        $db_host = "terenciani.com.br";
	        $db_nome = "teren671_bd_escola";
	        $db_usuario = "teren671_admin";
	        $db_senha = "152535";
	        $db_driver = "mysql";
	        # Informações sobre o sistema:
	        $sistema_titulo = "Escola Estadual Waldemir Barros da Silva";
	        $sistema_email = "marcelo.figtenrenciani@gmail.com";
	        try
	        {
	            # Atribui o objeto PDO à variável $db.
	            self::$instancia = new PDO("$db_driver:host=$db_host; dbname=$db_nome; charset=utf8", $db_usuario, $db_senha);
	            # Garante que o PDO lance exceções durante erros.
	            self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            # Garante que os dados sejam armazenados com codificação UFT-8.
	            self::$instancia->exec('SET NAMES utf8');
	        }
	        catch (PDOException $e)
	        {
	            # Envia um e-mail para o e-mail oficial do sistema, em caso de erro de conexão.
	            mail($sistema_email, "PDOException em $sistema_titulo", $e->getMessage());
	            # Então não carrega nada mais da página.
	            die("Connection Error: " . $e->getMessage());
	        }
	    }
	    # Método estático - acessível sem instanciação.
	    public static function getInstancia()
	    {
	        # Garante uma única instância. Se não existe uma conexão, criamos uma nova.
	        if (!self::$instancia)
	        {
	            new Conexao();
	        }
	        # Retorna a conexão.
	        return self::$instancia;
	    }
	}
?>
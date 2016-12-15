<?php

class Db {
    // criando uma instância para a classe
    private static $instance = null;
    private $conexao;
	private $query;
	private $dados;
	
	private $host = "localhost"; // Nome ou IP do Servidor
    private $user = "root"; // Usuário do Servidor MySQL
    private $senha = "root"; // Senha do Usuário MySQL
    private $banco = "fatec"; // Nome do seu Banco de Dados
	
    // Construtor privado: só a própria classe pode invocá-lo
    private function __construct()
    {
        try {
            $this->conexao = mysqli_connect($this->host,$this->user,$this->senha,$this->banco);
        } catch (Exception $e) {
            die("Erro na conexão com MySQL! " . $e->getMessage());
        }
    }

    // SINGLETON 
    static function getInstance()
    {
        // Verifica se  existe a instância
        if (self::$instance == NULL)
            self::$instance = new Db();   //  cria a instância 
        return self::$instance;                     //  não existe apenas retorna
    }

    function setCharset($charset) {
        mysqli_set_charset($this->conexao, $charset);
    }

	
	// função para executar a query sql
	function sql_query($query){
        if($this->dados = mysqli_query($this->conexao, $query)){
            return $this->dados;
        }else{
            die('Query Inválida: ' . mysqli_error());
        }        
     }
}

?>


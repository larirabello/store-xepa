<?php

class conexao {
    // Nas linhas abaixo você poderá colocar as informações do Banco de Dados.
    var $host = "localhost"; // Nome ou IP do Servidor
    var $user = "root"; // Usuário do Servidor MySQL
    var $senha = "root"; // Senha do Usuário MySQL
    var $banco = "fatec"; // Nome do seu Banco de Dados

    // Variáveis 
    var $query;
    var $con;
    var $dados;
	

	// Função para conexão com banco de dados.
	function conecta(){
		$this->con = @mysqli_connect($this->host,$this->user,$this->senha,$this->banco);
		// Conecta ao Banco de Dados
		if(!$this->con){
      		// Caso ocorra um erro, exibe uma mensagem com o erro
			die ("Problemas com a conexão");
		}
	}
	
	// função para executar a query sql
	 function sql_query($query){
         $this->conecta();
         if($this->dados = mysqli_query($this->con, $query)){
             $this->desconecta();
             return $this->dados;
         }else{
	     die('Comando SQL errado: ' . mysqli_error()." $query <br>");
             $this->desconecta();
         }        
     }

   	//Função para desconectar
     function desconecta(){
         return mysqli_close($this->con);
     }
}
?>
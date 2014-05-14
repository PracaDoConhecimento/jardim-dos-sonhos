<?php
include_once('connection.php');


Class Mensagem {

	private $conn = NULL;

	/**
	*	Constructor
	*/
	public function Mensagem() {
		$this->conn = new Conexao();
	}


	/**
	*	Cadastra mensagens
	*
	*	@param string $_msg
	*	@param string $_nome
	*	@param string $_email
	*
	*	@return none
	*/
	public function cadastrar($_msg, $_nome, $_email) {

		// abre a conexao com o BD
		$this->conn->Conectar();
		$sql = "INSERT INTO `mensagens` (`id`,`conteudo`,`autor_nome`,`autor_email`,`data_publicacao`) VALUES (NULL, '{$_msg}', '{$_nome}', '{$_email}', now());";
		$query = mysql_query($sql) or die(mysql_error());

		// fecha a conexao com o BD
		$this->conn->Desconectar();

		if ($query) {
			return true;	
		} else {
			return false;
		}
		
	}

	/**
	*	Pega uma lista de mensagens do bd
	*
	*	@param string $_msg
	*	@param string $_nome
	*	@param string $_email
	*
	*	@return none
	*/
	public function getListagem() {

		// abre a conexao com o BD
		$this->conn->Conectar();
		$sql = "SELECT * from `mensagens` ORDER BY data_publicacao DESC;";
		$query = mysql_query($sql) or die(mysql_error());
		$num_row = mysql_num_rows($query);

		if ($num_row) {			
			while($row = mysql_fetch_assoc($query)){
			     $rows[] = $row;
			}
			mysql_free_result($query);

			return $rows;
		} 
		else {
			return false;
		}

		// fecha a conexao com o BD
		$this->conn->Desconectar();

		
	}

	/**
	*	Pega um mensagen do bd a partir do id
	*
	*	@param string $_msg
	*	@param string $_nome
	*	@param string $_email
	*
	*	@return none
	*/
	public function getMensagem($_id) {

		// abre a conexao com o BD
		$this->conn->Conectar();


		// fecha a conexao com o BD
		//$this->conn->Desconectar();

	}





}

$mensagem = new Mensagem();

?>
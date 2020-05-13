<?php
class Usuario{
	private $id, $nome, $email, $login, $senha, $datacadastro, $ativo;

	public function getid(){
		return $this-> id;
	}
	public function getnome(){
		return $this-> nome;
	}
	public function getemail(){
		return $this-> email;
	}

	public function getlogin(){
		return $this-> login;

	}

	public function getdatacadastro(){
		return $this-> datacadastro;
	}

	public function getativo(){
		return $this-> ativo;
	}

	public function renovarSenha(){
		$this-> senha - "123456";
	}

	public function addusuario($nome, $email, $login, $senha){

		$this-> nome = $nome;
		$this-> email = $email;
		$this-> login = $login;
		$this-> senha = $senha;
		$this-> datacadastro = date("y-m-d");
		$this-> ativo = 0;
	}


}
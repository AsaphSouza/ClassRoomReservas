<?php
class Pessoa {
    private $nome;
    private $cpf;
    private $email;
    private $telefone = array();;

	public function __construct($nome, $cpf, $email, $telefone = null) {
	$this->nome = $nome;
    $this->cpf = $cpf;
    $this->email= $email;
	$this->telefone= $telefone;
}

public getNome() {return $this->nome;}
public setNome($nome) {$this->nome= $nome;}

public getCpf() {return $this->cpf;}
public setCpf($cpf) {$this->cpf= $cpf;}

public getEmail() {return $this->email;}
public setEmail($email) {$this->email= $email;}

public function addTelefone($telefone) {
	$this->telefone[] = $telefone;
}
}
?>	

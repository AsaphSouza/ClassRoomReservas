<?php
class Equipamento {
    private $idEquipamento;
    private $nome;
    private $disponibilidade;

	public function __construct($idEquipamento, $nome, $disponibilidade) {
		$this->idEquipamento = $idEquipamento;
		$this->nome = $nome;
		$this->disponibilidade = $disponibilidade;
}

public getIdEquipamento() { return $this->idEquipamento;}
public setIdEquipamento($idEquipamento) {$this->idEquipamento = $idEquipamento;}

public getNome() { return $this->nome;}
public setNome($nome) {$this->nome= $nome;}

public getDisponibilidade() { return $this->disponibilidade;}
public setDisponibilidade($disponibilidade) {$this->disponibilidade= $disponibilidade;}
?>

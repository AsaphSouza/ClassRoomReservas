<?php 
class Sala {
    private $idSala;
    private $bloco;
    private $tipo;
    private $status; 
    private $capacidade;

	 public function __construct($idSala, $bloco, $tipo, $status, $capacidade) {
 	$this->idSala = $idSala;
	$this->bloco = $bloco;
	$this->tipo = $tipo;
	$status->status = $status;
	$capacidade->capacidade = $capacidade;
 } 
 
 public getIdSala() { return $this->idSala; }
 public setIdSala($idSala) { $this->idSala = $idSala;}

 public getBloco() { return $this->bloco; }
 public setBloco($bloco) { $this->bloco = $bloco;}

 public getTipo() { return $this->tipo; }
 public setTipo($tipo) { $this->tipo = $tipo;}

 public getStatus() { return $this->status; }
 public setStatus($status) { $this->status = $status;}

 public getCapacidade() { return $this->capacidade; }
 public setCapacidade($capacidade) { $this->capacidade = $capacidade;}

}
?>

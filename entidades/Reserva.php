<?php
class Reserva {
    private $idReserva;
    private $pessoa;
    private $data;
    private $sala;
    private $dataReserva;
    private $horarioEntrada;
    private $horarioSaida;
    private $obs;
    private $equip = array();

	public function __construct($idReserva, $pessoa, $data, $sala, $dataReserva,
$horarioEntrada, $horarioSaida, $obs, $equip = null) {

		$this->idReserva= $idReserva;
		$this->pessoa = $pessoa;
	$this->data = $data;
	$this->sala = $sala;
	$this->dataReserva = $dataReserva;
	$this->horarioEntrada = $horarioentrada;
	$this->horarioSaida = $horarioSaida;
	$this->obs= $obs;
	$this->equip = $equip;
}

public getIdReserva() {return $this->idReserva;}
public setIdReserva($idReserva) {$this->idReserva = $idReserva;}

public getPessoa() {return $this->pessoa;}
public setPessoa($pessoa) {$this->pessoa = $pessoa;}

public getData() {return $this->data;}
public setData($data) {$this->data= $data;}

public getSala() {return $this->sala;}
public setSala($sala) {$this->sala= $sala;}

public getDataReserva() {return $this->dataReserva;}
public setDataReserva($dataReserva) {$this->dataReservada= $dataReserva;}

public getHorarioEntrada() {return $this->horarioEntrada;}
	public setHorarioEntrada($horarioEntrada) {$this->horarioEntrada = $horarioEntrada;}

public getHorarioSaida() {return $this->horarioSaida;}
public setHorarioSaida($horarioSaida) {$this->horarioSaida= $horarioSaida;}

public getObs() {return $this->obs;}
public setObs($obs) {$this->obs= $obs;}

public function addEquipamento($equipamento) {
	$this->equip[] = $equipamento;
	
}
?>

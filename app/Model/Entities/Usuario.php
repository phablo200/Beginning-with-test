<?php

namespace App\Model\Entities;


class Usuario {

	private $primeiroNome;
	private $segundoNome;

	public function __construct(){}


	public function setPrimeiroNome($primeiroNome) {
		$this->primeiroNome = trim($primeiroNome);
	}

	public function getPrimeiroNome() {
		return $this->primeiroNome;
	}

	public function setUltimoNome ($segundoNome) {
		$this->segundoNome = trim($segundoNome);
	}

	public function getUltimoNome () {
		return $this->segundoNome;
	}

	public function nomeCompleto () {
		return "$this->primeiroNome $this->segundoNome";
	}


	public function getVariaveis () {
		
		return [
			'primeiroNome' => $this->getPrimeiroNome(),
			'segundoNome'  => $this->getUltimoNome(),
			'nomeCompleto' => $this->nomeCompleto()
		];
	}


	
}
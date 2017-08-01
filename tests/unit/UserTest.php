<?php 


class UserTest extends \PHPUnit_Framework_TestCase {


	protected $user;

	public function setUp() {
		$this->user = new App\Model\Entities\Usuario();
	}


	public function testGetPrimeiroNome() {
		$this->user->setPrimeiroNome("Maria");
		$this->assertEquals($this->user->getPrimeiroNome(), 'Maria');
	}

	public function testGetSegundoNome () {
		$this->user->setUltimoNome("Jesus");
		$this->assertEquals($this->user->getUltimoNome(), 'Jesus');
	}


	public function testNomeCompleto () {
		//$usuario = new App\Model\Entities\Usuario();
		$this->user->setPrimeiroNome("Maria");
		$this->user->setUltimoNome("Jesus");
		$this->assertEquals($this->user->nomeCompleto(), "Maria Jesus");
	}

	public function testTrimFullName () {
		$this->user->setPrimeiroNome("Primeiro  ");
		$this->user->setUltimoNome("Nome    ");
		$this->assertEquals($this->user->nomeCompleto(), "Primeiro Nome");
	}


	public function testVariaveisArray () {
		$this->user->setPrimeiroNome("Primeiro");
		$this->user->setUltimoNome("Nome");
		$variaveis = $this->user->getVariaveis();
		$this->assertArrayHasKey('primeiroNome', $variaveis);
		$this->assertArrayHasKey('segundoNome', $variaveis);
		$this->assertEquals($variaveis['primeiroNome'], 'Primeiro');
	}



}
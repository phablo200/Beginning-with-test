<?php 


class UserTest extends \PHPUnit_Framework_TestCase {

	public function testGetPrimeiroNome() {
		$usuario = new App\Model\Entities\Usuario();
		$usuario->setPrimeiroNome("Maria");
		$this->assertEquals($usuario->getPrimeiroNome(), 'Maria');
	}


	public function testGetSegundoNome () {
		$usuario = new App\Model\Entities\Usuario();
		$usuario->setUltimoNome("Jesus");
		$this->assertEquals($usuario->getUltimoNome(), 'Jesus');
	}


	public function testNomeCompleto () {
		$usuario = new App\Model\Entities\Usuario();
		$usuario->setPrimeiroNome("Maria");
		$usuario->setUltimoNome("Jesus");
		$this->assertEquals($usuario->nomeCompleto(), "Maria Jesus");
	}

	public function testTrimFullName () {
		$usuario = new App\Model\Entities\Usuario();
		$usuario->setPrimeiroNome("Primeiro  ");
		$usuario->setUltimoNome("Nome    ");
		$this->assertEquals($usuario->nomeCompleto(), "Primeiro Nome");
	}


	public function testVariaveisArray () {

		$usuario = new App\Model\Entities\Usuario();
		$usuario->setPrimeiroNome("Primeiro");
		$usuario->setUltimoNome("Nome");
		$variaveis = $usuario->getVariaveis();
		$this->assertArrayHasKey('primeiroNome', $variaveis);
		$this->assertArrayHasKey('segundoNome', $variaveis);
		$this->assertEquals($variaveis['primeiroNome'], 'Primeiro');
	}
}
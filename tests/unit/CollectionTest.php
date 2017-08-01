<?php 


class CollectionTest extends \PHPUnit_Framework_TestCase {


	/** @test */
	public function testCollectionEmpty () {
		$collection = new App\Support\Collection;
		$this->assertEmpty($collection->get());
	}

	/** @test */
	public function testCountCollection () {
		$collection = new App\Support\Collection([
			'one', 'two', 'tree'
		]);

		$this->assertEquals(3, $collection->count());
	} 

	/** @test */
	public function testItemsRetornados () {
		$collection = new App\Support\Collection([
			'one', 'two', 'three'
		]);

		$this->assertCount(3, $collection->get());
		$this->assertEquals($collection->get()[0], 'one');
		$this->assertEquals($collection->get()[1], 'two');
		$this->assertEquals($collection->get()[2], 'three');
	}

	/** @test */
	public function testCollectionIstanceOfIterator () 
	{
		$collection = new App\Support\Collection;
		$this->assertInstanceOf(IteratorAggregate::class, $collection);
	}

	/** @test */
	public function testCollecionCanIterated()
	{
		$collection = new \App\Support\Collection([
			'one', 'two', 'three'
		]);

		$items = [];

		foreach ($collection as $item) {
			$items[] = $item;
		}

		$this->assertCount(3, $items);
		$this->assertInstanceOf(ArrayIterator::class, $collection->getIterator());
	}

	/** @test */
	public function testCanBeMergeWiThAnotherCollection()
	{

		$collection1 = new \App\Support\Collection([
			'one', 'two'
		]);

		$collection2 = new \App\Support\Collection([
			'three', 'four', 'five'
		]);

		$newCollection = $collection1->merge($collection2);
		$this->assertCount(5, $newCollection->get());
		$this->assertEquals(5, $newCollection->count());
	}

	/** @test */
	public function testJsonEncodedCollection()
	{
		$collection = new \App\Support\Collection([
			['username' => 'alex'],
			['username' => 'billy']
		]);

		$encoded = json_encode([
			['username' => 'alex'],
			['username' => 'billy']
		]);

		$this->assertInternalType('string', $collection->toJson());
		$this->assertEquals($encoded, $collection->toJson());
	}

	public function testCanSerialize()
	{
		$collection = new \App\Support\Collection([
			['username' => 'alex'],
			['username' => 'billy']
		]);


		$encoded = json_encode([
			['username' => 'alex'],
			['username' => 'billy']
		]);

		$encodedCollection = json_encode($collection);

		$this->assertInternalType('string', $encodedCollection);
		$this->assertEquals($encoded, $encodedCollection);
	}
}
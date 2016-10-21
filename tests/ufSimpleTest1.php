<?php
use PHPUnit\Framework\TestCase;
use Percolation\QuickUnion;


class ufSimpleTest1 extends TestCase{
	/**
	 *
	 */
	public function testUnionFind5(){
		$qu=new QuickUnion(5);
	        $this->assertEquals($qu->connected(0,1),false,'At the start all of the items are not connected (1)!');
	        $this->assertEquals($qu->connected(2,3),false,'At the start all of the items are not connected (2)!');
		$qu->union(0,1);
		$qu->union(1,2);
	        $this->assertEquals($qu->connected(0,2),true,'The items should be connected via intermediate points (3.1)');
	        $this->assertEquals($qu->connected(0,3),false,'Wrong connected state (3.2)');
	        $this->assertEquals($qu->connected(0,4),false,'Wrong connected state (3.2)');
		$qu->union(2,4);
		$qu->union(4,3);
	        $this->assertEquals($qu->connected(0,1),true,'The items should be connected via intermediate points (4.1)');
	        $this->assertEquals($qu->connected(0,2),true,'The items should be connected via intermediate points (4.2)');
	        $this->assertEquals($qu->connected(0,3),true,'The items should be connected via intermediate points (4.3)');
	        $this->assertEquals($qu->connected(0,4),true,'The items should be connected via intermediate points (4.4)');
		}
	/**
	 *
	 */
	public function testUnionFind100(){
		$qu=new QuickUnion(100);
		for($i=0; $i<=98; $i++){
			$this->assertEquals($qu->connected($i,$i+1),false,'The items ('.$i.','.($i+1).') should not be connected at start (1)!');
			}
		//
		for($i=0; $i<=98; $i++){
			$qu->union($i,$i+1);
			}
		$this->assertEquals($qu->connected(0,24),True,'The items 0,24 should be connected (2.1)!');
		$this->assertEquals($qu->connected(0,49),True,'The items 0,49 should be connected (2.2)!');
		$this->assertEquals($qu->connected(0,99),True,'The items 0,99 should be connected (2.3)!');
		}
	}


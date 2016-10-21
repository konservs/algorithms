<?php
use PHPUnit\Framework\TestCase;
use Percolation\QuickUnion;


class ufSimpleTest1 extends TestCase{
	/**
	 *
	 */
	public function testUnionFind1(){
		$qu=new QuickUnion(5);
	        $this->assertEquals($qu->connected(0,1),false,'At the start all of the items are not connected (1)!');
	        $this->assertEquals($qu->connected(2,3),false,'At the start all of the items are not connected (2)!');
		$qu->union(0,1);
		$qu->union(1,2);
	        $this->assertEquals($qu->connected(0,2),true,'The items should be connected via intermediate points (3)');
		}
	}

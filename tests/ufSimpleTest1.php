<?php
use PHPUnit\Framework\TestCase;
use Percolation\QuickUnion;


class ufSimpleTest1 extends TestCase{
	public function testUnionFind(){
		$qu=new QuickUnion(5);
	        $this->assertEquals($qu->connected(0,1),false);
		}
	}

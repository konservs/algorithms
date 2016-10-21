<?php
use PHPUnit\Framework\TestCase;
use Percolation\QuickUnion;


class ufSimpleTest2 extends TestCase{
	public function testUnionFind2(){
		$qu=new QuickUnion(5);
	        $this->assertEquals($qu->connected(0,1),false);
		}
	}

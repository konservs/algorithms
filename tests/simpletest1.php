<?php
use PHPUnit\Framework\TestCase;
use Percolation\Percolation;


class SimpleTest1 extends TestCase{
	public function testPercolationYes(){
		$perc1=new Percolation(1);
	        $this->assertEquals($perc1->percolates(),false);
		$perc1->open(1,1);
	        $this->assertEquals($perc1->percolates(),true);
		}
	}

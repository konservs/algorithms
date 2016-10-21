<?php
use PHPUnit\Framework\TestCase;
use Percolation\Percolation;


class SimpleTest2 extends TestCase{
	public function testPercolationYes(){
		$perc1=new Percolation(2);
	        $this->assertEquals($perc1->percolates(),false);
		$perc1->open(1,1);
	        $this->assertEquals($perc1->percolates(),false);
		$perc1->open(2,1);
	        $this->assertEquals($perc1->percolates(),false);
		$perc1->open(1,2);
	        $this->assertEquals($perc1->percolates(),true);
		$perc1->open(2,2);
	        $this->assertEquals($perc1->percolates(),true);
		}
	}

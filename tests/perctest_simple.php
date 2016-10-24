<?php
use PHPUnit\Framework\TestCase;
use Percolation\Percolation;


class Perctest_simple extends TestCase{
	/**
	 *
	 */
	public function testPercolationYes(){
		$perc1=new Percolation(1);
	        $this->assertEquals($perc1->percolates(),false);
		$perc1->open(1,1);
	        $this->assertEquals($perc1->percolates(),true);
		}
	}

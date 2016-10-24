<?php
use PHPUnit\Framework\TestCase;
use Percolation\Percolation;


class Perctest_Double extends TestCase{
	public function testPercolationYes(){
		$perc1=new Percolation(2);
	        $this->assertEquals($perc1->percolates(),false,'2x2 empty grid does not percolates! (1)');
		$perc1->open(1,1);
	        $this->assertEquals($perc1->percolates(),false,'The grid does not percolates! (2)');
		$perc1->open(1,2);
	        $this->assertEquals($perc1->percolates(),false,'The grid does not percolates! (3)');
		$perc1->open(2,1);
	        $this->assertEquals($perc1->percolates(),true,'The grid percolates! (4)');
		$perc1->open(2,2);
	        $this->assertEquals($perc1->percolates(),true,'The grid percolates! (5)');
		}
	}

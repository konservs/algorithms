<?php
use PHPUnit\Framework\TestCase;
use Percolation\Percolation;

class Perctest_Exceptions extends TestCase{
	/**
	 *
	 */
	public function testExceptionConstructor1(){
	        $this->expectException(Exception::class);
		$perc1=new Percolation(-1);
		}
	/**
	 *
	 */
	public function testExceptionConstructor2(){
		$perc1=new Percolation(5);
		}
	/**
	 *
	 */
	public function testExceptionConstructor3(){
	        $this->expectException(Exception::class);
		$perc1=new Percolation(-1000);
		}
	/**
	 *
	 */
	public function testExceptionConstructor4(){
	        $this->expectException(Exception::class);
		$perc1=new Percolation('bla-bla-bla');
		}
	}

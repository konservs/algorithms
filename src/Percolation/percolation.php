<?php
namespace Percolation;
use Percolation\Quickunion;

class Percolation {
	private $uf1;
	private $uf2;
	private $n;
	private $grid;
	/**
	 * Create n-by-n grid, with all sites blocked
	 */
	public function __construct($n){
		if ($n <= 0) {
			throw new IllegalArgumentException("N should be > 0");
			}
		$this->n = $n;
		$this->grid = [];
		for ($i = 0; $i < $n; $i++) {
			$this->grid[$i]=[];
			for ($j = 0; $j < $n; $j++) {
				$this->grid[$i][$j] = false;
				}
			}
		$this->uf = new QuickUnion($n*$n+2);
		$this->uf2 = new QuickUnion($n*$n+2);
		}
	/**
	 * open site (row i, column j) if it is not open already
	 */
	public function open($i, $j) {
		}
	/**
	 * is site (row i, column j) open?
	 */
	public function isOpen($i, $j) {
		}
	/**
	 * is site (row i, column j) full?
	 */
	public function isFull($i, $j) {
		}
	/**
	 * does the system percolate?
	 */
	public function percolates() {
		}
	}

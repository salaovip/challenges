<?php

class Matrix
{
	private $matrix = [];
	private $biggestRegion = 0;
	private $verifiedCell = [];

	
	public function __construct()
	{
		$stdin = fopen("php://stdin", "r");
		fscanf($stdin, "%d\n", $this->lines);
		fscanf($stdin, "%d\n", $this->columns);

		
		for ($i = 0; $i < $this->lines; $i++) {
		    fscanf($stdin, "%[^\n]", $matrix_temp);
		    $this->matrix[] = array_map('intval', preg_split('/ /', $matrix_temp, -1, PREG_SPLIT_NO_EMPTY));		 

		    for ($column=0; $column < $this->columns; $column++) {
		    	$this->verifiedCell[$i][$column] = false;
		    }
		}

		fclose($stdin);
	}

	public function markAsVerifiedCell($line, $column) {		
		$this->verifiedCell[$line][$column] = true;
	}

	private function analyzeRegion($line, $column) {
		if (!isset($this->matrix[$line][$column])) {
			return 0;
		}

		if ($this->verifiedCell[$line][$column]) {
			return 0;
		}

		if ($this->matrix[$line][$column] === 0) {
			return 0;	
		}

		$this->markAsVerifiedCell($line, $column);
		$this->actualRegion++;
		
		$this->analyzeRegion($line, $column+1); //direita		
		$this->analyzeRegion($line+1, $column+1); // direita em baixo		
		$this->analyzeRegion($line+1, $column); //embaixo		
		$this->analyzeRegion($line+1, $column-1); //embaixo esquerda
		$this->analyzeRegion($line, $column-1); //esquerda
		$this->analyzeRegion($line-1, $column-1); //esquerda cima
		$this->analyzeRegion($line-1, $column); //cima
		$this->analyzeRegion($line-1, $column+1); //direita cima

		return 1;
	}

	// Complete the connectedCell function below.
	public function connectedCell() {

	    $actualRegion = 0;
	    $this->biggestRegion = 0;

	    for ($line=0; $line < $this->lines ; $line++) { 
	    	for ($column=0; $column < $this->columns; $column++) { 	    		
	    		if ($this->matrix[$line][$column] === 1  && !$this->verifiedCell[$line][$column]) {
	    			$this->actualRegion = 0;
	    			$this->analyzeRegion($line, $column, 1);

	    			if ($this->biggestRegion < $this->actualRegion) {
	    				$this->biggestRegion = $this->actualRegion;
	    			}
	    		}
	    		$this->actualRegion = 0;
	    	}
	    }

	    return $this->biggestRegion;
	}


}

$matrix = new Matrix();
$result = $matrix->connectedCell();
print($result."\n");

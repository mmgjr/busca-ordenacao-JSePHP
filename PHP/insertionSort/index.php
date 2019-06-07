<?php 
require "Carros.php";

	$carros = array(
		new Carros('Lamborghini',1000000),
		new Carros('Jipe',46000),
		new Carros('Brasília',16000),
		new Carros('Smart',47000),
		new Carros('Fusca',17000)
	);

	$tamanho = count($carros);

	$carrosOrdenados = insertionSort($carros,$tamanho);
	imprimir($carrosOrdenados);

	function insertionSort($carros,$tamanho){
		for ($atual = 1; $atual < $tamanho; $atual++) { 
		
		$analise = $atual;
		
			while ($analise > 0 && $carros[$analise]->getPreco() < $carros[$analise - 1]->getPreco()) {

				$primeiro = $carros[$analise];
				$segundo = $carros[$analise-1];
				$carros[$analise] = $segundo;
				$carros[$analise-1] = $primeiro;
				
				$analise--;
			}	
		}
		return $carros;
	}
	

	function imprimir($carros){
		foreach ($carros as $p => $carro) {
			echo $carro->getNome()." custa: ".$carro->getPreco()." posição: ".$p."<br>";
		}
	}

 ?>
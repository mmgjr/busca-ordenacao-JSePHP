<?php 
require "Carros.php";

$carros = array(
	new Carros('Jipe',30000),
	new Carros('Ferrari',1000000),
	new Carros('Fusca',15000),
	new Carros('Gol',25000),
	new Carros('Fiat',16000)
);

$length = count($carros);
$maisBarato = 0;


for ($atual=0; $atual < $length; $atual++) { 
	if($carros[$atual]->getPreco() < $carros[$maisBarato]->getPreco()){
		$maisBarato = $atual;
	}
}

echo "Posição: ".$maisBarato;
echo "<br>";
echo "O carro ".$carros[$maisBarato]->getNome()." é o mais barato,custando: ".$carros[$maisBarato]->getPreco();
 ?>
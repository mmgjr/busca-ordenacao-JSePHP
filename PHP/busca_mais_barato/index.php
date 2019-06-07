<?php 

$produtos = array(1000000,46000,16000,47000,17000);

$arrayLength = count($produtos);//Tamanho do array
$barato = 0;

for ($atual = 0; $atual < $arrayLength; $atual++) { 
	if($produtos[$atual] < $produtos[$barato]){
		$barato = $atual;
	}	
}

echo "Posição: ".$barato;
echo "<br>";
echo "Valor do produto mais barato: ".$produtos[$barato];

 ?>
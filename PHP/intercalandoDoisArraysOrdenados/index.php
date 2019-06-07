<?php 
require 'Notas.php';

$notas1 = array(
	new Notas("andre",4),
	new Notas("maria",5),
	new Notas("carlos",8.5),
	new Notas("paulo",9)
);
$notas2 = array(
	new Notas("jonas",3),
	new Notas("juliana",6.7),
	new Notas("guilherme",7),
	new Notas("lucia",9.3),
	new Notas("ana",10)
);

$novaLista = intercalar($notas1,$notas2);
imprimir($novaLista);


function intercalar($notas1,$notas2){
	//$total = (count($notas1) + count($notas2));
	
	$novoArray = array();

	$atualLista1 = 0;
	$atualLista2 = 0;
	$atual = 0;

	while ($atualLista1 < count($notas1) && $atualLista2 < count($notas2)) {
			$nota1 = $notas1[$atualLista1];
			$nota2 = $notas2[$atualLista2];

		if($notas1[$atualLista1]->getNota() < $notas2[$atualLista2]->getNota()){
			$novoArray[$atual] = $nota1;
			$atualLista1++;
		}else{
			$novoArray[$atual] = $nota2;
			$atualLista2++;
		}
		$atual++;
	}

	while ($atualLista1 < count($notas1)) {
		$novoArray[$atual] = $notas1[$atualLista1];
		$atual++;
		$atualLista1++;
	}
	while ($atualLista2 < count($notas2)) {
		$novoArray[$atual] = $notas2[$atualLista2];
		$atual++;
		$atualLista2++;
	}

	return $novoArray;
}






function imprimir($novaLista){
	foreach ($novaLista as $n) {
		echo $n->getNome()." ".$n->getNota()."<br>";
	}
}


 ?>

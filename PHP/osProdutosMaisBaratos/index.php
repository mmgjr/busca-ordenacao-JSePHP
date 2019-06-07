<?php 

require "Produtos.php";


	$produtos = array(
		new Produtos("AND1",150),
		new Produtos("Nike",750),
		new Produtos("Adidas",200),
		new Produtos("Olympikus",199.99),
		new Produtos("Mizuno",550)
	);

	ordenar($produtos);

	foreach ($produtos as $key => $p) {
		echo "Nome: ".$p->getNome()." ,preço: ".$p->getPreco();
		echo "<br>";
	}



	function ordenar($produtos){
		//qtd de elementos no array
		$length = count($produtos);
		
		for ($atual=0; $atual < $length; $atual++) { 
			
			$menor = buscaMenor($produtos,$atual,$length);
			
			$produtoAtual = $produtos[$atual];
			$produtoMenor = $produtos[$menor];
			
			$produtos[$atual] = $produtoMenor;
			$produtos[$menor] =$produtoAtual;
		}
	}
	
	function buscaMenor($produtos,$ini,$length){
		
		$barato = $ini;
		
		for ($atual=$ini; $atual < $length; $atual++) { 
				
			if($produtos[$atual]->getPreco() < $produtos[$barato]->getPreco()){
				$barato = $atual;
			}

		}
		return $barato;
	}


	

 ?>
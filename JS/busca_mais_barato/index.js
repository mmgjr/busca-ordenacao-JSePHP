function maisBarato(){
	
	var produtos = [50000,46000,16000,47000,17000,1000000];

	var barato = 0;

	for (var atual = 0; atual < produtos.length; atual++) {
		if(produtos[atual] < produtos[barato]){
			barato = atual;
		}
	}

	console.log("Posição: "+barato);
	console.log("Valor do produto: "+produtos[barato]);

}

maisBarato();	
var Carros = require('./Carros.js');


function buscaMenorPreco(){
	var carros = [
		new Carros("Ferrari",1000000),
		new Carros("Fusca",13000),
		new Carros("Gol",20000),
		new Carros("Opalla",18000),
		new Carros("Fiat",17000)
	];


	let barato = 0;
	
	carros.forEach((carro,atual)=>{

		if(carros[atual].preco < carros[barato].preco){
				
			barato = atual;
		}


	});


		for (let atual = 0; atual < carros.lenght; atual++) {
			

		}
		
		return barato;
	
}


var res = buscaMenorPreco();
console.log(res);	




function abas(dia , numero){
	let elemento = document.querySelectorAll(dia);
	let total = document.querySelectorAll('.show');
	let status = document.querySelectorAll('.active');
	let abas = document.querySelectorAll('.abasLink');
	let contador = document.getElementById('total');

	for (var i = 0; i < status.length; i++) {
		status[i].classList.remove('active');
	}
	for (var i = 0 ; i < total.length ; i++) {
		total[i].classList.add('inicio');
		total[i].classList.remove('show');
		//elemento[i].classList.remove('inicio');
		//console.log(elemento[i]);
	}
	for (var i = 0 ; i < elemento.length ; i++) {
		elemento[i].classList.add('show');
		elemento[i].classList.remove('inicio');
		//console.log(elemento[i]);
	}
	abas[numero].classList.add('active');
	total = document.querySelectorAll('.show');
	contador.innerHTML = "TOTAL: " + total.length ;
	console.log(contador.innerHTML);
	
}

function mostrar(nome){
	let quadro = document.getElementById(nome);
	if(quadro.classList.contains('hide')){
		quadro.classList.remove('hide');
	}else{
		quadro.classList.add('hide');
	};
	//
}
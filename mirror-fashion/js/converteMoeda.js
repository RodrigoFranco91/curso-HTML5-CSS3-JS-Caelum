function numberParaReal(numero){
	return formatado = "R$ " + numero.toFixed(2).replace(".", ",");
}
 
function realParaNumber(texto){
	return valor = parseFloat(texto.replace("R$ ","").replace(",","."));
}
 
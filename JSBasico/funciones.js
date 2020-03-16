//funciones declarativas

function saludar(nombre) {
	console.log(`Hola ${nombre}`);
}

saludar('Christian');

//funciones de expresion

var nombre = function(nombre){
    console.log(`Hola ${nombre}`)
}

nombre('Christian');
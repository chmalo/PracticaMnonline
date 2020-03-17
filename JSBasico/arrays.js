//arrays

var frutas = ["Manzana", "Pera", "Cambur", "Cereza", "Fresa"];

console.log(frutas);



//condicionales

var estudiantes = ["Maria", "Christian", "Daniel"];

function saludarEstudiante(estudiante) {
    console.log('hola, ' + estudiante);
}

for (var i = 0; i < estudiante.length; i++){
    saludarEstudiante(estudiantes[i]);
}


for (var estudiante of estudiantes){
    saludarEstudiante(estudiante);
}



var estudiantes = ["Maria", "Christian", "Daniel", "Rosa"];

function saludarEstudiante(estudiante) {
    console.log('hola, ' + estudiante);
}

while (estudiantes.length > 0) {
    console.log(estudiantes);
   var estudiante = estudiantes.shift();
   saludarEstudiante(estudiante); 
}


//objects

var miAuto = {
    marca: "Toyota",
    modelo: "Corolla",
    annio: 2020,
    detalleDelAuto: function () {
        console.log('Auto ' + this.modelo, this.annio);
    }
};


//funcion construct
function Auto(marca, modelo, annio) {
    this.marca = marca;
    this.modelo = modelo;
    this.annio = annio;    
}

var autoNuevo = new Auto("Ford", "Mustang", 2020);
var autoNuevo2 = new Auto("Tesla", "Model x", 2019);
var autoNuevo3 = new Auto("Toyota", "Corolla", 2020);



//recorrido de arrays

var articulos = [
    {nombre: "Bici", costo: 3000},
    {nombre: "Tv", costo: 2500},
    {nombre: "Libro", costo: 320},
    {nombre: "Celular", costo: 10000},
    {nombre: "Laptop", costo: 20000},
    {nombre: "Teclado", costo: 500},
    {nombre: "Audifonos", costo: 1700},
];

//filtro de array 
var articulosFiltrados = articulos.filter(function(articulo) {
    return articulo.costo <= 500    
});

//metodo map para mapear los arrays
var nombreArticulos = articulos.map(function(articulo) {
    return articulo.nombre 
});

//metodo find para buscar en arrays en especifico

var encuentraArticulo = articulos.find(function(articulo) {
    return articulo.nombre === "Laptop";    
});


//metodo forEach
articulos.forEach(function (articulo) {
    console.log(articulo.nombre)    
});

//metodo some valida verdadero o falso

var articulosBaratos = articulos.some(function(articulo) {
    return articulo.costo <= 700;    
})
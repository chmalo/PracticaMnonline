var piedra = 0;
var papel = 1;
var tijera = 2;
var pcString;


function juego(mijugada){
    var jugadaPc = Math.floor(Math.random() * 3);
    if (jugadaPc === 0){
        pcString = 'piedra';
    } else if (jugadaPc === 1){
        pcString = 'papel';
    }else {
        pcString = 'tijera';
    }

    var result = mijugada - jugadaPc;
if (result === 1 || result === -2){
    console.log("Ganaste, la PC escojio " + pcString);
}else if (result === -1 || result === 2){
    console.log("Perdiste, la PC escojio " + pcString);
} else {
    console.log("Empataste, la PC escojio " + pcString);
}

}

juego(piedra);





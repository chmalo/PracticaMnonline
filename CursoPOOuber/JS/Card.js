class Card extends Payment {
    constructor(id, numTarjeta, cvv, fechaTarjeta){
        super(id);
        this.numTarjeta = numTarjeta;
        this.cvv = cvv;
        this.fechaTarjeta = fechaTarjeta;
    }
}

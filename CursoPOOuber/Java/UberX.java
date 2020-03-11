class UberX extends Car {
    String marca;
    String modelo;

    public UberX(String licencia, Account driver, String marca, String modelo){
        super(licencia, driver);
        this.marca = marca;
        this.modelo = modelo;
    }
}
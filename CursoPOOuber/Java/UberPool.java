class UberPool extends Car {
    String marca;
    String modelo;

    public UberPool(String licencia, Account driver, String marca, String modelo){
        super(licencia, driver);
        this.marca = marca;
        this.modelo = modelo;
    }
}
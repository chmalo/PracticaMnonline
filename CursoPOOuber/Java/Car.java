class Car {
    Interger id;
    String licencia;
    Account driver;
    Interger pasajeros;

    public Car(String licencia, Account driver){
        this.licencia = licencia;
        this.driver = driver;
    }

    void printDataCar(){
        system.out.println("License:" + licencia "Name Driver:" + driver.name);
    }
}

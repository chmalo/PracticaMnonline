class Car {
    private Interger id;
    private String licencia;
    private Account driver;
    private Interger pasajeros;

    public Car(String licencia, Account driver){
        this.licencia = licencia;
        this.driver = driver;
    }

    void printDataCar(){
        if(pasajeros != null){
            system.out.println("License:" + licencia "Name Driver:" + driver.name + "Pasajeros: " + pasajeros);
        }
    }

    public Interger getPasajeros(){
        return pasajeros;
    }

    public void setPasajeros(Integer pasajeros){
        if(pasajeros == 4){
            this.pasajeros = pasajeros;
        }else{
            system.out.println("Necesita tener 4 pasajeros");
        }
    }

    

}

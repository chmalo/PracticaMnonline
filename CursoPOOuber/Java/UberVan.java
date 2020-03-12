import java.util.ArrayList;
import java.util.Map;

class UberVan extends Car {
    Map<String, Map<String, Integer>> typeCarAccepted;
    Map<String> seatsMaterial;
    private Integer pasajeros;

    public UberVan(String licencia, Account driver, Integer pasajeros){
        super(licencia, driver);
        this.pasajeros = pasajeros;
    }

    public UberVan(String licencia, Account driver, Map<String, 
    Map<String, Integer>> typeCarAccepted, 
    Map<String> seatsMaterial){
        super(licencia, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial; 
    }
    
    @Override
    public void setPasajeros(Integer pasajeros){
        if(pasajeros == 6){
            this.pasajeros = pasajeros;
        }else{
            system.out.println("Necesita tener 6 pasajeros");
        }
    }

}
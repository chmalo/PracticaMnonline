import java.util.ArrayList;
import java.util.Map;

class UberBlack extends Car {
    Map<String, ArrayList<String, Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    public UberBlack(String licencia, Account driver, Map<String, 
    ArrayList<String, Integer>> typeCarAccepted, 
    ArrayList<String> seatsMaterial){
        super(licencia, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
        
    }
}
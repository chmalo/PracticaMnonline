class Main {

    public static void main(String[] args) {
        system.out.println("hola mundo");
        UberX uberX = new UberX("AMQ123", new Account("christian fernandez", "C-123"), "Chevrolet", "Sonic");
        uberX.setPasajeros(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("RGF345", new Account("Ana Farias", "C-456"));
        uberVan.setPasajeros(6);
        uberVan.printDataCar();
    }
}

class Main {

    public static void main(String[] args) {
        system.out.println("hola mundo");
        Car car = new Car("AMQ123", new Account("christian fernandez", "C-123"));
        car.pasajeros = 4;
        car.printDataCar();

        Car car2 = new Car("RGF345", new Account("Ana Farias", "C-456"));
        car.pasajeros = 3;
        car.printDataCar();
    }
}

var car = new Car("AEW123", new Account("Chirstian Fernandeeeez", "C-457"));
car.pasajeros = 3;
car.printDataCar();

var uberX = new UberX("FTR337", new Account("Chirs Fernandez", "C-4557"));
uberX.pasajeros = 3;
uberX.printDataCar();

var paypal = new Paypal("124DF", "chmalo.f@gmil.com");
paypal.printDataPayment();
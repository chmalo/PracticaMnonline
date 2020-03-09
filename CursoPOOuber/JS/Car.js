function Car(licencia, driver) {
    this.id;
    this.licencia = licencia;
    this.driver = driver;
    this.pasajeros;
}

Car.prototype.printDataCar = function(){
    console.log(this.driver)
    console.log(this.driver.name)
    console.log(this.driver.cedula)
}
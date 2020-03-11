from car import Car

class UberPool(Car):
    marca = str
    modelo = str

    def __init__(self, licencia, driver, marca, modelo):
        super.__init__(licencia, driver)
        self.marca = marca
        self.modelo = modelo
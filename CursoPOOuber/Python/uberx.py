from car import Car

class UberX(Car):
    marca = str
    modelo = str

    def __init__(self, licencia, driver, marca, modelo):
        super.__init__(licencia, driver)
        self.marca = marca
        self.modelo = modelo
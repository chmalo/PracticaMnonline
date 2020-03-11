from car import Car

class UberVan(Car):
    typeCarAccepted = []
    seatsMaterial = []

    def __init__(self, licencia, driver, typeCarAccepted, seatsMaterial):
        super.__init__(licencia, driver)
        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterial = seatsMaterial
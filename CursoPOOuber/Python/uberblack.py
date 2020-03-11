from car import Car

class UberBlack(Car):
    typeCarAccepted = []
    seatsMaterial = []

    def __init__(self, licencia, driver, typeCarAccepted, seatsMaterial):
        super.__init__(licencia, driver)
        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterial = seatsMaterial
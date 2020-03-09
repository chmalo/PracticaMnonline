from account import Account

class Car: 
    id         = int
    licencia   = str
    driver     = Account("","")
    pasajeros  = int

    def __init__(self, licencia, driver):
        self.licencia   = licencia
        self.driver     = driver
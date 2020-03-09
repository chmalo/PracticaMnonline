class Account:
    id        = int
    name      = str
    cedula    = str
    email     = str
    password  = str
    
    def __init__(self, name, cedula):
        self.name  = name
        self.cedula = cedula
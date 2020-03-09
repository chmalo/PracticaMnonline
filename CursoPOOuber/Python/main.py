from car import Car
from account import Account

if __name__ == "__main__":
    print("hola mundo")
    
    car = Car("AMW123", Account("Christian Fernandez", "C-653"))
    print(vars(car))
    print(vars(car.driver))

    car2 = Car("DRT345", Account("Marcos Lopez", "C-534"))
    print(vars(car2))
    print(vars(car2.driver))
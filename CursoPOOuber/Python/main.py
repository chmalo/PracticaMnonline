from car import Car

if __name__ == "__main__":
    print("hola mundo")
    car = Car()
    car.licencia = "AMW123"
    car.driver = "Christian Fernandez"
    print(vars(car))

    car2 = Car()
    car2.licencia = "DRT345"
    car2.driver = "Marcos Lopez"
    print(vars(car2))
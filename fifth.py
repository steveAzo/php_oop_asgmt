class MyCalculator:
    def __init__(self, value1, value2):
        self.value1 = value1
        self.value2 = value2

    def add(self):
        return self.value1 + self.value2

    def subtract(self):
        return self.value1 - self.value2

    def multiply(self):
        return self.value1 * self.value2

    def divide(self):
        if self.value2 != 0:
            return self.value1 / self.value2
        else:
            return "Cannot divide by zero"

mycalc = MyCalculator(45, 8)
print(mycalc.add())       
print(mycalc.subtract())  
print(mycalc.multiply())  
print(mycalc.divide())    

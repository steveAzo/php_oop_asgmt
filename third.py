from abc import ABC, abstractmethod

class Shape(ABC):
    @abstractmethod
    def calculateArea(self):
        pass



class Triangle(Shape):
    def __init__(self, base, height):
        self.base = base
        self.height = height

    def calculateArea(self):
        return 0.5 * self.base * self.height

class Rectangle(Shape):
    def __init__(self, length, width):
        self.length = length
        self.width = width

    def calculateArea(self):
        return self.length * self.width

rectangle = Rectangle(4, 6)
triangle = Triangle(4, 9)


print("Area of Triangle:", triangle.calculateArea())
print("Area Rectangle:", rectangle.calculateArea())

class Person :
    def __init__(self, name, age, occupation):
        self.__name = name
        self.__age = age
        self.__occupation = occupation

    def set_name(self, name):
        self.__name = name

    def set_age(self, age):
        self.__age = age
        
    def set_occupation(self, occupation):
        self.__occupation = occupation

    def get_name(self):
        return self.__name

    def get_age(self):
        return self.__age

    def get_occupation(self):
        return self.__occupation

#I am now going to access these names outside of the class


person1 = Person("Stephen", 100, "Web Developer")

print("Name: ", person1.get_name())
print("Age: ", person1.get_age())
print("Occupation:", person1.get_occupation())


#Below is an example of how the setters work
#Setters are used for updating or giving attributes new values

person1.set_age(20)
person1.set_occupation("Doctor")

print("Age", person1.get_age())
print("Occupation", person1.get_occupation())

# Program made by Christopher Fallas Aguero
# Program tests case senstivity......

#Initalize variables
height = 17
Height = 0

int = "Hi there"

xInt = 10
xFloat = 10.0
xComplex = 10j
sStr = "Hello There"
xList = ["Run", "Ran", "Runs"]
xTuple = ("Stop", "Go", "Wait")
sBreak = "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"

#Print statements
#Part 1
print(sBreak)
print("Python is case-sensitive. The same name with different cases can have different values.")
print("For example, let's use the name height:")
print(f"Uppercase 'Height' = {Height}. Lowercase 'height' = {height}.")

#Part 2
print(sBreak)
print("Python does not have keywords for date types.")
print("Instead, the data type is assigned depending on\nthe value it's initalized with.")
print(f"This means that an identifier can be a data type:")
print(f"Variable 'int' = {int}")

#Part 3
print(sBreak)
print("Python has four main data types. ")
print("--------Numeric: -------------")
print(f"{xInt} is data type {type(xInt)}.")
print(f"{xFloat} is data type {type(xFloat)}.")
print(f"{xComplex} is data type {type(xComplex)}.")
print("----------String: --------------")
print(f"'{sStr}' is data type {type(sStr)}")
print("-----------Sets or Collections: -----------")
print(f"List: A dynamic array that can be changed. {xList}")
print(f"Tuple: A static array that cannot be changed. {xTuple}")
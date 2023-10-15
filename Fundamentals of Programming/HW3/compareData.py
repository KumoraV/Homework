# Program made by Christopher Fallas Aguero
# Program tests case senstivity......

height = 17
Height = 0
xInt = 10
xFloat = 10.0
xComplex = 10j
sStr = "Hello There"
xList = ["Run", "Ran", "Runs"]
xTuple = ("Stop", "Go", "Wait")
sBreak = "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"

print(sBreak)
print("Python is case-sensitive. The same name with different cases can have different values.")
print("For example, let's use the name height:")
print(f"Uppercase Height = {Height}. Lowercase height = {height}.")
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
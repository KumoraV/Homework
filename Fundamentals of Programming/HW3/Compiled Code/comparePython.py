# Python program that showcases the case-sensitivity, keywords, and the Type.

# Initalize variables
height = 17
Height = 0
int = "Hi there"
sBreak = "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"

# Case sensitivity showcase
print(sBreak)
print("Python is case-sensitive. The same name with different cases can have different values.")
print("For example, let's use the name height:")
print(f"Uppercase 'Height' = {Height}. Lowercase 'height' = {height}.")

# Keywords as reserved word showcase
print(sBreak)
print("Python does not have keywords for date types.")
print("Instead, the data type is assigned depending on\nthe value it's initalized with.")
print(f"This means that an identifier can be a data type:")
print(f"Variable 'int' = {int}")

# Type of variables showcase
print(sBreak)
print("Python is a dynamically typed language.")
print("The type of variable will be automatically declared during run-time depending on the value giving.")
print("Variable 'height' was not declared an 'int' by the user.")
print("Instead, it was automatically declared by it's value.")
// C++ program that tests the scope of variables
#include <iostream>

int main()
{
    int x = 10;
    for (int i = 0; i < 10; i++)
    {
        int inside = 5;
    }
    std::cout << "The value inside the for loop is:" << inside;
}
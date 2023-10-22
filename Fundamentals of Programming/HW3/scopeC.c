// C program that tests the scope of a variable inside a for loop
#include <stdio.h>

int main()
{
    for (int i = 0; i < 1; i++)
    {
        int inside = 5;
        printf("Printing value inside the for loop: %i.", inside);
    }
    // Making the bottom comment into code will give an error.
    // printf("Printing value outside the for loop: %i.", inside);
}
// C program that tests the scope of variables
#include <stdio.h>

int main()
{
    int x = 20;
    for (int i = 0; i < 10; i++)
    {
        int inside = 5;
    }
    printf("The value inside the for loop is: %i", inside);
}
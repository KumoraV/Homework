// Made by Christopher Fallas Aguero
// HW5 Task 3
// This code shows how you would rewrite the goto statement.
#include <stdio.h>

int main()
{
    // Initalize variables
    int n = 10;
    int x[10][10] = {{0},{0}};
    int gotoFlag;
    // Loop
    for (int i = 0; i < n; i++)
    {
        gotoFlag = 0;
        for (int j = 0; j < n; j++)
        {
            if (x[i][j] != 0)
            {
                gotoFlag = 1;
                break;
            }
        }
        if (gotoFlag == 0)
        {
            printf("First all-zero row is: %d", i);
            break;
        }
        
    }
}
    

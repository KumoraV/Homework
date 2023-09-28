#include "stdio.h"
//Made by Christopher Fallas

int main ()
{
	// Initalize arrays
	int mxA[3][3] = {{1,2,3},{4,5,6},{7,8,9}};
	int mxB[3][3] = {{6,8,3},{4,7,2},{1,6,2}};
	int mxResult[3][3] = {{0, 0, 0},{0,0,0},{0,0,0}};

	// Get the amount of rows and collums for both martix
	int mxACol = sizeof(mxA[0]) / sizeof(mxA[0][0]);
	int mxARow = sizeof(mxA) / sizeof(mxA[0]);
	int mxBCol = sizeof(mxB[0]) / sizeof(mxB[0][0]);
    int mxBRow = sizeof(mxB) / sizeof(mxB[0]);

	// Initalize variables for loop
	char line[] = "~~~~~~~";
	int i;
	int j;
	int k;
	
	// Test if matrix multiplication is possible
	if (mxACol != mxBRow)
	{
		printf("Can not do matrix multiplication. Matrix 1 collum does not match Martix 2 Row \n");
	}

	// Calculate matrix multiplication using logical loops
	i = 0;
    while (i < mxACol)
	{
        j = 0;
		while (j < mxBRow)
		{
            k = 0;
			while (k < mxARow)
			{
				mxResult[i][j] += mxA[i][k] * mxB[k][j];
                k++;
			}
            j++;
		}
        i++;
	}

	// Print statements to show all matrices
	printf("Matrix 1:\n");
	printf("%s\n", line);
	for (i = 0; i < mxARow; i++)
	{
		for(j = 0; j < mxACol; j++)
		{
			printf("%d ", mxA[i][j]);
		}
		printf("\n");
	}
	printf("%s\n", line);
	printf("Matrix 2:\n");
	printf("%s\n", line);
	for (i = 0; i < mxBRow; i++)
	{
		for(j = 0; j < mxBCol; j++)
		{
			printf("%d ", mxB[i][j]);
		}
		printf("\n");
	}
	printf("%s\n", line);
	printf("Matrix Result:\n");
	printf("%s\n", line);
	for (i = 0; i < mxARow; i++)
	{
		for(j = 0; j < mxBRow; j++)
		{
			printf("%d ", mxResult[i][j]);
		}
		printf("\n");
	}

}


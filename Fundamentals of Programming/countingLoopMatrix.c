#include "stdio.h"
//Made by Christopher Fallas

int main ()
{
	// Initalize arrays
	int mxA[5][5] = {{1,2,3,7,3},{4,5,6,6,3},{7,8,9,2,7},{2,6,2,1,0},{5,6,1,2,5}};
	int mxB[5][5] = {{6,8,3,8,1},{4,7,2,1,7},{1,6,2,1,7},{1,7,1,2,8},{8,1,2,7,3}};
	int mxResult[5][5] = {{0,0,0,0,0},{0,0,0,0,0},{0,0,0,0,0},{0,0,0,0,0},{0,0,0,0,0}};

	// Get the amount of rows and collums for both martix
	int mxACol = sizeof(mxA[0]) / sizeof(mxA[0][0]);
	int mxARow = sizeof(mxA) / sizeof(mxA[0]);
	int mxBCol = sizeof(mxB[0]) / sizeof(mxB[0][0]);
    int mxBRow = sizeof(mxB) / sizeof(mxB[0]);

	// Initalize variables for loop
	char line[] = "~~~~~~~~~~~~";
	int i;
	int j;
	int k;
	
	// Test if matrix multiplication is possible
	if (mxACol != mxBRow)
	{
		printf("Can not do matrix multiplication. Matrix 1 collum does not match Martix 2 Row \n");
	}

	// Calculate matrix multiplication using counting loops
	for (i = 0; i < mxACol; i++)
	{
		for(j = 0; j < mxBRow; j++)
		{
			for(k = 0; k < mxARow; k++)
			{
				mxResult[i][j] += mxA[i][k] * mxB[k][j];
			}
		}
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


// Made by Christopher Fallas Aguero
// HW5 Task 3
// This code shows how you would rewrite the goto statement.
public class Task3
{
    public static void main(String[] args) 
    { 
        int n = 10;
        int[][] x = new int[n][n];
        matrixLoop:
            for (int i = 0; i < n; i++)
            {
                for (int j = 0; j < n; j++)
                {
                    if (x[i][j] != 0)
                    {
                        break matrixLoop;
                    }
                }
                System.out.printf("First all-zero row is: %d", i);
                break;
            }
    }
}
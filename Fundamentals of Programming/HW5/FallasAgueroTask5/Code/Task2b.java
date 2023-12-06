// Made by Christopher Fallas Aguero
// HW5 Task 2b
// Shows how to enforce full evaluation. You would store the boolean values first and then test those values.
public class Task2b
{
    public static void main(String[] args) 
    {
        int x = 1;
        boolean test1 = x != 2;
        boolean test2 = x == 1/1;
        if (test1 && test2)
        {
            System.out.println("'if' statement will full evaluation.");
        }
        else
        {
            System.out.println("'else' statement will full evaluation.");
        }
        
    }
}
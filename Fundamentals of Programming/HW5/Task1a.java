// Made by Christopher Fallas Aguero
// HW5 Task 1a
// Tests the if/else association. The 'else' is associated with the last 'if' before it.
public class Task1a
{
    public static void main(String[] args) 
    {
        int x = 5;
        if (x != 5)
        {
            System.out.println();
        }
        if (x == 5)
        {
            System.out.println("If this prints, the else statement is associated with the second 'if' statemtent.");
        }
        else
        {
            System.out.println("If this prints, the else statement is associated with the first 'if' statemtent.");
        }
    }
}
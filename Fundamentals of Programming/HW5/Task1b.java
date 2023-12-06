// Made by Christopher Fallas Aguero
// HW5 Task 1b
// Tests the if/else association. The associated 'if' 'else' statements are in their own block.
public class Task1b
{
    public static void main(String[] args) 
    {
        int x = 5;
        {
            if (x != 5)
            {
                System.out.println();
            }
            else
            {
                System.out.println("If this prints, the else statement is associated with the first 'if' statemtent.");
                System.exit(0);
            }
        }
        if (x == 5)
        {
            System.out.println("If this prints, the else statement is associated with the second 'if' statemtent.");
        }
    }
}
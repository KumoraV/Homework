// Made by Christopher Fallas Aguero
// HW5 Task 2a
// Tests short-circuit evaluation. Will not evaluate second part of 'if' expression.
public class Task2a
{
    public static void main(String[] args) 
    {
        int x = 1;
        if ((x != 1) && ((5/0 > 1) == true))
        {
            System.out.println();
        }
        else
        {
            System.out.println("If this prints, Java has short-circuit evalutation.");
        }
    }
}
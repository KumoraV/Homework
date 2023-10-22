// Java program that tests the scope of a variable inside a for loop
public class scopeJava 
{
    public static void main(String[] args) {
        for (int i = 0; i < 1; i++)
        {
            int inside = 5;
            System.out.println("Printing value inside the for loop: " + inside);
        }
        // Making the bottom comment into code will give an error.
        // System.out.println("Printing value outside the for loop: " + inside);
    }   
}

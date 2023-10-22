// Java program that showcases the case-sensitivity, keywords, and the Type.
public class compareJava
{
    public static void main(String []args)
    {
        // Initalize variables
        int jump = 14;
        int juMP = 20;
        
        String lineBreak = "~~~~~~~~~~~~~~~~~~~~~~~~~";
        
        // Case-sensitivity showcase
        System.out.println(lineBreak);
        System.out.println("Java is case-sensitive. The same name with different\ncases can have different values.");
        System.out.println("Using a variable but changing the case will give an error\nif not initalized with the new case.");
        System.out.println("Let's see the value of a variable using different cases");
        System.out.println("Variable 'jump': " + jump + ". Variable 'juMP': " + juMP + ".");
        
        // Keywords as reserved word showcase
        System.out.println(lineBreak);
        System.out.println("Java has keyword 'int' for integer, and 'double','float' for real.");
        System.out.println("An error will be given if an identifer is called those keywords.");

        // Type of variables showcase
        System.out.println(lineBreak);
        System.out.println("Java is a statically typed language.");
        System.out.println("The type of variable must be declared with the variable.");
        System.out.println("Variable 'jump' must be declared before you can use it.");
    } 
}
package JavaClasses;
import java.util.Scanner;

// Scanner class is a class from the java.utilpackage used to obtain the input of the primitive types like int, string
// Its the easiest way to read user input

// To read numeric values of a certain datatype XYZ, the function to use will be nextXYZ() to read short datatypes
// To read strings use nextLine()




public class UserInput {
    static  void area(int height, int width){
        int res = height * width;
        System.out.println(" The area is " + res);
    }
    public static void main(String[] args) {
        Scanner getInput = new Scanner(System.in);
        // Ask for the name
        System.out.println("Enter name");
        String name = getInput.nextLine();
        // Give more info
        System.out.println(" I want to calculate the area of a rectangle ");
        System.out.println(" Please enter the length and width of the rectangle ");
        // Ask for the length
        System.out.println(" Length");
        int height = getInput.nextInt();
        // Ask for the width
        System.out.println(" Width ");
        int width = getInput.nextInt();
        // Print the area
        area(height, width);
    }

}

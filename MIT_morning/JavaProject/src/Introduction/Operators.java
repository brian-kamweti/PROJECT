package Introduction;

public class Operators {
    public static void main(String[] args) {
        // operators in java
        // 1.Arithmetic
        //2.Comparison
        //3.Assignment
        //4.Logical operators


        // 1. Arithmetic operators
        // Used to perfom arithmetic operations
        ///e.q :+, *, -, /, %, ++, --

        int y = 3,x = 4;
        System.out.println(y + x);
        System.out.println(4 % 3);


        // 2. Assignment operators
        // Used to assign values to variables
        // e.g: =, +=, -=, *=....
        //System.out.println( y+=x);

        System.out.println( y= y + x);


        // 3.Comparison operators
        // used to compare two values
        //e.g: ==, !=, >, >=....

        System.out.println(y == x);

        // 4. Logical operators
        // Used to destermine logic between two variables or values
        // e.g:
        // && - and
        // ||, - or
        // ! - Not


        System.out.println(y < x && x > y); // logical And
        System.out.println(y < x || x < y); // logical or
        System.out.println(!(y < x && x > y)); // logical not




    }
}

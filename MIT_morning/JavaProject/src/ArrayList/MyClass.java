package ArrayList;
// Import the constructor for creating array List in java
import java.util.ArrayList;
import java.util.Collections;

public class MyClass {
    ArrayList<String> cars = new ArrayList<String>();

    // Syntax for adding items in arrays
    // Cars.add("Benz")


    public static void main(String[] args) {
        ArrayList<String> cars = new ArrayList<String>();
        ArrayList<Integer> myNums = new ArrayList<Integer>();
        cars.add("Benz");
        cars.add("Audi");
        cars.add("Ford");
        System.out.println(cars);



        Collections.sort(cars);
        System.out.println("Sorted Arrays");
        System.out.println(cars);


        myNums.add(1);
        myNums.add(2);
        myNums.add(3);

        System.out.println(myNums);

        // printing out individual items from the array use the get method

        // Get a value from the array
        System.out.println(cars.get(0));
        System.out.println(myNums.get(1));

        // Set a value in the array
        cars.set(0,"Toyota");

        for(int x = 0; x < cars.size(); x++){
            System.out.println(cars.get(x));
        }
    }
}

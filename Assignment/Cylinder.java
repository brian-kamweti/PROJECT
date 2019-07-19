package Assignment;
import java.util.Scanner;


public class Cylinder {
    public static void main(String[] args) {

        Scanner rad =  new Scanner(System.in);
        Scanner hei = new Scanner(System.in);


        System.out.println("Enter the height of the Cylinder:");
        int height= hei.nextInt();
        System.out.println("Enter the radius of the Cylinder:");
        int radius= rad.nextInt();

        double volume = 22/7*radius*radius*height;

        System.out.println("THe volume of the cylinder is "+volume);

    }
}

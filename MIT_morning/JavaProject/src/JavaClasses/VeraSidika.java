package JavaClasses;

public class VeraSidika {
    // 1.A constructor class has to have the same name as the main class
    // 2.Use the keyword public followed by the name of the C class
    // 3.Constructor class is called when an object is created
    // 4.All classes have a constructor class by default, if you dont create the constructor yourself





    String color;
    int herAge;
    public VeraSidika(String rangi, int age){
        color = rangi;
        herAge = age;
        }


    public static void main(String[]args){
        //Create an object
        VeraSidika vera1 = new VeraSidika("pink",34);
        VeraSidika vera2 = new VeraSidika("yellow",30);
        System.out.println(vera1.color);
        System.out.println(vera2.color);
        System.out.println(vera1.herAge);
        System.out.println(vera2.herAge);
    }
}

package JavaClasses;

public class ClassOne {
    // Everything in java is associated with a class, objects, attributes, methods
    int age = 45;// Attribute
    String name = "developer";
    String country = "developer";
    // Using multiple classes
    // You can create an object of a class and access it in another class.
    // Objective: For better organization of classes/project
    // One class has all the attributes and another class

    public static void main(String[] args) {
        // Syntax: Classname nameoftheobject = new classname()
        // Creating an object
        // an object is an instance of a class
        ClassOne obj1 = new ClassOne();
        ClassOne obj2 = new ClassOne();

        System.out.println(obj1.age);
        System.out.println(obj1.name);


        System.out.println(obj2.age);
        System.out.println(obj2.name);
        System.out.println(obj2.country);

    }
}

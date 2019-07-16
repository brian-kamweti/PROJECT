package Modifiers;

public class Myclass {
    // Java modifiers
    // Access modifiers e.g public
    // Non-Access modifiers e.g static, final

    // ACCESS MODIFIERS
    // Cat those that can apply to class only
    // 1. Public - This class can be accessed anywhere
    // 2. Default - Only accessible in classes in the same package

    // Cat those that apply to attributes, methods and constructor
    // 1. Public - code accessible by any class
    // 2. Private - code only accessible within the declared class
    // 3. Default - Accessible in the same package, used when you do not specify a modifier
    // 4. Protected - Code is accessible in the same package and subclass

    public String firstName = "Developer"; // Access everywhere
    private String secondName = "Java"; // Access in class(myClass)
    String  lastName = "AwsomeDev"; // Access in the same package(modifiers)
    protected String otherName = "Geek"; // Access in package and subclass







    // NON-ACCESS MODIFIERS
    // Classes: e.g final, abstract
    // Methods, Attributes: e.g Static, Final

    // 1. Static: Attributes and methods belong to the class, rather than an object
    // Final: Classes: The class cannot be inherited by other class
    // Final: Methods, attributes: Cannot be overiden


    static String country ="Kenya";
    final String county = "Nairobi";






}

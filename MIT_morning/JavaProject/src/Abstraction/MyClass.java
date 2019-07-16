package Abstraction;

abstract class MyClass {
    // Data abstraction is the process of hiding certain information and showing only essential information to the user
    // Abstraction can be achieved with either abstraction classes interface to create an abstract class start with the key word 'abstract' followed by keyword 'class' then the name of the class
    // abstract is a non-access modifier, used for both classes and methods
    // NOTE: Abstract class is restricted class that cannot be used to create objects,


    // Abstract method does not have a body


    public abstract void countSpeed();

    // Normal method
    public void numTyres() {
        System.out.println("4");
    }

}
class Benz extends MyClass{
    public void countSpeed(){
        System.out.println("The speed exceeds");
    }
}

class MainClass{
    public static void main(String[] args) {
        // Create objects
        Benz car1 = new Benz();
        car1.countSpeed();
        car1.numTyres();
    }
}




package JavaClasses;

public class ClassOnee {
    String color = "Blue";
    static void methodOnee(){
        System.out.println("hello world");

    }
    public void methodTwo(){
        System.out.println("HELLO WORLD!!");
    }

    static String methodThree(){
        return "I am a Static Method that returns a string";
    }

    public String methodFour(){
        return "I am a public method that returns a string";
    }

    public static void main(String[]args){
        methodOnee();
        System.out.println(methodThree());
        String res = methodThree();
        System.out.println(res);
        ClassOnee objectOne = new ClassOnee();
        objectOne.methodTwo();
        objectOne.methodFour();
        System.out.println(objectOne.color);
    }
}

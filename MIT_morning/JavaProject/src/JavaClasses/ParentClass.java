package JavaClasses;
// An attribute is a variable inside a class


public class ParentClass {
    String sirname = "Kimathi";
    String color = "black";
    int hands = 2;
    int legs = 2;
    float height = 5.7f;

// Static method
static void fighter(){
    System.out.println("10 blows");
}
// Public method
public void fighter2(){
    System.out.println("10 BLOWS");
}

public void printAge(int age){
    System.out.println("I am " + age + "years old");
}

    public static void main(String[] args) {
        //Accessing attributes
        ParentClass Mary = new ParentClass();
        ParentClass Kimathijr = new ParentClass();


        //System.out.println(Kimathijr.sirname);

        // Modifying attributes
        // To access an attribute or method in an object, use the dot(.) Dotnotation

        Kimathijr.sirname = "Njoroge";
        Mary.color = "Brown";
        System.out.println(Kimathijr.sirname);
        System.out.println(Mary.color);
        Mary.fighter2();
        Mary.printAge(13);

    }
}

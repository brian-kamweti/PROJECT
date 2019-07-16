package Encapsulation;

public class MyClass {
    // refers to hiding sensitive data from class(S)
    // define an attribute, method or constructor as private
    // To access use setter or getter: methods that allow access
    private String name = "Java Developer";

    //Getter method
    public String getName(){
        return name;
    }

    // Setter methods
    public void  setName(String newname){
        this.name = newname;
    }

}

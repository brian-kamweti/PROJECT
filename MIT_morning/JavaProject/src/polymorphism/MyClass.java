package polymorphism;

public class MyClass {
        int legs = 4;
        int eyes = 2;
        int tail = 1;
        String country = "Kenya";
        public void animalSound() {
            System.out.println("Sound of the animal");
        }
    }



class Cat extends MyClass{
    public void animalSound(){
        System.out.println("MEEEWWW");
    }

}


class Dog extends MyClass{
    public void animalSound(){
        System.out.println("WOOF WOOF");
    }
}

class MainClass{
    public static void main(String[] args) {
        MyClass myAnimal = new MyClass();
        MyClass myCat = new Cat();
        MyClass myDog = new Dog();



        myCat.animalSound();
        System.out.println(myCat.eyes);
        myDog.animalSound();
        System.out.println(myDog.legs);
    }

    }

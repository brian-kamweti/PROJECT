package Inheritance;

public class MyClass {
    // Use the keyword extends

    protected String name = "Developer";

    public void languages() {
        System.out.println("1.HTML\n 2.CSS\n 3.Java\n 4.Android");
    }


}

     class InnerClass extends MyClass{
        private String technologies = "Android Development";

        public static void main(String[] args) {
            InnerClass newlanguage = new InnerClass();

            System.out.println(newlanguage.name);
            System.out.println(newlanguage.technologies);
            newlanguage.languages();
        }
    }


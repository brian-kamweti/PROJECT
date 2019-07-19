package Assignment;

public class Student {
    int roll_no;
    String name;
    int phone_no;
    String address;
    public static void main(String[] args) {
        Student stud1 = new Student();
        Student stud2 = new Student();

        stud1.roll_no= 2;
        stud1.name="John";
        stud1.address="Nairobi";
        stud1.phone_no=3452667;

        System.out.println(stud1.name+" "+stud1.phone_no+" "+stud1.roll_no+" "+stud1.address);

        stud2.name="Sam";
        stud2.roll_no=3;
        stud2.address="Ruiru";
        stud2.phone_no=3556285;

        System.out.println(stud2.name+" "+stud2.phone_no+" "+stud2.roll_no+" "+stud2.address);
    }
}

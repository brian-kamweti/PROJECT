package Assignment;

public class Employee {
    public void getinfo(int salary , int time){
        int sal=salary;
        int tim=time;

        System.out.println("The salary is "+sal+" dollars and the hours worked is "+tim);
    }

    public void addSal(int salary){
        if(salary<500){
            int sal = 10+salary;
            System.out.println(sal);
        }
    }

    public void addWork(int time , int salary){
        if(time>6){
            int sall= salary + 5;
            System.out.println(sall);
        }
    }

    public static void main(String[] args) {
        Employee emp = new Employee();

        emp.getinfo(233,6);
        emp.addSal(455);
        emp.addWork(7,455);

    }

}

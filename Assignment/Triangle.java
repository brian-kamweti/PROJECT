package Assignment;

public class Triangle {
    public Triangle(){}
    public static void main(String[] args) {
        Calc tri = new Calc();
        tri.area=0.5*tri.hei*tri.bas;
        tri.per=tri.hei+tri.bas+tri.hyp;

        System.out.println("The area is "+tri.area+" and the perimeter is "+tri.per);
    }
}

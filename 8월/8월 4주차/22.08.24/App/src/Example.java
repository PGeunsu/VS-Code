public class Example {

    interface Math {

        int sum(int n1, int n2);
    }

    // Math 인터페이스를 구현한 MyMath 클래스의 객체가 한 번만 사용되고 재사용 되지 않는다면 비효율적 일수도 있다.
    static class MyMath implements Math {
        public int sum(int n1, int n2) {
            return n1 + n2;
        }

    }

    static int doSomething(Math math) {
        return math.sum(10, 20);
    }

    public static void main(String[] args) {

        Math math = new MyMath();
        int result = doSomething(math);
        System.out.println(result); // 30
    }
}

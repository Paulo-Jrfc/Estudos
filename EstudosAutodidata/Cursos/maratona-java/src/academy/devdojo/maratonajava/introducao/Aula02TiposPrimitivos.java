package academy.devdojo.maratonajava.introducao;

public class Aula02TiposPrimitivos {

    public static void main(String[] args) {
        // ii nt, double, float, char, byte, short, long, boolean
        int age = (int) 10000000000L;
        long numeroGrande = (long) 155.23;
        double salarioDouble = 2000.0D;
        float salarioFloat = (float) 2500.0D;
        byte idadeByte = 10;
        short idadeShort = 32000;
        boolean verdadeiro = true;
        boolean falso = false;
        char caractere = '\u0041';
        String nome = "Goku";

        System.out.println("A idade é " + age + " anos.");
        System.out.println(verdadeiro);
        System.out.println("char " + caractere);
        System.out.println(numeroGrande);
        System.out.println("Oi, meu nome é: " + nome);
    }

}

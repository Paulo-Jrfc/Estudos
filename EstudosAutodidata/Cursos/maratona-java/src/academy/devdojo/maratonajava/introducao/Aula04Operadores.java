package academy.devdojo.maratonajava.introducao;

public class Aula04Operadores {
    public static void main(String[] args){
        // + - * /
        int numero01 = 10;
        double numero02 = 20;
        double resultado = numero01 + numero02;
        double resultado02 = numero01 / (double) numero02;
        System.out.println("Valor " + (numero02 + numero01));
        System.out.println(resultado);
        System.out.println(resultado02);

        // %
        int resto = 20 % 2;
        System.out.println(resto);

        // < > <= >=
        boolean isDezMaiorQueVinte = 10 > 20;
        boolean isDezMenorQueVinte = 10 < 20;
        boolean isDezIgualVinte = 10 == 20;
        boolean isDezIgualDez = 10 == 10;
        boolean isDezDiferenteDez = 10 != 10;
        System.out.println("isDezMaiorQueVinte? " + isDezMaiorQueVinte);
        System.out.println("isDezMenorQueVinte? " + isDezMenorQueVinte);
        System.out.println("isDezIgualVinte? " + isDezIgualVinte);
        System.out.println("isDezIgualDez? " + isDezIgualDez);
        System.out.println("isDezDiferenteDez? " + isDezDiferenteDez);

        // && (AND) || (or) !

        int idade = 35;
        float salario = 3500;
        boolean isDentroDaLei = idade >= 30 && salario > 4612;
        boolean isDentroDaLeiMendorQueTrinta = idade < 30 && salario >= 3381;
        System.out.println("isDentroDaLei? " + isDentroDaLei);
        System.out.println("isDentroDaLeiMendorQueTrinta? " + isDentroDaLeiMendorQueTrinta);

        double valorTotalContaCorrente = 200;
        double valorTotalContaPoupanca = 10000;
        float valorPlaystation = 5000;

        boolean isPlaystationCincoCompravel = valorTotalContaCorrente > valorPlaystation || valorTotalContaPoupanca > valorPlaystation;
        System.out.println("isPlaystationCincoCompravel " + isPlaystationCincoCompravel);

        // = += -= *= /= %=
        double bonus = 1800; // 1800
        bonus += 1000; // 2800
        bonus -= 1000; // 1800
        bonus *= 2; // 3600
        bonus /= 2; // 1800
        bonus %= 2; // 0

        //
        int contador = 0;
        contador += 1; // contador = contador + 1;
        contador++; //Funciona apenas quando vamos adicionar 1
        contador--;
        ++contador;
        --contador;
        int contador2 = 0;
        System.out.println(contador2++);
        System.out.println(contador2);
    }
}

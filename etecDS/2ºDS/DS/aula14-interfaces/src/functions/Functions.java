package functions;
import java.util.Scanner;

public class Functions {
    public static String retornaString(String mensagem) {
        Scanner in = new Scanner(System.in);
        System.out.print(mensagem);
        String value = in.nextLine();

        return value;
    }

    public static int retornaInt(String mensagem) {
        Scanner in = new Scanner(System.in);
        System.out.print(mensagem);
        int value = in.nextInt();
        return value;
    }

    public static double retornaDouble(String mensagem) {
        Scanner in = new Scanner(System.in);
        System.out.print(mensagem);
        double value = in.nextDouble();

        return value;
    }

    public static int[] retornaArrayInt(String mensagem) {
        Scanner in = new Scanner(System.in);
        System.out.println(mensagem);
        System.out.print("Insira a quantidade de posições no array: ");
        int qtdPosicao = in.nextInt();
        int array[] = new int[qtdPosicao];
        for (int i = 0; i < array.length; i++) {
            System.out.print("Insira o número na posição " + i + " do array: ");
            array[i] = in.nextInt();
        }
        return array;
    }

    public static double[] retornaArrayDouble(String mensagem) {
        Scanner in = new Scanner(System.in);
        System.out.println(mensagem);
        int qtdPosicao = 3;
        double array[] = new double[qtdPosicao];
        for (int i = 0; i < array.length; i++) {
            System.out.print("Insira a " + (i+1) + "º nota: ");
            array[i] = in.nextDouble();
        }
        return array;
    }

    public static double[] retornaArrayDouble(String mensagem, int tamanhoArray) {
        if(tamanhoArray < 1){
            return null;
        }
        Scanner in = new Scanner(System.in);
        System.out.println(mensagem);
        double array[] = new double[tamanhoArray];
        for (int i = 0; i < array.length; i++) {
            System.out.print("Insira a " + (i+1) + "º nota: ");
            array[i] = in.nextDouble();
        }
        return array;
    }
}


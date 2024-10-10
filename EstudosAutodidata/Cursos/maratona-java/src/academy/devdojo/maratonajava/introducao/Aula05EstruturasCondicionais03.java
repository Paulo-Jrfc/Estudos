package academy.devdojo.maratonajava.introducao;

public class Aula05EstruturasCondicionais03 {
    public static void main (String[] args){
        //doar se salario > 5000
        double salario = 2000;
        //Operador ternário --> resultado = (condicao) ? verdadeiro : falso;

        String resultado = salario > 5000 ? "Eu vou doar 500 pro DevDojo" : "Ainda não tenho condições, mas vou ter!";
        boolean possoDoar = salario > 5000 ? true : false;
        //boolean possoDoar = salario > 5000;

        System.out.println(resultado);
    }
}

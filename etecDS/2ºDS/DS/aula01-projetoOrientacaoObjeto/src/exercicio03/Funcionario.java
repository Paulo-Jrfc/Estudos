package exercicio03;

import java.util.Scanner;

public class Funcionario {

    public String nome;
    public double salarioBruto;
    public double imposto;
    Scanner in = new Scanner(System.in);

    public void salarioLiquido() {
        double salarioLiquido = this.salarioBruto - (this.salarioBruto * this.imposto);
        System.out.println("O salário é de: " + salarioLiquido);
    }

    public void aumentaSalario(){
        System.out.println("Informe o valor que vai ser aumentado, considerando o salário bruto de: " + this.salarioBruto);
        double aumento = in.nextDouble();
        this.salarioBruto = this.salarioBruto + aumento;
  
    }
    
    
}

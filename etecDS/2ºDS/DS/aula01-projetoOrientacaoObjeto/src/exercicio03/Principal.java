package exercicio03;

public class Principal {
    
	public static void main(String[] args) {

		Funcionario pedro = new Funcionario();
		Funcionario vagner = new Funcionario();

		pedro.nome = "Pedro dos Santos";
		pedro.salarioBruto = 1000;
        pedro.imposto = 0.26;
        
		vagner.nome = "Vagner Lopes";
		vagner.salarioBruto = 1250;
		vagner.imposto = 0.25;
		
		pedro.salarioLiquido();
		vagner.salarioLiquido();
		
		pedro.aumentaSalario();
		vagner.aumentaSalario();
		
		pedro.salarioLiquido();
		vagner.salarioLiquido();
		
				
	}

}
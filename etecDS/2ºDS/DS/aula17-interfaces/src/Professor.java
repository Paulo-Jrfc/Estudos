public class Professor implements Pessoa, Funcionario{
	private String nome;
	private int idade;
	private int numeroAulas;
	private double valorAula;
	private double salario;

	public Professor(String nome, int idade, int numeroAulas, int valorAula) {
		super();
		this.nome = nome;
		this.idade = idade;
		this.numeroAulas = numeroAulas;
		this.valorAula = valorAula;
	}

	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public int getIdade() {
		return idade;
	}
	public void setIdade(int idade) {
		this.idade = idade;
	}
	public int getNumeroAulas() {
		return numeroAulas;
	}
	public void setNumeroAulas(int numeroAulas) {
		this.numeroAulas = numeroAulas;
	}
	public double getValorAula() {
		return valorAula;
	}
	public void setValorAula(int valorAula) {
		this.valorAula = valorAula;
	}

	@Override
	public void calcularSalario() {
		salario = getNumeroAulas() * getValorAula();
		System.out.println(salario);
	}

	@Override
	public void apresentaInfo() {
		System.out.println(this.nome);
		System.out.println(this.idade);
		System.out.println(this.salario);
	}

}
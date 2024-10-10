
public class Main {
	public static void main(String[] args) {
		Aluno aluno = new Aluno("Paulo", 17);
		Professor professor = new Professor("Doni", 30, 3, 120);
		aluno.apresentaInfo();
		professor.apresentaInfo();
	}
}

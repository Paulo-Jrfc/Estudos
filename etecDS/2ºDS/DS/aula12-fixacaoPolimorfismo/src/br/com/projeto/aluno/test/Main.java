package br.com.projeto.aluno.test;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

import br.com.projeto.aluno.entity.Aluno;
import br.com.projeto.aluno.entity.Tecnico;
import br.com.projeto.aluno.entity.Universitario;

public class Main extends br.com.projeto.aluno.functions.Functions{

	public static void main(String[] args) {
		List<Aluno> listaAluno = new ArrayList<>();
		int contador = 1;
		String resp = "s";
		while(resp.equalsIgnoreCase("s")) {
			String tipoAluno = retornaString("Você deseja inserir um aluno do tipo Universitário ou Técnico?" +
					"\nPor extenso, escreva sua opção: ").toLowerCase();
			switch (tipoAluno){
				case "universitário":
					Aluno universitario = new Universitario(retornaString("Insira o nome do universitário: "),
							retornaArrayDouble("Insira as notas que possuem valor de no máximo 2 pontos: "),
							retornaDouble("Insira a nota da prova que possuem valor de no máximo 4 pontos: "));
					listaAluno.add(universitario);
					break;
				case "técnico":
					Aluno tecnico = new Tecnico(retornaString("Insira o nome do estudante técnico: "),
							retornaArrayDouble("Insira as 4 notas, de 0 a 10: ", 4));
					listaAluno.add(tecnico);
					break;
				default:
					System.out.println("Você inseriu a opção de forma incorreta, tente novamente!");
					break;
			}
			resp = retornaString("Deseja inserir outro aluno? S/N: ");
		}
		
		for (Aluno aluno : listaAluno) {
			System.out.println(contador + "º aluno:");
			System.out.println(aluno);
			contador++;
		}
	}
}



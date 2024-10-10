package exercicoAnimal;

public class Animal {
	private String animalName;
	private int amtPaws;
	private double animalWeight;
	
	public Animal() {
		
	}
	
	public Animal(String animalName, int amtPaws, double animalWeight) {
		super();
		this.animalName = animalName;
		this.amtPaws = amtPaws;
		this.animalWeight = animalWeight;
	}
	
	public void setAnimalName(String animalName) {
		this.animalName = animalName;
	}
	
	public String getAnimalName() {
		return this.animalName;
	}
	
	public void setAmtPaws(int amtPaws) {
		this.amtPaws = amtPaws;
	}
	
	public int getAmtPaws() {
		return this.amtPaws;
	}
	
	public void setAnimalWeight(double animalWeight) {
		this.animalWeight = animalWeight;
	}
	
	public double getAnimalWeight() {
		return this.animalWeight;
	}
	
	@Override
	public String toString() {
		return "Nome do animal: " + this.getAnimalName() + "\n"
				+ "Quantidade de patas do animal: " + this.getAmtPaws() + "\n"
				+ "Peso do animal: " + this.getAnimalWeight() + "\n"
		;
	}
	
}

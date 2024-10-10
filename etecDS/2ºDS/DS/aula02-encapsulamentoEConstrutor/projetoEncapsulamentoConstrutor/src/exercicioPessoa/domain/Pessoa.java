package exercicioPessoa.domain;

public class Pessoa {

	private String name;
	private String adress;
	private String phoneNumber;
	
	public Pessoa() {
		this("", "", "");
	}
	
	public Pessoa(String name, String adress, String phoneNumber) {
		this.name = name;
		this.adress = adress;
		this.phoneNumber = phoneNumber;
	}
	
	public String getName() {
		return this.name;
	}
	
	public void setName(String name) {
		this.name = name;
	}
	
	public String getAdress() {
		return this.adress;
	}
	
	public void setAdress(String adress) {
		this.adress = adress;
	}
	
	public String getPhoneNumber() {
		return this.phoneNumber;
	}
	
	public void setPhoneNumber(String phoneNumber) {
		this.phoneNumber = phoneNumber;
	}
	
	@Override
	public String toString() {
		return "Nome: " + this.getName()+ "\n"
				+ "Endereço: " + this.getAdress() + "\n"
				+ "Telefone: " + this.getPhoneNumber()+ "\n"
		;
	}
}



import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JTextField;
import javax.swing.SwingConstants;
import java.awt.Font;
import java.awt.Color;
import javax.swing.JRadioButton;
import javax.swing.JCheckBox;
import javax.swing.JToggleButton;
import java.awt.Label;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

public class FriendsUpdate extends JFrame {

	private JPanel contentPane;
	private JTextField txtCadastroDeAmigos;
	private JTextField textName;
	private JTextField textSurname;
	private JTextField textTelephone;
	private JTextField textField;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					FriendsUpdate frame = new FriendsUpdate();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public FriendsUpdate() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 700, 400);
		contentPane = new JPanel();
		contentPane.setBackground(Color.WHITE);
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		txtCadastroDeAmigos = new JTextField();
		txtCadastroDeAmigos.setEditable(false);
		txtCadastroDeAmigos.setForeground(Color.WHITE);
		txtCadastroDeAmigos.setBackground(new Color(135, 206, 250));
		txtCadastroDeAmigos.setFont(new Font("Tahoma", Font.BOLD, 20));
		txtCadastroDeAmigos.setHorizontalAlignment(SwingConstants.CENTER);
		txtCadastroDeAmigos.setText("ATUALIZAR AMIGOS");
		txtCadastroDeAmigos.setBounds(0, 0, 684, 60);
		contentPane.add(txtCadastroDeAmigos);
		txtCadastroDeAmigos.setColumns(10);
		
		textName = new JTextField();
		textName.setBounds(157, 137, 357, 27);
		contentPane.add(textName);
		textName.setColumns(10);
		
		textSurname = new JTextField();
		textSurname.setColumns(10);
		textSurname.setBounds(157, 192, 357, 27);
		contentPane.add(textSurname);
		
		textTelephone = new JTextField();
		textTelephone.setColumns(10);
		textTelephone.setBounds(157, 243, 357, 27);
		contentPane.add(textTelephone);
		
		Label label = new Label("Nome:");
		label.setFont(new Font("Dialog", Font.PLAIN, 15));
		label.setBounds(42, 137, 62, 27);
		contentPane.add(label);
		
		Label label_1 = new Label("Apelido:");
		label_1.setFont(new Font("Dialog", Font.PLAIN, 15));
		label_1.setBounds(42, 192, 62, 27);
		contentPane.add(label_1);
		
		Label label_2 = new Label("Telefone:");
		label_2.setFont(new Font("Dialog", Font.PLAIN, 15));
		label_2.setBounds(42, 243, 62, 27);
		contentPane.add(label_2);
		
		JButton btnCadastrar = new JButton("ATUALIZAR");
		btnCadastrar.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			}
		});
		btnCadastrar.setForeground(Color.WHITE);
		btnCadastrar.setBackground(new Color(240, 128, 128));
		btnCadastrar.setBounds(103, 320, 159, 30);
		contentPane.add(btnCadastrar);
		
		JButton btnVoltar = new JButton("VOLTAR");
		btnVoltar.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				FriendsList l1 = new FriendsList();
				l1.setVisible(true);
				dispose();
			}
		});
		btnVoltar.setForeground(Color.WHITE);
		btnVoltar.setBackground(new Color(240, 128, 128));
		btnVoltar.setBounds(421, 324, 159, 30);
		contentPane.add(btnVoltar);
		
		Label label_3 = new Label("ID:");
		label_3.setFont(new Font("Dialog", Font.PLAIN, 15));
		label_3.setBounds(42, 89, 62, 27);
		contentPane.add(label_3);
		
		textField = new JTextField();
		textField.setColumns(10);
		textField.setBounds(157, 89, 357, 27);
		contentPane.add(textField);
	}
}

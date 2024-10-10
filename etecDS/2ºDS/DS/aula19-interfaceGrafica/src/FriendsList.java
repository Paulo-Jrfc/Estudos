

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

public class FriendsList extends JFrame {

	private JPanel contentPane;
	private JTextField txtCadastroDeAmigos;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					FriendsList frame = new FriendsList();
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
	public FriendsList() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 700, 400);
		contentPane = new JPanel();
		contentPane.setBackground(Color.WHITE);
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JButton btnCadastrar = new JButton("ATUALIZAR");
		btnCadastrar.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				FriendsUpdate u1 = new FriendsUpdate();
				u1.setVisible(true);
				dispose();
			}
		});
		btnCadastrar.setForeground(Color.WHITE);
		btnCadastrar.setBackground(new Color(240, 128, 128));
		btnCadastrar.setBounds(103, 320, 159, 30);
		contentPane.add(btnCadastrar);
		
		JButton btnVoltar = new JButton("DELETAR");
		btnVoltar.setFont(new Font("Tahoma", Font.BOLD, 11));
		btnVoltar.setForeground(Color.WHITE);
		btnVoltar.setBackground(new Color(240, 128, 128));
		btnVoltar.setBounds(418, 320, 159, 30);
		contentPane.add(btnVoltar);
		
		JPanel panel = new JPanel();
		panel.setBounds(82, 89, 514, 205);
		contentPane.add(panel);
		
		JButton btnVoltar_1 = new JButton("<");
		btnVoltar_1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				Home h1 = new Home();
				h1.setVisible(true);
				dispose();
			}
		});
		btnVoltar_1.setForeground(Color.WHITE);
		btnVoltar_1.setBackground(new Color(240, 128, 128));
		btnVoltar_1.setBounds(10, 18, 41, 23);
		contentPane.add(btnVoltar_1);
		
		txtCadastroDeAmigos = new JTextField();
		txtCadastroDeAmigos.setEditable(false);
		txtCadastroDeAmigos.setForeground(Color.WHITE);
		txtCadastroDeAmigos.setBackground(new Color(135, 206, 250));
		txtCadastroDeAmigos.setFont(new Font("Tahoma", Font.BOLD, 20));
		txtCadastroDeAmigos.setHorizontalAlignment(SwingConstants.CENTER);
		txtCadastroDeAmigos.setText("LISTA DE AMIGOS");
		txtCadastroDeAmigos.setBounds(0, 0, 684, 60);
		contentPane.add(txtCadastroDeAmigos);
		txtCadastroDeAmigos.setColumns(10);
	}
}

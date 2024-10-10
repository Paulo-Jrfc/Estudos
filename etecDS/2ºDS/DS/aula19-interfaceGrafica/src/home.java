import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.JButton;
import javax.swing.ImageIcon;
import java.awt.Toolkit;
import java.awt.Color;
import javax.swing.JTextField;
import javax.swing.SwingConstants;
import java.awt.Font;
import javax.swing.JTextArea;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

public class Home extends JFrame {

	private JPanel contentPane;
	private JTextField txtListaDeAmigos;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Home frame = new Home();
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
	public Home() {
		setIconImage(Toolkit.getDefaultToolkit().getImage(Home.class.getResource("/imagens/login02.png")));
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 700, 400);
		contentPane = new JPanel();
		contentPane.setBackground(new Color(255, 255, 255));
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JButton btnCadastrar = new JButton("CADASTRAR");
		btnCadastrar.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				Register c1 = new Register();
				c1.setVisible(true);
				dispose();
			}
		});
		btnCadastrar.setForeground(Color.WHITE);
		btnCadastrar.setBackground(new Color(240, 128, 128));
		btnCadastrar.setBounds(120, 325, 159, 30);
		contentPane.add(btnCadastrar);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setBounds(218, 66, 245, 234);
		lblNewLabel.setIcon(new ImageIcon(Home.class.getResource("/imagens/login02.png")));
		contentPane.add(lblNewLabel);
		
		JButton btnListar = new JButton("LISTAR");
		btnListar.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				FriendsList l1 = new FriendsList();
				l1.setVisible(true);
				dispose();
			}
		});
		btnListar.setForeground(Color.WHITE);
		btnListar.setBackground(new Color(240, 128, 128));
		btnListar.setBounds(418, 325, 159, 30);
		contentPane.add(btnListar);
		
		txtListaDeAmigos = new JTextField();
		txtListaDeAmigos.setForeground(Color.WHITE);
		txtListaDeAmigos.setEditable(false);
		txtListaDeAmigos.setFont(new Font("Tahoma", Font.BOLD, 20));
		txtListaDeAmigos.setBackground(new Color(135, 206, 250));
		txtListaDeAmigos.setHorizontalAlignment(SwingConstants.CENTER);
		txtListaDeAmigos.setText("LISTA DE AMIGOS");
		txtListaDeAmigos.setBounds(0, 0, 684, 55);
		contentPane.add(txtListaDeAmigos);
		txtListaDeAmigos.setColumns(10);
	}
}

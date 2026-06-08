using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace Projeto
{
    public partial class FrmLogin : Form
    {
        public FrmLogin()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string login = "fl";
            string senha = "151120";

            if (textBox1.Text == "")
            {
                MessageBox.Show("Informe o Login");
                textBox1.Focus();
            }
            else
                if (textBox2.Text == "")
                {
                    MessageBox.Show("Informe a Senha");
                    textBox2.Focus();
                }
                else
                {
                    //acesso ao sistema
                    if (textBox1.Text == login && textBox2.Text == senha)
                    {
                        //se deu certo
                        MessageBox.Show(login + ", Bem vindo ao Sistema!");
                        FrmPrincipal principal = new FrmPrincipal();
                        this.Visible = false;
                        principal.ShowDialog();
                    }
                    else
                    {
                        //se deu errado
                        MessageBox.Show("Login/Senha inválidos!");
                        textBox1.Clear();
                        textBox2.Clear();
                    }
                }
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

    }
}

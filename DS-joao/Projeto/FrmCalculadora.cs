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
    public partial class FrmCalculadora : Form
    {
        public FrmCalculadora()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            //tratamento de erro
            //verificar se os valores estão preenchidos!
            if (textBox1.Text == "")
            {
                MessageBox.Show("Informe o valor 01");
                textBox1.Focus();
            }
            else
                if (textBox2.Text == "")
                {
                    MessageBox.Show("Informe o valor 02");
                    textBox2.Focus();
                }
                else
                {
                    //botão calcular
                    double valor01, valor02, soma,sub,mul,di; //declaração de variáveis locais
                    valor01 = double.Parse(textBox1.Text);//convert string para double
                    valor02 = double.Parse(textBox2.Text);
                    soma = valor01 + valor02;
                    textBox3.Text = Convert.ToString(soma);//mostrando o valor na cx de texto
                //vai ser aquiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii
                    sub = valor01 - valor02;
                    textBox4.Text = Convert.ToString(sub);//mostrando o valor na cx de texto
                    mul = valor01 * valor02;
                    textBox5.Text = Convert.ToString(mul);//mostrando o valor na cx de texto
                    di = valor01 / valor02;
                    textBox6.Text = Convert.ToString(di);//mostrando o valor na cx de texto
                }
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            //botão limpar
            textBox1.Clear();
            textBox2.Clear();
            textBox3.Clear();
            textBox4.Clear();
            textBox5.Clear();
            textBox6.Clear();
        }
    }
}

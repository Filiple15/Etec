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
    public partial class FrmPagamentos : Form
    {
        public FrmPagamentos()
        {
            InitializeComponent();
        }

        private void listBox1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        //destinado para as variáveis globais
        int opcao = 0; //controlar as opções disponiveis

        private void radioButton1_CheckedChanged(object sender, EventArgs e)
        {
            opcao = 1;
        }

        private void radioButton2_CheckedChanged(object sender, EventArgs e)
        {
            opcao = 2;
        }

        private void radioButton3_CheckedChanged(object sender, EventArgs e)
        {
            opcao = 3;
        }

        private void radioButton4_CheckedChanged(object sender, EventArgs e)
        {
            opcao = 4;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            //verificar
            if (opcao == 0)
            {
                MessageBox.Show("Selecione a Opção Desejada!");
            }
            else
                if (opcao == 1)
                {    //inserindo as informações no List
                    MessageBox.Show("1");
                    listBox1.Items.Add("Forma de pagamento (Dinheiro)");
                }
                else
                    if (opcao == 2)
                    {
                        MessageBox.Show("2");
                        listBox1.Items.Add("Forma de pagamento (Credito)");
                    }
                    else
                        if (opcao == 3)
                        {
                            MessageBox.Show("3");
                            listBox1.Items.Add("Forma de pagamento (Debito)");
                        }
                        else
                            if (opcao == 4)
                            {
                                MessageBox.Show("4");
                                listBox1.Items.Add("Forma de pagamento (Pix)");
                            }
        }

    }
}

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
    public partial class FrmRadio : Form
    {
        public FrmRadio()
        {
            InitializeComponent();
        }

        //destinado para as variáveis globais
        int opcao = 0; //controlar as opções disponiveis


        private void listBox1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

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

        private void radioButton5_CheckedChanged(object sender, EventArgs e)
        {
            opcao = 5;
        }

        private void radioButton6_CheckedChanged(object sender, EventArgs e)
        {
            opcao = 6;
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
                    listBox1.Items.Add("Desenvolvedor Web/Mobile, Engenheiro de Software, Programador (Frontend, Backend, Full Stack)"); 
                }
                else
                    if (opcao == 2)
                    {
                        listBox1.Items.Add("Cientista de Dados, Analista de Dados, Engenheiro de Machine Learning, Analista de BI (Business Intelligence)"); 
                    }
                    else
                        if (opcao == 3)
                        {
                            listBox1.Items.Add("Analista de Segurança, Especialista em Cibersegurança, Ethical Hacker"); 
                        }
                        else
                            if (opcao == 4)
                            {
                                listBox1.Items.Add("Especialista em Cloud Computing, Analista de Redes, Engenheiro DevOps."); 
                            }
                            else
                                if (opcao == 5)
                                {
                                    listBox1.Items.Add("Gestor de TI, Gerente de Projetos, Técnico de Suporte/Help Desk."); 
                                }
                                else
                                    if (opcao == 6)
                                    {
                                        listBox1.Items.Add("UI Designer, UX Designer."); 
                                    }
        }
    }
}

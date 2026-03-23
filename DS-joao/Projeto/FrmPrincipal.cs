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
    public partial class FrmPrincipal : Form
    {
        public FrmPrincipal()
        {
            InitializeComponent();
        }

        //criando a função de SAIR do Sistema
        private void sairToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void botõesToolStripMenuItem_Click(object sender, EventArgs e)
        {
            //chamando o formulário de botões
            Form1 botoes = new Form1();
            botoes.ShowDialog();
        }

        private void gangorraToolStripMenuItem_Click(object sender, EventArgs e)
        {
            FrmGangorra g = new FrmGangorra();
            g.ShowDialog();
        }

        private void calculadoraToolStripMenuItem_Click(object sender, EventArgs e)
        {
            FrmCalculadora calc = new FrmCalculadora();
            calc.ShowDialog();
        }

        private void botõesRádioToolStripMenuItem_Click(object sender, EventArgs e)
        {
            FrmRadio radio = new FrmRadio();
            radio.ShowDialog();
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void pagamentosToolStripMenuItem_Click(object sender, EventArgs e)
        {
            FrmPagamentos pagamentos = new FrmPagamentos();
            pagamentos.ShowDialog();
        }

        private void checkBoxToolStripMenuItem_Click(object sender, EventArgs e)
        {
            FrmCheckBox check = new FrmCheckBox();
            check.ShowDialog();
        }

       
    }
}

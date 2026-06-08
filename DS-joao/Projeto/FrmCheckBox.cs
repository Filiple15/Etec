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
    public partial class FrmCheckBox : Form
    {
        public FrmCheckBox()
        {
            InitializeComponent();
        }
        //destinado para as variáveis globais
        int pessoa = 0; //controlar as opções disponiveis

        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                pessoa++;
            }
            else {
                pessoa--;
            }
            label2.Text = Convert.ToString(pessoa);
        }

        private void checkBox2_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                pessoa++;
            }
            else
            {
                pessoa--;
            }
            label2.Text = Convert.ToString(pessoa);
        }

        private void checkBox3_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                pessoa++;
            }
            else
            {
                pessoa--;
            }
            label2.Text = Convert.ToString(pessoa);
        }

        private void checkBox4_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                pessoa++;
            }
            else
            {
                pessoa--;
            }
            label2.Text = Convert.ToString(pessoa);
        }

        private void checkBox5_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                pessoa++;
            }
            else
            {
                pessoa--;
            }
            label2.Text = Convert.ToString(pessoa);
        }

        private void checkBox6_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                pessoa++;
            }
            else
            {
                pessoa--;
            }
            label2.Text = Convert.ToString(pessoa);
        }

        private void checkBox7_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                pessoa++;
            }
            else
            {
                pessoa--;
            }
            label2.Text = Convert.ToString(pessoa);
        }

        private void checkBox8_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                pessoa++;
            }
            else
            {
                pessoa--;
            }
            label2.Text = Convert.ToString(pessoa);
        }

        private void checkBox9_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                pessoa++;
            }
            else
            {
                pessoa--;
            }
            label2.Text = Convert.ToString(pessoa);
        }

        private void checkBox10_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                pessoa++;
            }
            else
            {
                pessoa--;
            }
            label2.Text = Convert.ToString(pessoa);
        }

        private void FrmCheckBox_Load(object sender, EventArgs e)
        {

        }

    }
}

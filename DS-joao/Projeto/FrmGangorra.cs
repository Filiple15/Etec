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
    public partial class FrmGangorra : Form
    {
        public FrmGangorra()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            button1.Text = "OFF";
            button1.Enabled = false;
            button2.Text = "ON";
            button2.Enabled = true;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            button1.Text = "ON";
            button1.Enabled = true;
            button2.Text = "OFF";
            button2.Enabled = false;
        }
    }
}

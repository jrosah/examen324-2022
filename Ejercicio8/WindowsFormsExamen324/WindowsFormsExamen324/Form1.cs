using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsExamen324
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            ServiceReference1.WebService1SoapClient sw = new ServiceReference1.WebService1SoapClient();
            dataGridView1.DataSource = sw.PERSONAS().Tables[0];
        }

        private void button2_Click(object sender, EventArgs e)
        {
            ServiceReference1.WebService1SoapClient sw = new ServiceReference1.WebService1SoapClient();
            MessageBox.Show(sw.DELETE(textIDCI.Text), "EXAMEN INF324");
            dataGridView1.DataSource = sw.PERSONAS().Tables[0];
            textCI.Text = "";
            textNC.Text = "";
            textFC.Text = "";
            textD.Text = "";
            textIDCI.Text = "";
        }

        private void button3_Click(object sender, EventArgs e)
        {
            ServiceReference1.WebService1SoapClient sw = new ServiceReference1.WebService1SoapClient();
            MessageBox.Show(sw.INSERT(textCI.Text, textNC.Text, textFC.Text, textD.Text), "EXAMEN INF324");
            dataGridView1.DataSource = sw.PERSONAS().Tables[0];
            textCI.Text = "";
            textNC.Text = "";
            textFC.Text = "";
            textD.Text = "";
        }

        private void button1_Click(object sender, EventArgs e)
        {
            ServiceReference1.WebService1SoapClient sw = new ServiceReference1.WebService1SoapClient();
            MessageBox.Show(sw.UPDATE(textIDCI.Text, textCI.Text, textNC.Text, textFC.Text, textD.Text), "EXAMEN INF324");
            dataGridView1.DataSource = sw.PERSONAS().Tables[0];

            textCI.Text = "";
            textNC.Text = "";
            textFC.Text = "";
            textD.Text = "";
            textIDCI.Text = "";
        }

        private void dataGridView1_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            int n = e.RowIndex;
            if(n!= -1)
            {
                textCI.Text = (string)dataGridView1.Rows[n].Cells[0].Value;
                textNC.Text = (string)dataGridView1.Rows[n].Cells[1].Value.ToString();
                textFC.Text = (string)dataGridView1.Rows[n].Cells[2].Value.ToString();
                textD.Text = (string)dataGridView1.Rows[n].Cells[3].Value;

                textIDCI.Text = (string)dataGridView1.Rows[n].Cells[0].Value;
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            textCI.Text = "";
            textNC.Text = "";
            textFC.Text = "";
            textD.Text = "";
            textIDCI.Text = "";
        }
    }
}

using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Prueba16
{
    public partial class Form1 : Form
    {
        SqlConnection conexion = new SqlConnection("server = DESKTOP-TM27TIM\\SQLEXPRESS;Initial Catalog = alumnos; Integrated Security = True");
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            combo1();


        }

        private void combo1() {
            conexion.Open();
            DataSet combox1 = new DataSet();

            string sql = "select carrera,id from carreras";
            SqlDataAdapter adapter = new SqlDataAdapter(sql,conexion);
            adapter.Fill(combox1,"carreras");

            comboBox1.DisplayMember = "carrera";
            comboBox1.ValueMember = "id";
            comboBox1.DataSource = combox1.Tables[0].DefaultView;
            conexion.Close();


        }

        private void combo2(string id)
        {
            
            conexion.Open();
           // string id = comboBox1.SelectedValue.ToString();
            
            DataSet combox2 = new DataSet();
            string sql = "select nombre from usuarios where carrera='" + id + "'";
            SqlDataAdapter adapter = new SqlDataAdapter(sql,conexion);
            adapter.Fill(combox2, "usuarios");

            
            comboBox2.DisplayMember = "nombre";
            comboBox2.DataSource = combox2.Tables[0].DefaultView;

            conexion.Close();
        }

  
        private void comboBox1_TextChanged(object sender, EventArgs e)
        {
            
          
          
        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
         
        }

        private void comboBox1_ValueMemberChanged(object sender, EventArgs e)
        {
            
        }

        private void comboBox1_SelectionChangeCommitted(object sender, EventArgs e)
        {
            MessageBox.Show(comboBox1.SelectedValue.ToString());
            combo2(comboBox1.SelectedValue.ToString());
        }
    }
}

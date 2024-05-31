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

namespace prueba11
{
    public partial class Form1 : Form
    {
       // SqlConnection conexion = new SqlConnection("server=DESKTOP-TM27TIM\\SQLEXPRESS;database=alumnos;User ID =sa;Password=12345");
        SqlConnection conexion = new SqlConnection("server=DESKTOP-TM27TIM\\SQLEXPRESS;database=alumnos; integrated security=true");

        public Form1()
        {
            InitializeComponent();
        }

      
        private void Form1_Load(object sender, EventArgs e)
        {
            combobox();
        }
        private void combobox()
        {
            conexion.Open();
            DataSet combo = new DataSet();

            string sql = "select carrera,id from carreras";
            SqlDataAdapter adapter = new SqlDataAdapter(sql,conexion);

            adapter.Fill(combo,"carreras");

            comboBox1.DataSource = combo.Tables[0].DefaultView;
            comboBox1.DisplayMember = "carrera";
            comboBox1.ValueMember = "id";


            string select = "SELECT * FROM usuarios";
            SqlDataAdapter dataAdapter = new SqlDataAdapter(select, conexion); 
            DataSet ds = new DataSet();
            dataAdapter.Fill(ds);
            dataGridView1.ReadOnly = true;
            dataGridView1.DataSource = ds.Tables[0];



            conexion.Close();
        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            string nom = textBox1.Text;
            string ape = textBox2.Text;
            string car = comboBox1.SelectedValue.ToString();
            string id = textBox3.Text;

            conexion.Open();
            string sql = "insert into usuarios (nombre,apellido,carrera,id) values('"+nom+"','"+ape+"','"+car+"',"+id+")";
            SqlCommand comando = new SqlCommand(sql,conexion);
            comando.ExecuteNonQuery();
            MessageBox.Show("Alumno Ingresado");

            conexion.Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            string id = textBox3.Text;
            int row;
            conexion.Open();

            string sql = "delete from usuarios where id=" + id + "";
            SqlCommand comando = new SqlCommand(sql, conexion);
            row = comando.ExecuteNonQuery();

            if (row == 1)
            {
                MessageBox.Show("Alumno Eliminado");
            }
            else
            {
                MessageBox.Show("Alumno No Existe");
            }
            conexion.Close();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            string nom = textBox1.Text;
            string ape = textBox2.Text;
            string car = comboBox1.SelectedValue.ToString();
            string id = textBox3.Text;

            conexion.Open();
            string sql = "update usuarios set nombre='"+nom+"', apellido='"+ape+"',carrera='"+car+"' where id ="+id+"";
            SqlCommand comando = new SqlCommand(sql,conexion);
            comando.ExecuteNonQuery();

            MessageBox.Show("Alumno Actualizado");
            conexion.Close();


        }

        private void button4_Click(object sender, EventArgs e)
        {
            string id = textBox3.Text;
            conexion.Open();

            string sql = "select nombre,apellido,carrera from usuarios where id ="+id+"";
            SqlCommand comando = new SqlCommand(sql,conexion);
            SqlDataReader alumnos = comando.ExecuteReader();

            if (alumnos.Read())
            {
                textBox1.Text = alumnos["nombre"].ToString();
                textBox2.Text = alumnos["apellido"].ToString();
                comboBox1.SelectedValue = alumnos["carrera"].ToString();

            }
            conexion.Close();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            conexion.Open();

            string sql = "select nombre,apellido,carrera,id from usuarios";
            SqlCommand comando = new SqlCommand(sql,conexion);
            SqlDataReader alumnos = comando.ExecuteReader();
            

            textBox4.Clear();
            while (alumnos.Read())
            {
                textBox4.AppendText(alumnos["id"].ToString());
                textBox4.AppendText(alumnos["nombre"].ToString());
                textBox4.AppendText(alumnos["apellido"].ToString());
                textBox4.AppendText(alumnos["carrera"].ToString());
                textBox4.AppendText("\n");
            }


        
            conexion.Close();
        }
    }
}

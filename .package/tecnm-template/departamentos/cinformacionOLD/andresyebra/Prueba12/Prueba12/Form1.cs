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

namespace Prueba12
{
    public partial class Form1 : Form
    {

       // SqlConnection conexion = new SqlConnection("server=DESKTOP-TM27TIM\\SQLEXPRESS;database=alumnos;User ID=sa;Password=12345");
        SqlConnection conexion = new SqlConnection("server=DESKTOP-TM27TIM\\SQLEXPRESS;database=alumnos;integrated security=true");
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            ComboBox();
        }

        private  void ComboBox()
        {
            conexion.Open();
            DataSet combo = new DataSet();

            string sql = "select carrera,id from carreras";
            SqlDataAdapter adapter = new SqlDataAdapter(sql,conexion);
            adapter.Fill(combo, "carreras");

            comboBox1.DataSource = combo.Tables[0].DefaultView;
            comboBox1.DisplayMember = "carrera";
            comboBox1.ValueMember = "id";



            string sql2 = "select * from usuarios";
            DataSet tabla = new DataSet();
            SqlDataAdapter adap = new SqlDataAdapter(sql2,conexion);

            adap.Fill(tabla);
            dataGridView1.ReadOnly = true;
            dataGridView1.DataSource = tabla.Tables[0];


            conexion.Close();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string nom = textBox1.Text;
            string ape = textBox2.Text;
            string car = comboBox1.SelectedValue.ToString();
            string id = textBox3.Text;

            conexion.Open();
            string sql = "insert into usuarios (nombre,apellido,carrera,id) values('"+nom+"','"+ape+"','"+car+"',"+id+")";
            SqlCommand comando = new SqlCommand(sql, conexion);
            comando.ExecuteNonQuery();

            MessageBox.Show("Alumno Ingresado");
            conexion.Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            string id = textBox3.Text;
            int row;

            conexion.Open();
            string sql = "delete from usuarios where id="+id+"";
            SqlCommand comando = new SqlCommand(sql,conexion);
            row = comando.ExecuteNonQuery();

            if(row == 1)
            {
                MessageBox.Show("Alumno Eliminado");
            }
            else
            {
                MessageBox.Show("Alumno No existe");
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
            string sql = "update usuarios set nombre='"+nom+"',apellido='"+ape+"',carrera='"+car+"' where id ="+id+"";
            SqlCommand comando = new SqlCommand(sql,conexion);
            comando.ExecuteNonQuery();

            MessageBox.Show("Alumno Actualizado");
            conexion.Close();

        }

        private void button4_Click(object sender, EventArgs e)
        {
            string id = textBox3.Text;
            conexion.Open();

            string sql = "select nombre,apellido,carrera from usuarios where id = "+id+"";
            SqlCommand comando = new SqlCommand(sql,conexion);
            SqlDataReader alumno = comando.ExecuteReader();

            if (alumno.Read())
            {
                textBox1.Text = alumno["nombre"].ToString();
                textBox2.Text = alumno["apellido"].ToString();
                comboBox1.SelectedValue = alumno["carrera"].ToString();
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

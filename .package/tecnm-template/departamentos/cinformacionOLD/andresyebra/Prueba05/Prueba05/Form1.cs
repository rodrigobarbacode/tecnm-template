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

namespace Prueba05
{
    public partial class Form1 : Form
    {
        SqlConnection conexion = new SqlConnection("server=DESKTOP-TM27TIM\\SQLEXPRESS;database=alumnos; User ID=sa;Password=12345;");
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string nom = textBox1.Text;
            string ape = textBox2.Text;
            string car = textBox3.Text;
            string id = textBox4.Text;
            conexion.Open();

            string sql = "insert into usuarios (nombre,apellido,carrera,id) values('"+nom+"','"+ape+"','"+car+"',"+id+")";
            SqlCommand comando = new SqlCommand(sql,conexion);
            comando.ExecuteNonQuery();
            MessageBox.Show("Ingresaste Alumno");
            conexion.Close();

        }

        private void button2_Click(object sender, EventArgs e)
        {
            string id = textBox4.Text;
            int cantidad;
            conexion.Open();
            string sql = "delete from usuarios where id = " + id + "";
            SqlCommand comando = new SqlCommand(sql,conexion);
            cantidad = comando.ExecuteNonQuery();
            if (cantidad == 1) {
                MessageBox.Show("Alumno Eliminado");

            }
            else
            {
                MessageBox.Show("No existe Alumno");
            }
            conexion.Close();


        }

        private void button3_Click(object sender, EventArgs e)
        {
            string nom = textBox1.Text;
            string ape = textBox2.Text;
            string car = textBox3.Text;
            string id = textBox4.Text;
            conexion.Open();
            string sql = "update usuarios set nombre='"+nom+"' , apellido='"+ape+"',carrera='"+car+"' where id = "+id+"";

            SqlCommand comando = new SqlCommand(sql,conexion);
            comando.ExecuteNonQuery();

            MessageBox.Show("Alumno Actualizado");
            conexion.Close();


        }

        private void button4_Click(object sender, EventArgs e)
        {
            string id = textBox4.Text;
            conexion.Open();

            string sql = "select nombre,apellido,carrera from usuarios where id ="+id+"";
            SqlCommand comando = new SqlCommand(sql,conexion);
            SqlDataReader alumno = comando.ExecuteReader();

            if (alumno.Read())
            {
                textBox1.Text = alumno["nombre"].ToString();
                textBox2.Text = alumno["apellido"].ToString();
                textBox3.Text = alumno["carrera"].ToString();

            }

            conexion.Close();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            string id = textBox4.Text;
            conexion.Open();
            string sql = "select * from usuarios";
            SqlCommand comando = new SqlCommand(sql,conexion);
            SqlDataReader alumnos = comando.ExecuteReader();
            textBox5.Clear();
            while (alumnos.Read())
            {
                textBox5.AppendText(alumnos["id"].ToString());
                textBox5.AppendText("-");
                textBox5.AppendText(alumnos["nombre"].ToString());
                textBox5.AppendText("-");
                textBox5.AppendText(alumnos["apellido"].ToString());
                textBox5.AppendText("-");
                textBox5.AppendText(alumnos["carrera"].ToString());
                textBox5.AppendText("\n");
            }
            conexion.Close();
        }
    }
}

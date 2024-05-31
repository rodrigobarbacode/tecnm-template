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

namespace Prueba09
{
    public partial class Form1 : Form
    {
        SqlConnection conexion = new SqlConnection("server=DESKTOP-TM27TIM\\SQLEXPRESS;database=alumnos;User ID=sa;Password=12345");
       // SqlConnection conecion = new SqlConnection("server=DESKTOP-TM27TIM\\SQLEXPRESS;database=alumnos;integrated security=true");
        public Form1()
        {
            InitializeComponent();
        }
        // Metodo Form_Load Carga cualquier metodo cuando se inicia el programa
        private void Form1_Load(object sender, EventArgs e)
        {
            ComboBox(); // Metodo que cargar los Datos al Combo Box
        }

        // Metodo de Cargar Datos del ComboBox
        private void ComboBox()
        {
            conexion.Open(); // Abre Conexion 
            DataSet combo = new DataSet();

            string sql = "select carrera,id from carreras"; // Sentencia SQL Muestra Carrera y su ID
            SqlDataAdapter adapter = new SqlDataAdapter(sql,conexion);  // Ejecutar Sentencia SQL

            adapter.Fill(combo,"carreras"); // Llena  el combo  carrera 

            comboBox1.DataSource = combo.Tables["carreras"].DefaultView; // Tabla 
            comboBox1.DisplayMember = "carrera"; // Muestra en el ComboBox las carreras de la Tabla
            comboBox1.ValueMember = "id";       // Manda el ID  de la carrera
            conexion.Close();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string nom = textBox1.Text;
            string ape = textBox2.Text;
            string car = comboBox1.SelectedValue.ToString(); //Recibe el ID de la Carrera Selecionada
            string id = textBox3.Text;

            conexion.Open();
            string sql = "insert into usuarios (nombre,apellido,carrera,id) values ('"+nom+"','"+ape+"','"+car+"',"+id+")";
            SqlCommand comando = new SqlCommand(sql,conexion);
            

            if (nom == "" || ape == "" || car == "" || id == "")
            {
                MessageBox.Show("Campo Vacio");
            }
            else
            {
                MessageBox.Show("Alumno Ingresado");
                comando.ExecuteNonQuery();

            }

            conexion.Close();


        }

        private void button2_Click(object sender, EventArgs e)
        {
            string id = textBox3.Text;
            int cantidad;
            
            conexion.Open();
            string sql = "delete  from usuarios where id="+id+"";
            SqlCommand comando = new SqlCommand(sql,conexion);
          

            if (id == ""){
                MessageBox.Show("Ingresa ID");
            }else {

      
                cantidad = comando.ExecuteNonQuery();
                if (cantidad == 1){
                    MessageBox.Show("Alumno Eliminado");
                } else {
                    MessageBox.Show("Alumno No Existe");
                }
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
            string sql = "update usuarios set nombre='" + nom + "',apellido='" + ape + "',carrera='" + car + "' where id =" + id + "";
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
            

            if (id =="")
            {
                MessageBox.Show("Ingresa ID");
            }
            else
            {
                SqlDataReader alumnos = comando.ExecuteReader();
                if (alumnos.Read())
                {
                    textBox1.Text = alumnos["nombre"].ToString();
                    textBox2.Text = alumnos["apellido"].ToString();
                    comboBox1.SelectedValue = alumnos["carrera"].ToString();

                }
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
                textBox4.AppendText("-");
                textBox4.AppendText(alumnos["nombre"].ToString());
                textBox4.AppendText("-");
                textBox4.AppendText(alumnos["apellido"].ToString());
                textBox4.AppendText("-");
                textBox4.AppendText(alumnos["carrera"].ToString());
                textBox4.AppendText("\n");


            }
            conexion.Close();

        }
    }
}

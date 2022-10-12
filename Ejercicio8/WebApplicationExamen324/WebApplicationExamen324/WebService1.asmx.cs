using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using System.Data;
using System.Data.SqlClient;


namespace WebApplicationExamen324
{
    /// <summary>
    /// Descripción breve de WebService1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // Para permitir que se llame a este servicio web desde un script, usando ASP.NET AJAX, quite la marca de comentario de la línea siguiente. 
    // [System.Web.Script.Services.ScriptService]
    public class WebService1 : System.Web.Services.WebService
    {

        [WebMethod]
        public string HelloWorld()
        {
            return "Hola a todos";
        }

        [WebMethod]
        public DataSet PERSONAS()
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=(local); database = mibasejorgerosa; user = examen324; pwd = 123456";
            SqlDataAdapter ada = new SqlDataAdapter();
            ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con;
            ada.SelectCommand.CommandText = "select * from persona";
            ada.SelectCommand.CommandType = CommandType.Text;
            DataSet ds = new DataSet();
            ada.Fill(ds);
            return ds;
        }

        [WebMethod]
        public string INSERT(string ci, string nombrec, string fechanac, string departamento)
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=(local); database = mibasejorgerosa; user = examen324; pwd = 123456";
            SqlDataAdapter ada = new SqlDataAdapter();
            ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con;
            ada.SelectCommand.CommandText = string.Format("insert into persona values ('{0}','{1}','{2}','{3}')", ci, nombrec, fechanac, departamento);
            ada.SelectCommand.CommandType = CommandType.Text;
            DataSet ds = new DataSet();
            ada.Fill(ds);
            return "Inserción Exitosa!!";
        }

        [WebMethod]
        public string UPDATE(string idCI, string ci, string nombrec, string fechanac, string departamento)
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=(local); database = mibasejorgerosa; user = examen324; pwd = 123456";
            SqlDataAdapter ada = new SqlDataAdapter();
            ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con;
            ada.SelectCommand.CommandText = string.Format("update persona set ci='{1}', nombre_completo='{2}', fecha_de_nacimiento='{3}', departamento='{4}' where ci like '{0}'", idCI ,ci, nombrec, fechanac, departamento);
            ada.SelectCommand.CommandType = CommandType.Text;
            DataSet ds = new DataSet();
            ada.Fill(ds);
            return "Edición Exitosa!!";
        }

        [WebMethod]
        public string DELETE(string idCI)
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=(local); database = mibasejorgerosa; user = examen324; pwd = 123456";
            SqlDataAdapter ada = new SqlDataAdapter();
            ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con;
            ada.SelectCommand.CommandText = string.Format("DELETE PERSONA WHERE ci like'{0}'", idCI);
            ada.SelectCommand.CommandType = CommandType.Text;
            DataSet ds = new DataSet();
            ada.Fill(ds);
            return "Eliminacion Exitosa!!";
        }

    }
}

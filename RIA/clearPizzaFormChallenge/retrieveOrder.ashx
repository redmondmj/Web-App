<%@ WebHandler Language="C#" Debug="true" Class="retrieveOrder" %>

using System;
using System.Web;
using MySql.Data.MySqlClient;
using System.IO;
using System.Collections.Generic;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

public class retrieveOrder : IHttpHandler {

    // declaring variables to hold my database connectivity objects
    MySqlConnection dbConnection;
    MySqlCommand dbCommand;
    MySqlDataReader dbReader;

    public void ProcessRequest (HttpContext context) {
        try {
            // connect to database
            dbConnection = new MySqlConnection("Database=classsamples;Data Source=localhost; User Id=classsamples;Password=classsamples");
            dbConnection.Open();

            // construct data adapter and setup with SQL to use with the database
            dbCommand = new MySqlCommand("SELECT * FROM tblPizzaOrders", dbConnection);
            dbReader = dbCommand.ExecuteReader();


        } finally {
            // close db connection
            dbConnection.Close();
        }
    }

    public bool IsReusable {
        get {
            return false;
        }
    }

}

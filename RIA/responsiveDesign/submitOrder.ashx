<%@ WebHandler Language="C#" Debug="true" Class="submitOrder" %>

using System;
using System.Web;
using System.IO;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;
using MySql.Data.MySqlClient;

public class submitOrder : IHttpHandler {

    public void ProcessRequest (HttpContext context) {
        // open streamreader to read the input stream JSON text
        StreamReader streamReader = new StreamReader(context.Request.InputStream);
        String jsonString = streamReader.ReadToEnd();

        // using JSON.NET to parse the string
        dynamic result = JsonConvert.DeserializeObject(jsonString);

        // pull out content
        //orderName = result["name"];
        string orderName = result.name;
        string orderAddress = result.address;
        string orderCity = result.city;
        string orderSize = result.size;
        JArray toppings = result.toppings;
        JArray notes = result.notes;

        // output data test
        string output = orderName + "<br/>" + orderAddress + "<br/>" + orderCity + "<br/>" + orderSize + "<br/>";
        output += "Toppings:<br/>";
        foreach (JObject item in toppings) {
            output += item["topping"] + "<br/>";
        }
        output += "Delivery Notes:<br/>";
        foreach (JObject item in notes) {
            output += item["note"] + "<br/>";
        }
        context.Response.Write(output);

        /*
		// --------------------------------------------------------- CHALLENGE SOLUTION
		//-- Open a database connection - MySql
        MySqlConnection dbConnection;
        MySqlCommand dbCommand;
        dbConnection = new MySqlConnection("Database=classsamples;Data Source=localhost;User Id=classsamples;Password=classsamples");
        dbConnection.Open();

        //-- constucting UPDATE sql
        string strSQL;
        strSQL = "INSERT INTO tblPizzaOrders (name,address,city,size,toppings,notes) VALUES (?name,?address,?city,?size,?toppings,?notes)";

        //-- Create and issue an SQL command through the database connection
        dbCommand = new MySqlCommand(strSQL, dbConnection);
        dbCommand.Parameters.Add("?name", orderName);
        dbCommand.Parameters.Add("?address", orderAddress);
        dbCommand.Parameters.Add("?city", orderCity);
        dbCommand.Parameters.Add("?size", orderSize);

        string delimitedString = "";
        foreach (JObject item in toppings) {
            delimitedString += item["topping"] + ",";
        }
        delimitedString = delimitedString.Remove(delimitedString.Length - 1);
        dbCommand.Parameters.Add("?toppings", delimitedString);

        delimitedString = "";
        foreach (JObject item in notes) {
            delimitedString += item["note"] + ",";
        }
        delimitedString = delimitedString.Remove(delimitedString.Length - 1);
        dbCommand.Parameters.Add("?notes", delimitedString);

        dbCommand.ExecuteNonQuery();
        dbConnection.Close();
        // --------------------------------------------------------------------------------
        */

    }

    public bool IsReusable {
        get {
            return false;
        }
    }

}

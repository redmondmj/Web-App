<%@ WebHandler Language="C#" Debug="true" Class="submitOrder" %>

using System;
using System.Web;
using System.IO;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

public class submitOrder : IHttpHandler {

    public void ProcessRequest (HttpContext context) {
        // open the streamreader and read the input stream (JSON)
        StreamReader streamReader = new StreamReader(context.Request.InputStream);
        String jsonString = streamReader.ReadToEnd();

        // convert json string to a data structure in which we can get at the data
        dynamic result = JsonConvert.DeserializeObject(jsonString);

        // pull out the content
        string orderName = result.name;
        string orderAddress = result.address;
        string orderCity = result.city;
        string orderSize = result.size;
        JArray toppings = result.toppings;
        JArray notes = result.notes;

        // output the result for testing
        string output = orderName + "<br/>" + orderAddress + "<br/>" + orderCity + "<br/>" +
                        orderSize + "<br/>";
        output += "Toppings:<br/>";
        foreach (JObject item in toppings) {
            output += item["topping"] + "<br/>";
        }
        output += "Notes:<br/>";
        foreach (JObject item in notes) {
            output += item["note"] + "<br/>";
        }

        // send it back
        context.Response.Write(output);
    }

    public bool IsReusable {
        get {
            return false;
        }
    }

}

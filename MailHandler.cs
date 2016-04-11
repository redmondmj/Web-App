using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Net.Mail;

/// <summary>
/// Summary description for MailHandler
/// </summary>
public class MailHandler
{
    public MailHandler()
    {
        
    }

    public string sendIndividualMail(string targetAddress)
    {
        try
        {
            MailMessage mailMessage = new MailMessage();
            mailMessage.To.Add(targetAddress);
            mailMessage.From = new MailAddress("trurorotary@gmail.com");
            mailMessage.Subject = "Rotary Club Yearbook Varification";
            mailMessage.Body = "Thank you for supporting the Rotary Club of Truro,\n\n The link below will take you to a login page.\n\n Enter the following\n username:rotarysponsor\n password:r0t@rysupporter\n\n Once logged in, you can check the information of your business and make sure everything is as you would like it to appear in the yearbook.";
            SmtpClient smtpClient = new SmtpClient("smtp.nscctruro.ca");
            smtpClient.Send(mailMessage);
            return("E-mail sent!");
        }
        catch (Exception ex)
        {
            return ("Could not send the e-mail - error: " + ex.Message);
        }
    }
}

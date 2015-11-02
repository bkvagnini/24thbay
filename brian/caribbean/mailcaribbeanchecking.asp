<%@ LANGUAGE="VBSCRIPT" %>
<% 

''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
'MODULE:   G & L Internet Bank Caribbean Form ASP Mailer
'FILENAME: mailcaribbeanchecking.asp
'PATH:     /feedback
'VERSION:  1.0
'AUTHOR:   Carrie White -- Technical Software Services, Inc.
'PURPOSE:  This ASP requests the form fields from the Feedback form.
'          The fields are then parsed  and mailed using IIS CDONTS for NT object
'          on the web server.  A local SMTP service must be installed and running
'          on the web server.
'CREATION DATE: Jan 20, 2000
'LAST MODIFIED: Jan 20, 2000
'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''

'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
'OBJECTS:
'Form elements:
'	Email							
'	Location
'	Comments		
'
'	Mail object:  CDONTS.NewMail
'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''

Option Explicit                       'I must explicitly declare all variables to avoid mistakes
On Error Resume Next                  'Keep going if an error occurs

'My lovely explicitly declared variables
Dim objEmail, emailFrom, emailTo, emailSubject, flagImportance, emailBody 

Session("Checking100") = "YES"

'Set From, To & Subject Line email variables
'emailFrom    = "jryskids@yahoo.com"
emailFrom    = Trim(Request.Form("myEmail"))
emailTo      = "brian@vagnini.net"
emailSubject = "Caribbean Promotion Results from www.g-lbank.com"
flagImportance = 2            'High Priority Email

Application.Lock
Application("CaribbeanHits") = Application("CaribbeanHits") + 1
Application.Unlock


'Set my Email body text with requested form variables:

emailBody    =  "Name: " & vbTab & vbTab & Request.Form("myName")  & vbCrLf & vbCrLf
emailBody    = emailBody & "Address: "  & vbTab & vbTab & Request.Form("myAddress")& vbCrLf & vbCrLf 
emailBody    = emailBody & "City: "  & vbTab & vbTab & Request.Form("myCity")& vbCrLf & vbCrLf 
emailBody    = emailBody & "State: "  & vbTab & vbTab & Request.Form("myState")& vbCrLf & vbCrLf 
emailBody    = emailBody & "Zip: "  & vbTab & vbTab & Request.Form("myZip")& vbCrLf & vbCrLf 
emailBody    = emailBody & "Day Phone: "  & vbTab & vbTab & Request.Form("myDayPhone")& vbCrLf & vbCrLf 
emailBody    = emailBody & "Night Phone: "  & vbTab & vbTab & Request.Form("myNightPhone")& vbCrLf & vbCrLf 
emailBody    = emailBody & "Email: "  & vbTab & vbTab & Request.Form("myEmail")& vbCrLf & vbCrLf 
emailBody    = emailBody & "Number of Hits so far: "  & vbTab & vbTab & Application("CaribbeanHits")


'Create my nifty mailer object
Set objEmail = Server.CreateObject("CDONTS.NewMail")

'Assign nifty mailer object necessary parameters
objEmail.From     = emailFrom
objEmail.To       = emailTo
objEmail.Subject  = emailSubject
objEmail.Body     = emailBody
objEmail.Importance = flagImportance   'Set as high priority
objEmail.Send                          'Look at it go!
         
Set objEmail = Nothing   

Response.Redirect "../../personal/intro.htm"  'Show user thank you page
%>

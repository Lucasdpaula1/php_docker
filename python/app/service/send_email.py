import smtplib
import os
from dotenv import load_dotenv
import ssl
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
load_dotenv()
def intialization_smtp_server(message,recevier_email,subject):
  email_address_host = os.getenv('EMAIL_ADDRESS','sem email')
  email_password_host = os.getenv('EMAIL_PASSWORD','sem senha')
  html = f"""<html>
  <head></head> 
  <p> {message} <p>
  </html> """
  context = ssl.create_default_context()
  body = html
  msg = MIMEMultipart()
  msg['to'] = recevier_email
  msg['from'] = email_address_host
  msg['subject'] = subject
  msg.attach(MIMEText(body,'html'))
  smpt_server = os.getenv('SMPT_SERVER','smtp.gmail.com'),
  port_server = os.getenv('PORT',465)
  with smtplib.SMTP_SSL(smpt_server,465,context=context) as server:
    server.login(email_address_host,email_password_host)
    server.sendmail(email_password_host,recevier_email,msg.as_string())
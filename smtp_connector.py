import os
import smtplib
from datetime import date
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
from logger import logger

from ftp_connector import name_von_backup

if not os.path.exists("CONFIGURATION"):
    logger.error("(3) PLEASE CONFIGURE FTP AND SMTP FIRST")
    print("(3) PLEASE CONFIGURE FTP AND SMTP FIRST")
    exit()
os.chdir("CONFIGURATION")

try:
    email_sender_file = open("email_sender.txt", "r")
    email_password_file = open("email_password.txt", "r")
    email_serveraddress_file = open("email_serveraddress.txt", "r")
    email_serverport_file = open("email_serverport.txt", "r")
    email_receiver_file = open("email_receiver.txt", "r")

    email_sender = email_sender_file.read()
    email_password = email_password_file.read()
    email_serveraddress = email_serveraddress_file.read()
    email_serverport = email_serverport_file.read()
    email_receiver = email_receiver_file.read()

    # Closes all the files
    email_sender_file.close()
    email_password_file.close()
    email_serveraddress_file.close()
    email_serverport_file.close()
    email_receiver_file.close()

    #If nothing has been configured yet, i.e the files don't exist,
    # the Exception is made and the script is finished.
except FileNotFoundError:
    logger.error("(5) PLEASE CONFIGURE SMTP FIRST")
    print("(5) PLEASE CONFIGURE SMTP FIRST")
    exit()




today = date.today()
date_in_DBY = today.strftime("%d-%b-%Y")

#Errorlog muss noch gemacht werden

#Name von der Webseite sollte auch noch ins Mail


#Informationen werden in das Mail eingefügt
msg = MIMEMultipart()
msg['From'] = email_sender
msg['To'] = email_receiver
msg['Subject'] = "Backup von: " + date_in_DBY
message = 'Das Backup wurde am: ' + date_in_DBY + " erfolgreich gemacht."
msg.attach(MIMEText(message))

#Verbindung zu GMX erstellt
smtp_connection = smtplib.SMTP(email_serveraddress, email_serverport)
smtp_connection.ehlo()
smtp_connection.starttls()
smtp_connection.ehlo()
smtp_connection.login(email_sender, email_password)

#Email wird versendet
smtp_connection.sendmail(email_sender, email_receiver, msg.as_string())

#Verbindung wird geschlossen
smtp_connection.quit()
print("BACKUP COMPLETE!")
import os
import smtplib
from datetime import date
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
from logger import logger
#Here the E-Mail/SMTP connection is established and handeled.
#This is also the place where the E-Mail is sent.
from ftp_connector import name_von_backup

#Check if the folder "CONFIGURATION" exists. If it doesn't end the program.
if not os.path.exists("CONFIGURATION"):
    logger.error("(3) PLEASE CONFIGURE FTP AND SMTP FIRST")
    print("(3) PLEASE CONFIGURE FTP AND SMTP FIRST")
    enter_to_close = input("Press Enter to end \n")
    exit()
os.chdir("CONFIGURATION")

#Read out all the information, which is required to establish the SMTP connection
#If it doesn't work, end the program.
#And the logger writes into the log file.
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
    enter_to_close = input("Press Enter to end \n")
    exit()




today = date.today()
date_in_DBY = today.strftime("%d-%b-%Y")


#Information is added into the E-Mail
msg = MIMEMultipart()
msg['From'] = email_sender
msg['To'] = email_receiver
msg['Subject'] = "Backup von: " + date_in_DBY
message = 'Das Backup wurde am: ' + date_in_DBY + " erfolgreich gemacht."
msg.attach(MIMEText(message))

#Connection to the GMX is established
smtp_connection = smtplib.SMTP(email_serveraddress, email_serverport)
smtp_connection.ehlo()
smtp_connection.starttls()
smtp_connection.ehlo()
smtp_connection.login(email_sender, email_password)

#E-Mail is sent
smtp_connection.sendmail(email_sender, email_receiver, msg.as_string())

#Connection is ended.
smtp_connection.quit()
print("BACKUP COMPLETE!")
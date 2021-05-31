import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText


datum = "May-05-21"

#Errorlog muss noch gemacht werden


#Informationen werden in das Mail eingefügt
msg = MIMEMultipart()
msg['From'] = 'websitebackupper@gmx.ch'
msg['To'] = 'jasonbanyer@gmail.com'
msg['Subject'] = "Backup von: " + datum
message = 'Das Backup wurde am: ' + datum + " erfolgreich gemacht."
msg.attach(MIMEText(message))

#Verbindung zu GMX erstellt
smtp_connection = smtplib.SMTP('mail.gmx.net',587)
smtp_connection.ehlo()
smtp_connection.starttls()
smtp_connection.ehlo()
smtp_connection.login('websitebackupper@gmx.ch', 'SchulePASSWORTFUERFTP2222')

#Email wird versendet
smtp_connection.sendmail('websitebackupper@gmx.ch','jasonbanyer@gmail.com',msg.as_string())

#Verbindung wird geschlossen
smtp_connection.quit()
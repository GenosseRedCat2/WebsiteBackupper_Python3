import configparser
import logging
import logging.handlers as handlers
import smtplib

#config configparser
config = configparser.ConfigParser()
config.read("config.ini")


#config logger
#logging.getLogger()
#logging.setLevel(logging.INFO)
#log_handler = handlers.RotatingFileHandler(config['LOGS']['file_name'], maxBytes=int(config['LOGS']['maxBytes']), backupCount=int(config['LOGS']['backupCount']))
#formatter = logging.Formatter('%(asctime)s - %(levelname)s - %(message)s')
#log_handler.setFormatter(formatter)
#logging.getLogger().addHandler(log_handler)

#send email configs
gmail_user = config['EMAIL']['email']
gmail_password = config['EMAIL']['password']
sent_from = gmail_user
to = config['EMAIL']['to']
subject = config['EMAIL']['subject']

body = "hello im test"

email_text = """\
From: %s
To: %s
Subject: %s

%s
""" % (sent_from, ", ".join(to), subject, body)

try:
    server = smtplib.SMTP_SSL('smtp.gmail.com', 465)
    server.ehlo()
    server.login(gmail_user, gmail_password)
    server.sendmail(sent_from, to, email_text)
    server.close()
    logging.info('email sent')
    print('Email sent!')
except EOFError as e:
    logging.error(e)
    print('eofe error')
except smtplib.SMTPRecipientsRefused as e:
    logging.error(e)
    print('wrong to email')
except:
    logging.error('Something went wrong...')
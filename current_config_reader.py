import os

# Creates the CONFIGURATION folder, if it doesn't exist yet.
# Then selects it.
from logger import logger

if not os.path.exists("CONFIGURATION"):
    os.makedirs("CONFIGURATION")
os.chdir("CONFIGURATION")

#Check if the files exist for the connections.
try:
    email_sender_file = open("email_sender.txt", "r")
    email_password_file = open("email_password.txt", "r")
    email_serveraddress_file = open("email_serveraddress.txt", "r")
    email_serverport_file = open("email_serverport.txt", "r")
    email_receiver_file = open("email_receiver.txt", "r")
    FTP_user_file = open("FTP_user.txt", "r")
    FTP_pass_file = open("FTP_pass.txt", "r")
    FTP_server_file = open("FTP_server.txt", "r")

    FTP_server = FTP_server_file.read()
    FTP_user = FTP_user_file.read()
    FTP_pass = FTP_pass_file.read()
    email_sender = email_sender_file.read()
    email_password = email_password_file.read()
    email_serveraddress = email_serveraddress_file.read()
    email_serverport = email_serverport_file.read()
    email_receiver = email_receiver_file.read()

    #Closes all the files
    FTP_user_file.close()
    FTP_pass_file.close()
    FTP_server_file.close()
    email_sender_file.close()
    email_password_file.close()
    email_serveraddress_file.close()
    email_serverport_file.close()
    email_receiver_file.close()


    #If nothing has been configured yet, i.e the files don't exist,
    # the Exception is made and the script is finished.
    # And the logger writes into the log file.
except FileNotFoundError:
    print("(4) PLEASE CONFIGURE FTP AND SMTP FIRST")
    logger.error("(4) PLEASE CONFIGURE FTP AND SMTP FIRST")
    exit()

print("[CURRENT FTP USERNAME: " + FTP_user + "]")
print("[CURRENT FTP PASSWORD: " + FTP_pass + "]")
print("[CURRENT FTP SERVER: " + FTP_server + "]")
print("\n")
print("[CURRENT EMAIL SENDER: " + email_sender + "]")
print("[CURRENT PASSWORD: " + email_password + "]")
print("[CURRENT SERVER ADDRESS: " +email_serveraddress + "]")
print("[CURRENT SERVER PORT: " +email_serverport + "]")
print("[CURRENT EMAIL RECEIVER: " +email_receiver + "]")

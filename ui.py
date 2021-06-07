import os
import time





#Menu options
time.sleep(0.5)
print("MENU")
time.sleep(0.5)
print("________________")
time.sleep(0.5)
print("(1) FTP CONFIG")
time.sleep(0.5)
print("(2) EMAIL/SMTP CONFIG")
time.sleep(0.5)
print("(3) START")
time.sleep(0.5)
print("(4) DISPLAY CURRENT CONFIG")
time.sleep(0.5)
print("________________")
time.sleep(0.5)
print("\n")
menu_choice = input("Pick a Number: \n")

if menu_choice == "1":
    print("____________________")
    print("\n FTP CONFIGURATION")
    print("____________________")

    # Creates the CONFIGURATION folder, if it doesn't exist yet.
    # Then selects it.
    if not os.path.exists("CONFIGURATION"):
        os.makedirs("CONFIGURATION")
    os.chdir("CONFIGURATION")

    FTP_server = input("FTP server: \n")
    print(FTP_server)
    FTP_username = input("FTP username: \n")
    print(FTP_username)
    FTP_password = input("FTP password: \n")
    print(FTP_server)
    print("\n\n FTP CONFIGURATION COMPLETE!")

    # Overwrite File if it already contains something
    FTP_user_file = open("FTP_user.txt", "w")
    FTP_pass_file = open("FTP_pass.txt", "w")
    FTP_server_file = open("FTP_server.txt", "w")

    #Writes to files
    FTP_user_file.write(FTP_username)
    FTP_pass_file.write(FTP_password)
    FTP_server_file.write(FTP_server)

    #Closes files
    FTP_server_file.close()
    FTP_user_file.close()
    FTP_pass_file.close()


if menu_choice == "2":
    print("_______________________")
    print("\n EMAIL CONFIGURATION")
    print("_______________________\n")


    #Creates the CONFIGURATION folder, if it doesn't exist yet.
    #Then selects it.
    if not os.path.exists("CONFIGURATION"):
        os.makedirs("CONFIGURATION")
    os.chdir("CONFIGURATION")

    print("_____SENDER_____\n")
    email_sender = input("Write the sender E-Mail address: \n")
    print(email_sender + "\n")
    email_password = input("Write the sender E-Mail password: \n")
    print(email_password + "\n")
    email_serveraddress = input("Write server address: \n")
    print(email_serveraddress + "\n")
    email_serverport = input("Write server port: \n")
    print(email_serverport + "\n")
    print("\n\n_____RECEIVER_____")
    email_receiver = input("Write the receiver E-Mail address: \n")
    print(email_receiver + "\n")
    print("__________________")

    # Open Files
    SMTP_sender = open("email_sender.txt", "w")
    SMTP_password = open("email_password.txt", "w")
    SMTP_serveraddress = open("email_serveraddress.txt", "w")
    SMTP_serverport = open("email_serverport.txt", "w")
    SMTP_receiver = open("email_receiver.txt", "w")

    #Overwrite to files
    SMTP_sender.write(email_sender)
    SMTP_password.write(email_password)
    SMTP_serveraddress.write(email_serveraddress)
    SMTP_serverport.write(email_serverport)
    SMTP_receiver.write(email_receiver)

    #Close files
    SMTP_sender.close()
    SMTP_password.close()
    SMTP_serveraddress.close()
    SMTP_serverport.close()
    SMTP_receiver.close()
    print("\n\n EMAIL/SMTP CONFIGURATION COMPLETE!")

if menu_choice == "3":
    print("__________________________")
    print("\n STARTING BACKUP PROCESS")
    print("__________________________")
    import ftp_connector
    import smtp_connector

if menu_choice == "4":
    print("________________________")
    print("\n CURRENT CONFIGURATION")
    print("________________________")
    #imports the current configuration reader.
    import current_config_reader
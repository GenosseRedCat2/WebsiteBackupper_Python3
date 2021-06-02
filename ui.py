import os
import time





#Optione azeige (Menü)
time.sleep(0.5)
print("MENU")
time.sleep(0.5)
print("________________")
time.sleep(0.5)
print("(1) FTP CONFIG")
time.sleep(0.5)
print("(2) EMAIL CONFIG")
time.sleep(0.5)
print("(3) START")
time.sleep(0.5)
print("________________")
time.sleep(0.5)
print("\n")
menu_choice = input("Pick a Number: \n")

if (menu_choice == "1"):
    print("________________")
    print("\n FTP CONFIGURATION")
    print("________________")
    FTP_server = input("FTP server: \n")
    FTP_username = input("FTP username: \n")
    FTP_password = input("FTP password: \n")
    print("\n\n FTP CONFIGURATION COMPLETE!")

if(menu_choice == "2"):
    print("________________")
    print("\n EMAIL CONFIGURATION")
    print("________________")
    email_choice = input("write an E-Mail address: \n")

if (menu_choice == "3"):
    print("You picked three!")
    import ftp_connector
    import smtp_connector
    # Importieren führt direkt aus, wenn es nicht eine function ist.
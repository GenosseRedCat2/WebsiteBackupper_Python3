import time
from re import match

print("\n")
print("\n")
print("=")
time.sleep(0.2)
print("==")
time.sleep(0.2)
print("===")
time.sleep(0.2)
print("====")
time.sleep(0.2)
print("=======")
time.sleep(0.2)
print("==========")
time.sleep(0.2)
print("=================")
time.sleep(0.2)
print("==============================")
time.sleep(0.2)
print("========================================")
time.sleep(0.2)
print("========================================================")
time.sleep(0.2)
print("==============================================================================")
time.sleep(0.2)
print("===========================================================================================================")
print("  _       __       __           _  __           ____                __                                    ")
time.sleep(0.5)
print(" | |     / /___   / /_   _____ (_)/ /_ ___     / __ ) ____ _ _____ / /__ __  __ ____   ____   ___   _____ ")
time.sleep(0.5)
print(" | | /| / // _ \ / __ \ / ___// // __// _ \   / __  |/ __ `// ___// //_// / / // __ \ / __ \ / _ \ / ___/ ")
time.sleep(0.5)
print(" | |/ |/ //  __// /_/ /(__  )/ // /_ /  __/  / /_/ // /_/ // /__ / ,<  / /_/ // /_/ // /_/ //  __// /     ")
time.sleep(0.5)
print(" |__/|__/ \___//_.___//____//_/ \__/ \___/  /_____/ \__,_/ \___//_/|_| \__,_// .___// .___/ \___//_/      ")
print("                                                                           /_/    /_/                     ")
print("\n")



#Optione azeige (Menü)
print("MENÜ")
print("_________")
print("(1) FTP CONFIG")
print("(2) EMAIL CONFIG")
print("(3) START")
print("\n")
menu_choice = input("Pick a Number: \n")
print("\n You picked: " + menu_choice)

match menu_choice:
    case 1:
        print("OK")
    case 2:
        print("Not Found")
    case 3:
        print("I'm a teapot")

import ftp_connector
import smtp_connector
#Importieren führt direkt aus, wenn es nicht eine function ist.

print("done")


import ftplib
import os
import pathlib
from datetime import date
from logger import logger
#Here the FTP connection is established with the desired server and all files
# are downloaded.Then the compress python file is launched

#Function, which goes through each directory on the server and downloads all files
#Then saves them to a folder, with the same name it has on the server
def downloaddir():
    files = ftp_conn.mlsd("")

    for file in files:
        if file[1]["type"] == "dir":
            print(file)
            ftp_conn.cwd(file[0])
            if not os.path.isdir(file[0]):
                os.mkdir(file[0])
            os.chdir(file[0])
            downloaddir()
            ftp_conn.cwd("..")
            os.chdir("..")
        if file[1]["type"] == "file":
            with open(file[0],"wb") as file_2:
                ftp_conn.retrbinary('RETR ' + file[0], file_2.write)

#universal main path
bindir = pathlib.Path(os.path.dirname(os.path.abspath(__file__)))


#Checks if the CONFIGURATION folder exists
#And the logger writes into the log file.
if not os.path.exists("CONFIGURATION"):
    print("(1) PLEASE CONFIGURE FTP AND SMTP FIRST")
    logger.error("(1) PLEASE CONFIGURE FTP AND SMTP FIRST")
    enter_to_close = input("Press Enter to end \n")
    exit()
os.chdir("CONFIGURATION")

try:
    FTP_user_file = open("FTP_user.txt", "r")
    FTP_pass_file = open("FTP_pass.txt", "r")
    FTP_server_file = open("FTP_server.txt", "r")

    FTP_server = FTP_server_file.read()
    FTP_user = FTP_user_file.read()
    FTP_pass = FTP_pass_file.read()

    #Closes all the files
    FTP_user_file.close()
    FTP_pass_file.close()
    FTP_server_file.close()


    #If nothing has been configured yet, i.e the files don't exist,
    # the Exception is made and the script is finished.
    # And the logger writes into the log file.
except FileNotFoundError:
    logger.error("(2) PLEASE CONFIGURE FTP FIRST")
    print("(2) PLEASE CONFIGURE FTP FIRST")
    enter_to_close = input("Press Enter to end \n")
    exit()

#Change to main directory
os.chdir(bindir)

username = FTP_user
password = FTP_pass

ftp_conn = ftplib.FTP(FTP_server)
print('using %s : %s' % (username, password))
ftp_conn.login(username, password)
print("Success: %s:%s" % (username, password))






today = date.today()
d1 = today.strftime("%d-%b-%Y")
name_von_backup = "Backup_Homepage_" + d1

#Incase the folder doesn't exist,
# one is automatically created with the name "Backup_Homepage" and the current date.
if not os.path.exists(name_von_backup):
    os.makedirs(name_von_backup)
os.chdir(name_von_backup)


files = []
#On the server a specific directory is selected. This is only for test.
#By default this would be empty
#ftp_conn.cwd('SCHOOL_JASON/PS/GridCSS')


#The Download function is executed
downloaddir()
# Close the Connection
ftp_conn.quit()
#The FTP connection is closed.

#Change to main directory
os.chdir(bindir)

#Compress Backupfolder and delete it
import zipper
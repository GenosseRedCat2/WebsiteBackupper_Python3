import ftplib
import os
from datetime import date

#Datum hinzufügen
#schauen ob die modify timestamp geändert hat
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


username = 'schule_www91';
password = 'SchulePASSWORTFUERFTP2222';

ftp_conn = ftplib.FTP('tangoclub.ch');
#ftp_conn = ftputil.FTP('tangoclub.ch')
print('using %s : %s' % (username, password));
ftp_conn.login(username, password);
print("Success: %s:%s" % (username, password));






today = date.today()
d1 = today.strftime("%d-%b-%Y")
name_von_backup = "Backup_Webseite_" + d1
#Falls der Ordner mit dem aktuellen Datum nicht existiert, erstellt es einen Ordner mit aktuellem
#Datum
if not os.path.exists(name_von_backup):
    os.makedirs(name_von_backup)
os.chdir(name_von_backup)


files = []
ftp_conn.cwd('SCHOOL_JASON/PS/GridCSS')



downloaddir()
# Close the Connection
ftp_conn.quit()

#SMTP wird gestartet oder im Main?
#

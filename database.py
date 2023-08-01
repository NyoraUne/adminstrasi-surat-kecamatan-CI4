import os
import subprocess
from datetime import datetime


def get_script_directory():
    return os.path.dirname(os.path.abspath(__file__))


def backup_database(host, user, password, database):
    try:
        script_directory = get_script_directory()
        backup_dir = os.path.join(script_directory, "backup_db")

        if not os.path.exists(backup_dir):
            os.makedirs(backup_dir)

        # Membuat nama file backup dengan format: nama_database_tanggal_waktu.sql
        backup_file = f"{database}_{datetime.now().strftime('%Y%m%d_%H%M%S')}.sql"
        backup_path = os.path.join(backup_dir, backup_file)

        # Jalankan perintah mysqldump
        cmd = f"mysqldump --host={host} --user={user} --password={password} {database} > {backup_path}"
        subprocess.run(cmd, shell=True, check=True)

        print(
            f"Backup database {database} berhasil. File backup disimpan di: {backup_path}")
    except Exception as e:
        print(f"Error saat melakukan backup: {str(e)}")


# Contoh penggunaan:
if __name__ == "__main__":
    host = "localhost"     # Ganti sesuai host database MySQL Anda
    user = "root"      # Ganti dengan username MySQL Anda
    password = ""  # Ganti dengan password MySQL Anda
    database = "yuswandy_19630317"  # Ganti dengan nama database yang ingin di-backup

    backup_database(host, user, password, database)

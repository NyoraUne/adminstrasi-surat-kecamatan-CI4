import random

def generate_random_nik():
    nik = "3326"  # Contoh kode provinsi, sesuaikan sesuai kebutuhan
    
    # Generate tanggal lahir (YYMMDD)
    tgl_lahir = "{:02d}{:02d}{:02d}".format(
        random.randint(0, 99),  # Tahun (00-99)
        random.randint(1, 12),  # Bulan (01-12)
        random.randint(1, 28),  # Tanggal (01-28) - Anggap 28 hari sebagai batas
    )

    # Generate 4 digit angka acak
    random_digits = "{:04d}".format(random.randint(0, 9999))

    # Generate digit terakhir sebagai checksum
    # Misalkan digunakan metode Luhn untuk checksum
    # Namun perlu diingat bahwa metode Luhn tidak benar-benar cocok untuk NIK
    # Silakan gunakan metode checksum yang sesuai dengan peraturan di negara Anda.
    # Di Indonesia, NIK menggunakan algoritma checksum yang berbeda.
    # Jangan gunakan metode ini untuk tujuan produksi NIK sebenarnya.
    checksum = str(random.randint(0, 9))

    return nik + tgl_lahir + random_digits + checksum

def generate_random_telephone():
    return "+62" + str(random.randint(811, 899)) + str(random.randint(1000, 9999)) + str(random.randint(1000, 9999))

def generate_random_name():
    first_names = ["Aulia", "Mid", "Farhan", "Riska", "Arya", "Budi", "Dian", "Eka", "Fitri", "Gita", "John", "Sarah", "Michael", "Emma", "David", "Lisa", "Robert", "Linda", "William", "Anna", "James", "Emily", "Richard", "Olivia", "Daniel", "Sophia", "Matthew", "Mia", "Andrew", "Grace", "Christopher", "Zoe", "Joshua", "Chloe", "Anthony", "Sofia", "Joseph", "Ava", "Thomas", "Charlotte", "Mark", "Lucas", "Julia", "Alex", "Harper", "Samuel", "Ella", "Jonathan", "Nora", "Benjamin", "Evelyn"]
    last_names = ["Utama", "Muni", "Sari", "Wijaya", "Susanto", "Kusuma", "Pratama", "Hadi", "Kurniawan", "Santoso", "Smith", "Johnson", "Brown", "Miller", "Davis", "Garcia", "Martinez", "Rodriguez", "Wilson", "Anderson", "Taylor", "Thomas", "Hernandez", "Moore", "Jackson", "Thompson", "White", "Lopez", "Lee", "Gonzalez", "Harris", "Clark", "Lewis", "Robinson", "Walker", "Perez", "Hall", "Young", "Allen", "Sanchez", "Wright", "King", "Scott", "Green", "Baker", "Adams", "Nelson", "Hill", "Ramirez"]

    return random.choice(first_names) + " " + random.choice(last_names)

def generate_random_data(num_records):
    data = []
    for i in range(1, num_records + 1):
        nik = generate_random_nik()
        telephone = generate_random_telephone()
        name = generate_random_name()
        data.append((i, nik, telephone, name))
    return data

# Fungsi generate_random_data() akan menghasilkan data berupa list dari tuple.
# Selanjutnya, kita akan menampilkan data tersebut dalam format yang diminta.
data = generate_random_data(20)

# Menampilkan data dalam format yang diminta
print("NO - Random nik - Random Nomor Telephone - Nama")
for record in data:
    print("{:2d} - {} - {} - {}".format(record[0], record[1], record[2], record[3]))

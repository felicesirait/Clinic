<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Pasien</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500vh;
            background-color: #f4f4f4;
        }
        .container {
            width: 500px;
            padding: 20px; 
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #ACC8E5;
            border-radius: 8px;
        }
        h1 {
            font-size: 24px; /* memperbesar judul */
            text-align: center;
            margin-bottom: 20px;
            color :#2b8cd9
        }
        .form-group {
            margin-bottom: 10px; /* mengurangi margin untuk menghemat ruang */
            position: relative;
        }
        .form-group label {
            display: block;
            font-size: 14px; /* mengecilkan ukuran font label */
            margin-bottom: 3px; /* mengurangi jarak antara label dan input */
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 8px; /* dikurangi padding untuk menghemat ruang */
            font-size: 14px; /* mengecilkan ukuran font input */
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group .icon {
            position: absolute;
            right: 5px; 
            top: 70%;
            transform: translateY(-50%);
            color: #888;
        }
        .sign-up-button {
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 12px; /* dikurangi padding untuk menghemat ruang */
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px; /* memberikan jarak antara tombol dan input terakhir */
        }
        .sign-up-button:hover {
            background-color: #218838;
        }
        .fontK {
            font-size: 12px; /* memperbesar ukuran font catatan di bawah */
            text-align: center;
            margin-top: 10px;
        }

        /* Media query untuk responsif */
        @media (max-width: 600px) {
            .container {
                width: 90%; /* menyesuaikan lebar container untuk layar kecil */
                padding: 15px;
            }
            h1 {
                font-size: 20px; /* menyesuaikan ukuran font judul */
            }
            .form-group label, .form-group input, .form-group select, .form-group textarea {
                font-size: 12px; /* menyesuaikan ukuran font untuk elemen input */
            }
            .sign-up-button {
                font-size: 14px; /* menyesuaikan ukuran font tombol */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Form Pendaftaran Pasien</h1>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat anda" required>
            </div>

            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon</label>
                <input type="tel" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan nomor telepon" required>
            </div>

            <div class="form-group">
                <label for="usia">Usia</label>
                <input type="number" id="usia" name="usia" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required>
            </div>

            <div class="form-group">
                <label for="nik">Nomor Identitas (NIK)</label>
                <input type="text" id="nik" name="nik" placeholder="Masukkan NIK" required>
            </div>

            <div class="form-group">
                <label for="jenis_poli">Jenis Poli</label>
                <select id="jenis_poli" name="jenis_poli" required>
                    <option value="Poli Umum">Poli Umum</option>
                    <option value="Poli Gigi">Poli Gigi</option>
                    <option value="Poli Anak">Poli Anak</option>
                    <option value="Poli Kandungan">Poli Kandungan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="keluhan">Keluhan</label>
                <textarea id="keluhan" name="keluhan" placeholder="Masukkan keluhan" required></textarea>
            </div>

            <div class="form-group">
                <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                <input type="date" id="tanggal_kunjungan" name="tanggal_kunjungan" required>
            </div>

            <div class="form-group">
                <label for="jam_kunjungan">Jam Kunjungan</label>
                <input type="time" id="jam_kunjungan" name="jam_kunjungan" required>
            </div>

            <div class="form-group">
                <label for="pilihan_dokter">Pilihan Dokter</label>
                <input type="text" id="pilihan_dokter" name="pilihan_dokter" placeholder="Masukkan pilihan dokter" required>
            </div>

            <button type="submit" class="sign-up-button">Daftar</button>

            <div class="fontK">
                <p>Dengan menekan tombol Daftar, Anda menyetujui Kebijakan Privasi kami. <a href="#">Baca lebih lanjut</a></p>
            </div>
        </form>
    </div>
</body>
</html>

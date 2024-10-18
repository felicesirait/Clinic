<html>
 <head>
  <title>
   Rekam Medis Pasien
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            background-color: #f8f9fa;
            padding: 15px;
            height: 100vh;
        }
        .sidebar a {
            text-decoration: none;
            color: #000;
            display: block;
            padding: 10px 0;
        }
        .sidebar a:hover {
            background-color: #e9ecef;
        }
        .header {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
        }
        .header .right {
            float: right;
        }
        .content {
            padding: 15px;
        }
        .content .card {
            margin-bottom: 15px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .badge {
            background-color: #ffc107;
            color: #000;
        }
  </style>
 </head>
 <body>
  <div class="d-flex">
   <div class="sidebar">
    <div class="text-center mb-4">
     <img alt="Logo" class="img-fluid" height="100" src="https://storage.googleapis.com/a1aa/image/wVgg6YygLhZ0C5WfIGDfDHAuCm5SF8SEibBqAE1Z8wcOs8nTA.jpg" width="100"/>
    </div>
    <a href="#">
     Home
    </a>
    <a class="fw-bold" href="#">
     Riwayat Medis Pasien
    </a>
   </div>
   <div class="flex-grow-1">
    <div class="header d-flex justify-content-between align-items-center">
     <div>
      D'Clinic
     </div>
     <div class="right">
      <span class="badge">
       No RM Terakhir : 000006
      </span>
      <span>
       16-01-2023 - Pukul 11:20:59
      </span>
      <span class="badge bg-secondary">
       Admin
      </span>
     </div>
    </div>
    <div class="content">
     <div class="d-flex justify-content-between align-items-center mb-3">
      <h4>
       Rekam Medis Pasien
      </h4>
      <div>
       <button class="btn btn-primary">
        Riwayat Medis Pasien
       </button>
       <button class="btn btn-warning">
        Kembali
       </button>
      </div>
     </div>
     <div class="card p-3 mb-3">
      <p>
       No. Registrasi : REG/20230116/001
       <span class="badge">
        Cipro
       </span>
      </p>
      <p>
       Nomor RM : 000006
      </p>
      <p>
       Nama Pasien : Sampurna, Tn
      </p>
      <p>
       TTL Pasien : Jepara, 01-01-1987 (36 tahun 0 bulan)
      </p>
      <p>
       Alamat : Jepara 01/09
      </p>
      <p>
       Cara Bayar : Pribadi
      </p>
      <p>
       Nama Dokter : dr. M. Amin Misbah
      </p>
     </div>
     <div class="card p-3 mb-3">
      <h5>
       Riwayat penyakit pasien
      </h5>
      <table class="table table-bordered">
       <thead>
        <tr>
         <th>
          No Diagnosa
         </th>
         <th>
          Tgl_periksa
         </th>
         <th>
          Diagnosa
         </th>
         <th>
          Subjektif
         </th>
         <th>
          Objektif
         </th>
         <th>
          Assessment
         </th>
         <th>
          Plan
         </th>
         <th>
          Vital Sign
         </th>
         <th>
          Buta Warna
         </th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <td>
          DIA/20230116/001
         </td>
         <td>
          16-01-2023
         </td>
         <td>
          Fever, unspecified
         </td>
         <td>
          Pasien mengatakan panas sejak 2 hari yang lalu
         </td>
         <td>
          Suhu 39
         </td>
         <td>
          Medikasi, pemeriksaan fisik
         </td>
         <td>
          Beri obat Panol kontrol 2 hari jika masih demam
         </td>
         <td>
          TB:170 Cm, BB : 75 Kg, Suhu : 39.0°, Tensi : 120/70 MmHg
         </td>
         <td>
          Tidak
         </td>
        </tr>
       </tbody>
      </table>
     </div>
     <div class="card p-3 mb-3">
      <h5>
       Resep Obat Pasien
      </h5>
      <table class="table table-bordered">
       <thead>
        <tr>
         <th>
          No
         </th>
         <th>
          Nama Obat
         </th>
         <th>
          Aturan Pakai
         </th>
         <th>
          Jml
         </th>
         <th>
          Harga
         </th>
         <th>
          Subtotal
         </th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <td>
          1
         </td>
         <td>
          AMOXILIN
         </td>
         <td>
           Sesudah Makan
         </td>
         <td>
          10
         </td>
         <td>
          Rp 1.000,00
         </td>
         <td>
          Rp 10.000,00
         </td>
        </tr>
       </tbody>
      </table>
     </div>
     <div class="card p-3">
      <h5>
       Alergi  Pasien
      </h5>
      <table class="table table-bordered">
       <thead>
        <tr>
         <th>
          No
         </th>
         <th>
          Nama Obat
         </th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <td>
          1
         </td>
         <td>
          Panadol
         </td>
        </tr>
       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
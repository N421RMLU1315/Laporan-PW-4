<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profil</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <div class="container">
      <h1></h1>
      <ul>
        <li><a href="index">Beranda</a></li>
        <li><a href="artikel">Artikel</a></li>
        <li><a href="kontak">Kontak</a></li>
        <li><a href="profil">Profil</a></li>
      </ul>
    </div>
  </nav>

  <header class="hero-large">
    <div class="container">
      <h2>Website Seputar Olahraga</h2>
      <p>Silahkan login untuk mendapatkan info-info terbaru lainnya</p>
    </div>
  </header>
  <main>
    <head>
      <title>Biodata Diri</title>
      <style>
        body {
          background-color: #f2f2f2;
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
        }
        h1 {
          text-align: center;
          margin-top: 50px;
          margin-bottom: 30px;
        }
        table {
          margin: 0 auto;
          border-collapse: collapse;
          width: 60%;
          max-width: 800px;
          background-color: white;
          box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
        }
        th, td {
          padding: 15px;
          text-align: left;
          border-bottom: 1px solid #ddd;
        }
        th {
          background-color: #4CAF50;
          color: white;
        }
        img {
          display: block;
          margin: 0 auto;
          max-width: 200px;
          height: auto;
          border-radius: 200%;
          box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
        }
        .container {
          display: flex;
          flex-wrap: wrap;
          align-items: center;
          justify-content: center;
        }
        .table-container {
          flex: 1 1 60%;
          margin: 50px;
        }
      </style>
    </head>
    <body>
    
      <h1>My Profile</h1>
    
      <div class="container">
        <div class="image-container">
          <img src="download.png" alt="Foto Profil">
        </div>
        <div class="table-container">
          <table>
            <tr>
              <th>Nama Lengkap</th>
              <td>Nazir Mahmudi Lubis</td>
            </tr>
            <tr>
              <th>Tempat/Tanggal Lahir </th>
              <td>Lubuk Durian, 2 Januari 2003</td>
            </tr>
            <tr>
              <th>Alamat  </th>
              <td>Jl. WR Suptaman 4C Perum Sakinah Pondokan Fakiyah No.4, Kota Bengkulu</td>
            </tr>
            <tr>
              <th>Agama   </th>
              <td>Islam</td>
            </tr>
            <tr>
              <th>Pekerjaan   </th>
              <td>Mahasiswa Informatika Universitas Bengkulu</td>
            </tr>
            <tr>
              <th>Hobi </th>
              <td>Memasak, Bersepeda, Badminton</td>
            </tr>
            <tr>
              <th>Keahlian</th>
              <td>HTML, CSS, PHP, Python, Java</td>
            </tr>
          </table>
        </div>
      </div>
    
    </body>
  </main>
  <footer>
    <p>&copy; 2023 Website Seputar Olahraga</p>
  </footer>
</body>
</html>


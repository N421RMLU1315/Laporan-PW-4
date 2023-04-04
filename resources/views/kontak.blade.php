<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kontak - Website Olahraga</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav>
      <div class="container">
        <h1>

        </h1>
        <ul>
          <li><a href="index">Beranda</a></li>
          <li><a href="artikel">Artikel</a></li>
          <li><a href="kontak">Kontak</a></li>
          <li><a href="profil">Profil</a></li>
        </ul>
      </div>
    </nav>

    <header class="hero-small">
      <div class="container">
        <h2>Hubungi Kami</h2>
      </div>
    </header>

    <section class="contact">
      <div class="container">
        <h3>Kirim Masukan</h3>
        <form action="mailto:email@websiteolahraga.com" method="POST" enctype="multipart/form-data">
          <label for="nama">Nama</label>
          <input type="text" id="nama" name="nama" required>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>

          <label for="pesan">Pesan</label>
          <textarea id="pesan" name="pesan" required></textarea>

          <button type="submit" class="btn">Kirim</button>
        </form>

        <div class="contact-info">
          <h3>Info Kontak</h3>
          <ul>
            <li><strong>Alamat:</strong> Jl. WR SUPRATMAN No. 123, BENGKULU</li>
            <li><strong>Email:</strong> info@websiteolahraga.com</li>
            <li><strong>Telepon:</strong> 082821497024</li>
          </ul>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; 2023 Website Seputar Olahraga</p>
      </div>
    </footer>
  </body>
</html>

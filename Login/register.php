<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - E-Logbook JTI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"> </head>
<body>
    <div class="login-container">
        <div class="login-side-image">
            <div class="image-overlay-text">
                <h1>JTI Polije</h1>
                <p>Membangun Masa Depan Teknologi Informasi</p>
            </div>
        </div>

        <div class="login-side-form">
            <div class="form-wrapper">
                <div class="brand-header">
                    <h2 class="brand-title">Daftar Akun</h2>
                    <p class="brand-subtitle">Lengkapi data diri untuk akses E-Logbook</p>
                </div>

                <form action="proses_register.php" method="POST">
                    <div class="input-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <div class="input-group">
                        <label>NIM (Nomor Induk Mahasiswa)</label>
                        <input type="text" name="nim" placeholder="Masukkan NIM" required>
                    </div>

                    <div class="input-group">
                        <label>Email Institusi</label>
                        <input type="email" name="email" placeholder="contoh@student.polije.ac.id" required>
                    </div>

                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Buat password minimal 8 karakter" required>
                    </div>

                    <button type="submit" class="btn-login">Daftar Sekarang</button>
                </form>

                <div class="footer-link">
                    Sudah punya akun? <a href="login.php">Login di sini</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
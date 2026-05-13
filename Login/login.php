<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-Logbook JTI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-side-image">
            <div class="image-overlay-text">
                <h1>E-Logbook Magang</h1>
                <p>Sistem Informasi Logbook Magang Mahasiswa TIF Polije
                </p>
            </div>
        </div>

        <div class="login-side-form">
            <div class="form-wrapper">
                <div class="brand-header">
                    <h2 class="brand-title">Selamat Datang</h2>
                    <p class="brand-subtitle">Silakan login ke sistem E-Logbook PKL</p>
                </div>

                    <div class="input-group">
                        <label>Email/Username</label>
                        <input type="text" name="username" placeholder="Masukkan email atau username anda" required>
                    </div>

                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="btn-login">Masuk ke Dashboard</button>
                </form>

                <div class="footer-link">
                    Belum punya akun? <a href="register.php">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
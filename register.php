<?php
require_once 'database/connection.php'; //veritabanı bağlantı bilgilerini içeren dosya çağrılır.

if (isset($_GET['adim'])) {
    $adim = mysql_real_escape_string(trim($_GET['adim']));
} else {
    $adim = "";
}

if (isset($_GET['error'])) {
    $error = mysql_real_escape_string(trim($_GET['error']));
} else {
    $error = "";
}
if ($girissorgu == 1){
    header("Location: index.php");//Eğer kullanıcı oturumu zaten açıksa, "index.php" sayfasına yönlendirilir
    exit();
}
switch ($adim) {
    case "":
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
            <title>Register</title>
            <style>
                body {
                    background-color: #343a40;
                    color: #fff;
                }

                .form-container {
                    max-width: 400px;
                    margin: auto;
                    margin-top: 50px;
                }
            </style>
        </head>
        <body>

        <div class="container form-container">
        <?php
        if ($error == "1") {
            echo '<div class="alert alert-danger" role="alert">Email hesabı hatalı, Kontrol ediniz.</div>';
        } elseif ($error == "2") {
            echo '<div class="alert alert-danger" role="alert">Boş Alan Bırakmayınız.</div>';
        } elseif ($error == "3") {
            echo '<div class="alert alert-danger" role="alert">Bu Email Adresi kullanılıyor.</div>';
        } elseif ($error == "4") {
            echo '<div class="alert alert-danger" role="alert">Şifreleriniz birbiri ile uyuşmuyor.</div>';
        }
        ?>
            <form method="POST" action="register.php?adim=basarili">
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Adınız</label>
                            <input type="text" name="ad" class="form-control" id="registerFirstName" placeholder="Adınız" autocomplete="off" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Soyadınız</label>
                            <input type="text" name="soyad" class="form-control" id="registerLastName" placeholder="Soyadınız" autocomplete="off" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Adresiniz</label>
                    <input type="email" name="email" class="form-control" id="registerEmail" placeholder="Email Adresiniz" autocomplete="off" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Şifreniz</label>
                    <input type="password" name="sifre" class="form-control" id="registerPassword" placeholder="Şifreniz" autocomplete="off" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Şifrenizi Tekrar Giriniz</label>
                    <input type="password" name="sifretekrar" class="form-control" id="confirmPassword" placeholder="Şifreniz" autocomplete="off" required>
                </div>
                <button type="submit" name="kayitol" class="btn btn-success">KAYIT OL</button>
                <p class="mt-3">Zaten bir hesabın var mı?<a href="login.php">Giriş Yap</a></p>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>

        <?php
        break;
    case 'basarili': 
        if (isset($_POST['kayitol'])) { //formdan gelen ad soyad email sifre bilgileri alınır ve güvenlik amacıyla silinir
            $ad = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($_POST['ad']))));
            $soyad = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($_POST['soyad']))));
            $email = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($_POST['email']))));
            $sifre = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($_POST['sifre']))));
            $sifretekrar = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($_POST['sifretekrar']))));

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //e-posta adresinin geçerliliği kontrol edilir.
                if (empty($ad) || empty($soyad)) { //Ad ve soyad alanları boş ise, "error=2" parametresi ile bir hata sayfasına yönlendirilir.
                    header("Location: register.php?error=2");
                    exit();
                } else {
                    if ($sifre == $sifretekrar) {
                        $emailquery = mysql_query("SELECT * FROM hesaplar WHERE email='" . $email . "'");
                        $uyebul = mysql_num_rows($emailquery);
                        if ($uyebul > 0) {//Veritabanında e-posta adresi kontrol edilir. Eğer bu e-posta adresi zaten kayıtlı ise, "error=3" parametresi 
                            //ile bir hata sayfasına yönlendirilir. Aksi takdirde, yeni kullanıcı veritabanına eklenir.
                            header("Location: register.php?error=3");
                            exit();
                        } else {
                            mysql_query("INSERT INTO hesaplar (email, password, name, surname) VALUES ('" . $email . "','" . $sifre . "','" . $ad . "','" . $soyad . "')");
                            header("Location: login.php?kayittamamlandi=1");//Veritabanına kayıt işlemi yapılır ve kullanıcı "login.php" sayfasına yönlendirilir.
                            exit();
                        }
                    } else {
                        header("Location: register.php?error=4");
                        exit();
                    }
                }
            } else {
                header("Location: register.php?error=1");
                exit();
            }
        }
        break;
}
?>

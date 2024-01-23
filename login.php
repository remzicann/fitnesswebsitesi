<?php

require_once 'database/connection.php';//veritabanı bağlantı bilgilerini içeren dosya çağrılır.

if (isset($_GET['adim'])) { // parametrelerin varlığı kontrol edilir. 
  // Eğer varsa, değerler alınır ve boşluklar temizlenir. Eğer yoksa,  değişkenlere boş bir string atanır.
    $adim = mysql_real_escape_string(trim($_GET['adim']));
} else {
    $adim = "";
}

if (isset($_GET['error'])) {
    $error = mysql_real_escape_string(trim($_GET['error']));
} else {
    $error = "";
}
if (isset($_GET['kayittamamlandi'])) {
  $kayittamamlandi = mysql_real_escape_string(trim($_GET['kayittamamlandi']));
} else {
  $kayittamamlandi = "";
}
// Kullanıcı zaten giriş yapmışsa ana sayfaya yönlendirir.
// html kodları
switch ($adim) {
    case "":
        if ($girissorgu == 1){
            header("Location: index.php");
            exit();
        }

        if ($error == "1") {
            echo 'Hata1';
        } elseif ($error == "2") {
            echo 'Hata2';
        }
        if ($kayittamamlandi == "1") { // kayıt olduğumuzda ekrana çıkan yazı
          echo '<script>alert("Kaydınız Başarıyla Tamamlandı Lütfen Giriş Yapınız.")</script>';
        }
        ?>
        
     
<!DOCTYPE html>
<html lang="en">
   
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Login</title>
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
    <form action="login.php?adim=basarili" method="POST">
      <div class="mb-3">
        <label for="loginEmail" class="form-label">Email adresiniz</label>
        <input type="email" class="form-control" id="loginEmail" autocomplete="off" name="email" required>
      </div>
      <div class="mb-3">
        <label for="loginPassword" class="form-label">Şifreniz</label>
        <input type="password" class="form-control" id="loginPassword" autocomplete="off" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary" name="login">Giriş Yap</button>
      <p class="mt-3">Hesabın yok mu? <a href="register.php">Kaydol</a></p>
    </form>
  </div> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

        <?php

        break;

    case "basarili":
   
        if (isset($_POST['login'])) {//"login" adlı submit butonunun gönderilip gönderilmediği kontrol edilir.
            $email = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($_POST['email']))));//Formdan gelen e-posta ve şifre verileri alınır ve güvenlik amacıyla temizlenir.
            $sifre = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($_POST['password']))));

            if ($email == "" OR $sifre == "" OR $email == " ") {//E-posta veya şifre alanlarından biri boş ise veya sadece boşluk içeriyorsa,
              //"error=2" parametresi ile bir hata sayfasına yönlendirilir.
                header("Location: login.php?error=2");
                exit();
            } else {

              //e-posta adresinin geçerliliği kontrol edilir. Geçerli değilse, "error=1" parametresi ile bir hata sayfasına yönlendirilir.
              //Veritabanında kullanıcının e-posta ve şifresini kontrol eden bir sorgu yapılır. Sorgu başarılıysa ve kullanıcı bulunursa, oturum bilgileri
              // oluşturulur ve kullanıcı "index.php" sayfasına yönlendirilir. 
              //Eğer sorgu başarısız olursa, bir hata mesajı görüntülenir.
                if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    $uyeler = mysql_query("SELECT * FROM hesaplar WHERE email='".$email."' AND password='".$sifre."'");

                    if ($uyeler !== false) {
                        $uyebul = mysql_num_rows($uyeler);

                        if ($uyebul > 0) {
                            $query = mysql_query("SELECT * FROM hesaplar WHERE email='".$email."' AND password='".$sifre."'");
                            while ($sonuc = mysql_fetch_array($query)) {
                                $_SESSION['userid'] = $sonuc['userid'];
                                $_SESSION['login'] = 5;
                                header("Location: index.php"); // index sayfasına git 
                                exit();
                            }
                        }
                    } else {
                        echo 'Query execution failed: ' . mysql_error();
                    }

                } else {
                    header("Location: login.php?error=1");
                    exit();
                }
            }
        }
        break;
}

?>

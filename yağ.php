<?php
require_once 'database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>RePe Fitness</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}
		
		header {
			background-color: #f2f2f2;
			padding: 20px;
			text-align: center;
		}
		
		header h1 {
			margin: 0;
		}
		
		header a {
			text-decoration: none;
			color: #333;
			font-weight: bold;
			font-size: 18px;
			margin-left: 20px;
		}
		
		.logo {
			display: inline-block;
			vertical-align: middle;
		}
		
		.logo img {
			height: 100px;
		}
		
		.fit-image {
			width: 100%;
			height: auto;
		}
		
		.fit-text {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: rgba(255, 255, 255, 0.7);
			padding: 20px;
			text-align: center;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			font-size: 24px;
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 2px;
			color: #333;
		}
    .login-link {
    position: absolute;
    top: 20px; /* Sağ üst köşeye yakın bir pozisyon ayarlayın */
    right: 20px;
}
	</style>
</head>
<body>
<header>
		<div class="logo">
			<img src="image/aslan.jpg" alt="Logo">
		</div>
		<h1>HOŞGELDİNİZ</h1> 
		<a href="index.php"><i class="fas fa-home"></i></a> &nbsp;  <a href="egzersiz.php">Egzersizler</a> &nbsp; <a href="program.php">Program Oluştur</a> &nbsp; 
 &nbsp;  <a href="blog.php">Blog</a> &nbsp; 


    </div>
  
    <?php
                    if ($girissorgu == 1) {
                        
                    ?>
                    <a class="nav-link" href="profile.php" id="profileIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                    </a>
                    <?php
                    } else {
                    ?>
                    <a href="login.php" class="login-link">Giriş Yap</a>
                    <?php
                    }
                    ?>
	</header>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vücut Yağ Oranı Hesaplayıcı</title>
    <style>
        /* Genel sayfa stilini ayarlayalım */
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            font-size: 20px;
        }
        /* Ana bölüm stilini ayarlayalım */
        .main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        /* Yazı bölümünü stilini ayarlayalım */
        .text {
            float: none;
            width: 100%;
            text-align: justify;
        }
        /* Hesaplayıcı için gerekli stil */
        #calculator {
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        /* Giriş alanları için stil */
        .input-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        #result {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="text">
            <h1>Vücut Yağ Oranı Hesaplama Formülü</h1>

            <p>
                Evde vücut yağ oranı takibini yapmanın kolay bir yolunu arıyorsanız, vücut çevresi ölçümlerinize bağlı olarak
                yağ oranınızı öğrenebilirsiniz. Ölçüm için maliyetli makineler almak yerine, Amerikan Diyabet Derneği tarafından da doğrulanan vücut yağ oranı formülünü uygulayarak kendi vücut yağı takibinizi sağlayabilirsiniz. <br>
                <br>
                Vücut yağ yüzdesini hesaplamak için şu verilere ihtiyacınız var:

                <ul>
                    <li>Cinsiyet</li>
                    <li>Boy</li>
                    <li>Boyun çevresi (cm)</li>
                    <li>Bel çevresi (cm)</li>
                    <li>Kalça çevresi (cm)</li>
                </ul>

                <b>Erkek için:</b> <br> 495 / [1.0324 – 0.19077 * log10 (bel – boyun) + 0.15456 * log10 (boy)] – 450 <br>

                <b>Kadın için:</b> <br>
                495 / [1.29579 – 0.35004 * log10(bel + kalça – boyun) + 0.22100 * log10(boy)] – 450 <br>
                <br>
                Bu tür ölçümlerin her zaman doğru sonucu vermediğini aklınızda tutarak kesin sayılar elde etmek yerine, vücut yağ oranı değişikliklerinizi izlemek için kullanabilirsiniz.
            </p>
        </div>
        <div id="calculator">
            <h2>Vücut Yağ Oranı Hesaplayıcı</h2>
            <div class="input-group">
                <label for="gender">Cinsiyet:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Erkek</option>
                    <option value="female">Kadın</option>
                </select>
            </div>
            <div class="input-group">
                <label for="height">Boy (cm):</label>
                <input type="number" id="height">
            </div>
            <div class="input-group">
                <label for="waist">Bel Çevresi (cm):</label>
                <input type="number" id="waist">
            </div>
            <div class="input-group" id="hipGroup" style="display: none;">
                <label for="hip">Kalça Çevresi (cm):</label>
                <input type="number" id="hip">
            </div>
            <div class="input-group">
                <label for="neck">Boyun Çevresi (cm):</label>
                <input type="number" id="neck">
            </div>
            <button id="calculate">Hesapla</button>
            <div id="result"></div>
        </div>
    </div>

    <script>
        document.getElementById("gender").addEventListener("change", function () {
            var hipGroup = document.getElementById("hipGroup");
            if (this.value === "female") {
                hipGroup.style.display = "block";
            } else {
                hipGroup.style.display = "none";
            }
        });

        document.getElementById("calculate").addEventListener("click", function () {
            var gender = document.getElementById("gender").value;
            var waist = parseFloat(document.getElementById("waist").value);
            var neck = parseFloat(document.getElementById("neck").value);
            var height = parseFloat(document.getElementById("height").value);
            var hip = parseFloat(document.getElementById("hip").value);

            var result;

            if (gender === "male") {
                result = 495 / (1.0324 - 0.19077 * Math.log10(waist - neck) + 0.15456 * Math.log10(height)) - 450;
            } else {
                result = 495 / (1.29579 - 0.35004 * Math.log10(waist + hip - neck) + 0.22100 * Math.log10(height)) - 450;
            }

            document.getElementById("result").textContent = "Vücut Yağ Oranı: " + result.toFixed(2) + "%";
        });
    </script>
</body>
</html>

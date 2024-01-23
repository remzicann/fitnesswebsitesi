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
    <title>Günlük Kalori İhtiyacı Hesaplama</title>
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

        /* Form stilini ayarlayalım */
        .calculator {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }

        .calculator label {
            display: block;
            margin-bottom: 10px;
        }

        .calculator input[type="number"],
        .calculator select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

        .calculator button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .calculator button:hover {
            background-color: #0056b3;
        }

        /* Sonuç stilini ayarlayalım */
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
    <script>
        function hesaplaKalori() {
            var weight = parseFloat(document.getElementById("weight").value);
            var height = parseFloat(document.getElementById("height").value);
            var age = parseInt(document.getElementById("age").value);
            var gender = document.getElementById("gender").value;
            var activityLevel = document.getElementById("activity-level").value;
            var resultElement = document.getElementById("result");

            // Kalori hesaplama formülü
            var kalori;

            if (gender === "male") {
                kalori = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
            } else if (gender === "female") {
                kalori = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
            }

            if (activityLevel === "sedentary") {
                kalori *= 1.2;
            } else if (activityLevel === "lightly-active") {
                kalori *= 1.375;
            } else if (activityLevel === "moderately-active") {
                kalori *= 1.55;
            } else if (activityLevel === "very-active") {
                kalori *= 1.725;
            }

            resultElement.innerHTML = "Günlük Kalori İhtiyacınız: " + kalori.toFixed(2) + " kcal";
        }
    </script>
</head>
<body>
    <div class="main">
        <h1>Günlük Kalori İhtiyacınız</h1>
        <p>
            Günlük kalori ihtiyacı, kişinin yaşam tarzı, aktivite düzeyi, cinsiyeti, boyu, kilosu ve
            metabolizması gibi birbirinden farklı ve bağımsız bir çok faktöre bağlıdır. Bu faktörleri bir
            fonksiyondan geçirerek kişinin günlük kalori ihtiyacı ortalama olarak belirlenebilir.
        </p>

        <!-- Kalori Hesaplama Formu -->
        <div class="calculator">
            <h2>Kalori Hesaplama</h2>
            <label for="weight">Kilo (kg):</label>
            <input type="number" id="weight" name="weight" required>

            <label for="height">Boy (cm):</label>
            <input type="number" id="height" name="height" required>

            <label for="age">Yaş:</label>
            <input type="number" id="age" name="age" required>

            <label for="gender">Cinsiyet:</label>
            <select id="gender" name="gender" required>
                <option value="male">Erkek</option>
                <option value="female">Kadın</option>
            </select>

            <label for="activity-level">Aktivite Seviyesi:</label>
            <select id="activity-level" name="activity-level" required>
                <option value="sedentary">Oturarak Çalışan</option>
                <option value="lightly-active">Az Aktif</option>
                <option value="moderately-active">Orta Aktif</option>
                <option value="very-active">Çok Aktif</option>
            </select>

            <button onclick="hesaplaKalori()">Hesapla</button>

            <div id="result" class="result"></div>
        </div>

        <!-- Blog Yazısı -->
        <h2>Günlük Kalori İhtiyacı ve Beslenme İlişkisi</h2>
        <p>
            Alınan enerjinin tamamı besinler yoluyla elde edilir. Yediğiniz yemeğin türü ve miktarı,
            ne kadar kalori alacağınızı belirler. Kilonuzu korumak ve vücudunuzun günlük kalori ihtiyacınızı
            etkili şekilde kullanmak için bazı ipuçları şu şekildedir:
            <ul>
                <li><b>Kahvaltı Yapın:</b> Protein ve sağlıklı yağ içeren bir kahvaltı sizi uzun süre tok tutabilir. Bu sayede
                    gün içinde boş kalori içeren atıştırmakları hayatınızdan çıkarmanıza yardımcı olabilir.</li>
                <li><b>Düzenli Yemek Yiyin:</b> Bu, kalori ihtiyacınızı daha etkili şekilde karşılamaya yardımcı olacaktır.</li>
                <li><b>Meyve ve Sebzeyi Diyetinize Dahil Edin:</b> Meyve ve sebzeler hem sağlıklı hem de lezzetli atıştırmalıklar
                    olabilir. Aynı zamanda çoğu meyve ve sebze besin değeri ve lif bakımından zengin olmasına rağmen az
                    miktarda yağ ve kalori içerir.</li>
            </ul>
        </p>
    
</p>
<h3>Günlük Kalori İhtiyacı ve Spor İlişkisi</h3>
<p>
  Fiziksel aktivite, günlük kalori ihtiyacını belirlemede metabolizma hızından sonra ikinci sırada gelir. Çünkü, günlük fiziksel
   aktivite miktarı arttıkça kalori ihtiyacı da artar.

  Fitness’ta günlük kalori ihtiyacı kilonuz, egzersiz yoğunluğunuz ve antrenmanlarınız
   için harcadığınız zaman gibi bir dizi faktöre bağlıdır. Bu faktörler şöyledir:
<ul>
  <li><b>Ağırlık: </b>Vücut ağırlığınız ne kadar fazlaysa spor sırasında o kadar enerji harcarsınız.</li>
  <li> <b>Yoğunluk: </b>Ne kadar yüksek yoğunlukta bir egzersiz yaparsanız, kalori dengesini korumak için o kadar fazla enerjiye ihtiyacınız olur. Saatte 5 km hızla bir saat yürüyen ve 150 kg vücut ağırlığına sahip olan bir kişi 280 kalori yakar. 
      Aynı kişi saatte 5 km hızla koşarsa yaktığı kalori miktarı 590’a çıkar.</li>
  <li> <b>Süre:</b>Belirli bir fiziksel aktivite için ne kadar uzun süre harcarsanız o kadar fazla kaloriye ihtiyaç duyarsınız. 30 dakikalık bir antrenman sırasında yakılan kalori, bir saatte 
      harcanan enerjinin yaklaşık yarısı kadar olur.</li>
  
</ul>
<center>
  <img src="image/ftns.jpg" alt="fitness">
</center>
  </p>


<h4>Günlük Kalori İhtiyacı Hakkında Doğru Bilinen Yanlışlar</h4>
<p>
  Günlük kalori ihtiyacı hakkında toplumda doğru kabul edilen birçok yanlış anlama vardır ve bu yanlış anlamalar insan sağlığı üzerinde ciddi problemlere yol açabilir.
   Örneğin çok düşük kalorili diyetler uygulamak kilo vermenin tek yoludur diye düşünülebilir 
   ancak çok düşük kalorili diyetler genellikle fiziksel ve psikolojik açılardan insanları olumsuz
    etkilediği gibi çok hızlı verilen kilolar genellikle çok hızlı geri alınır, bu da uzun vadeli 
    düşünüldüğünde hedeften uzaklaşılmasına neden olabilir. 
    <p>
      Ayrıca kalori ihtiyacın yalnızca kilo alma ya da kilo verme kavramlarıyla 
    ilişkili düşünmek yine doğru bir yaklaşım değildir. Dengeli ve doğru miktarda kalori
     alımı vücudun temel fonksiyonlarını yerine getirebilmesi için kritik öneme sahiptir.
    </p>  
</p>
</div>
</body>
</html>


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
    <title>Protein Tozu: Nedir, Ne İşe Yarar ve Nasıl Kullanılır?</title>
    <style>
        /* genel sayfa stilini ayarlayalım */
        body {
          margin: 0;
          padding: 0;
          font-family: sans-serif;
          font-size: 20px;
        }
        /* ana bölüm stilini ayarlayalım */
        .main {
          max-width: 800px;
          margin: 0 auto;
          padding: 20px;
        }
        /* yazı bölümünü stilini ayarlayalım */
        .text {
          float: none;
          width: 100%;
          text-align: justify;
        }
        .img{
            width: 800px;
            height: 600px;
        }
        
      </style>
</head>
<body>
   
<div class="main">
    <div class="text">
      <h1>Protein Tozu Nedir?</h1>
      <img class="img" src="image/protein-tozu.jpg">
      <p>
        Protein tozu, yüksek protein içeren popüler bir besin takviyesidir. Bu besin takviyeleri,
         ısı ve enzimler kullanılarak peynir altı suyu gibi besinlerden ayrıştırılan proteinden elde edilir. 
         Birkaç farklı çeşidi bulunur. En yaygın protein tozu çeşitleri şunları içerir: <br>
        
        1- <b> Peynir Altı Suyu:</b> Sporcular arasındaki en popüler protein tozu çeşitlerinin içinde genellikle peynir altı
         suyu yer alır. Whey proteini de denen peynir altı suyu, tam bir protein deposudur
          ve insan vücudunun ihtiyaç duyduğu tüm amino asitleri içerir. <br>
        2- <b>Kazein:</b> Kazein, egzersizden sonra kaslardaki iyileşmeyi hızlandırabilen
         bir amino asit olan glutamin içerir. Vegan ve alerjisi olan kişilerin tüketmesi uygun değildir. 
         Vücut kazeini yavaş sindirdiği için kazeinden yapılan protein tozlarının gece kullanılması önerilir. <br>
       3- <b> Soya:</b> Vegan veya süt alerjisi olan kişiler soyayı peynir altı suyu ve kazein yerine kullanabilir.
        Soyada vücut için gerekli olan tüm amino asitler mevcuttur.<br>
        4- <b>Bezelye: </b>Bitkisel içeriklere sahip olan protein tozlarının çoğu, süt veya soya 
        proteinlerine etkili bir alternatif sunar. Bezelye proteini, L-arginin açısından oldukça zengindir.<br>
       5- <b>Kenevir:</b> Kenevir tohumları, esansiyel yağları asitlerini de içeren
        tam protein kaynaklarındandır. Bu özelliği kenevirden üretilen protein tozlarını veganlar, 
        süt ve soya alerjisi olanlar için iyi bir seçim yapar.<br>
    </p>
    <p>
        <h2>Protein Tozu Ne İşe Yarar?</h2>
        
Protein tozunun en temel işlevi, kilo vermeye ve kas kütlesinin
 geliştirmeye yardımcı olmaktır. Özellikle direnç egzersizleri sırasında kaslarınızda 
 oluşan mikro yırtılmalar iyileştikçe kaslarınız güçlenir ve kas kütleniz artar. Protein 
 yeniden kas oluşturmaya ve oluşan mikro yırtılmalara gidermeye destek verdiği için sporcular için en temel besin 
kaynaklarındandır. Protein tozu da bu besini kolayca almanızı sağlar.
    </p>
    <p>
        <h3>Protein Tozu Nasıl Kullanılır?</h3>
        Protein tozunu suyla karıştırabilir veya süt, Hindistan cevizi suyu gibi
         aromalarla lezzetlendirerek sağlıklı smoothieler hazırlayarak kullanabilirsiniz.
         Hatta birçok yemeği pişirirken tarifinize protein tozu ekleyebilirsiniz.

    </p>
    <p>
        <h4>Protein Tozunu Ne Zaman Kullanmalıyız ?</h4>
        Protein tozu kullanımıyla ilgili en önemli şehir efsanelerinden birisi antrenmandan 
        hemen önce kullanılması gerektiğidir. Antrenman öncesi vücudunuz, enerji için 
        karbonhidratlara ihtiyaç duyar. Karbonhidratlar kaslarınızın çalışması için gerekli
         enerjiyi sağlar. Protein tozu almak için en iyi zaman ise antrenman sonrasıdır. 
         Antrenmanınızı tamamladıktan sonraki 30 dakika içinde soğuk su veya sütle karıştırılmış
         bir whey protein tozu tüketmek kan dolaşımınızı, yeni kas dokusu haline gelmek 
        üzere olan amino asitlerle doldurarak iyileşmeyi başlatabilir
    </p>
    <img class="img" src="image/protein-tozu2.jpg">
</body>
</html>
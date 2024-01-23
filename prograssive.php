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
      <h1>Progressive Overload Nedir? Nasıl Uygulanır?</h1>
      <img class="img" src="image/progressive_overload_1.jpg">
      <p>
        Progressive Overload dilimize, aşamalı aşırı yüklenme veya aşamalı yükleme olarak çevirebileceğimiz, zamana bağlı olarak
         hareketlerde kullandığını ağırlıkların, tekrarların, set sayılarının arttırılmasıdır. Yani progressive oveload stretijisiyle 
         antrenman programı uyguluyorsanız, belirli aralıklarla antrenman yoğunluğunuzu arttırmalı ve gelişiminizi sürekli zorlamalısınız. 
         Tabi ki her gün ağırlık arttırılamaz fakat haftalık olarak ağırlık, set veya tekrar sayılarının arttırılması, birkaç ay içerisinde ciddi değişimler gösterecektir. <br>
        </p>
        <p>
            Antrenman yoğunluğunuzu arttırdıkça vücut da zamanla uyum sağlayacağı için sürekli bir artış söz konusu olacaktır.
         Bu durumda kas dokusunun gelişmesinde, büyümesine yani kas kütlesi artışına sebep olacaktır.
Progressive Overload stratejisi ile ilerlediğinizde, temel olarak zamanla kaldırdığınız ağırlıklar ve set sayıları artacaktır.
 Bu da zamanla daha kısa antrenman süresi içerisinde, daha fazla ağırlık kaldırmanızı sağlayacaktır. Bu stretiji ile ilerlemek kas liflerini her antrenmanda veya düzenli bir zaman aralıkları
  ile daha fazla zorlayarak gelişmesini sağlamaktır. Aksi taktirde yapılan aynı ağırlık, aynı set ve aynı tekrar ile ilerleyen antrenmanlarda ise vücut belli bir seviyeye gelir ve gelişimini yavaşlar. Bunun önüne geçmek ve seviyenizi plato seviyesinden çıkarmak için progressive overload stretijisi ile antrenmanlarınızı yapabilirsiniz.
    </p>
    <p>
        <p>
            Antrenman Programı Yaklaşımı Nasıl Olmalı

Progressive Overload antrenman programını uygulamak, basit olduğu kadar düzenlemesi ve istikrar sağlanması oldukça disiplinli bir süreç gerektirecektir. Bunun için Progressive Overload antrenman programını iki farklı yoldan ilerletebilirsiniz. Bu iki yoldan hangisini kendinize uygun görüyorsanız onu seçebilir ve onunla ilerleyebilirsiniz.
<br>
<b>Doğrusal Yükleme</b>   
Bu antrenman yaklaşımında ağırlıklar, setler ve tekrarlar doğrusal oranda arttırılır veya azaltılır. Bu antrenman tarzı ile kaslarınızda sürekli bir gerilim artışı olacağı için kas kazanımı da bununla birlikte artış sağlayacaktır. Örneğin amacınız kas gelişimi ve güç artışı sağlamaksa, başlangıç seviyesinde daha düşük ağırlık ve yüksek tekrar ile başlamalısınız. Ardından ağırlığı arttırarak, tekrar sayısını düşürebilir ve gelişiminizi arttırabilirsiniz.
<br>
<b>Ters Yükleme</b> 
Bu antrenman tarzında ise doğrusal yüklemeye kıyasla farklı bir yöntem izlemelisiniz. Doğrusal yüklemede her hafta belirli miktarda ağırlık artışı sağlanırken, bu antrenmanda sürekli artış sağlamak yerine, ağırlığı bazı hafta arttırabilir veya düşürebilirsiniz. Tabi ki doğrusal antrenmana göre daha az gelişim olacaktır fakat, hem vücuda dinlenmesi gereken süreyi tanımış olursunuz, hem de uzun vadede en iyi gelişimi elde edersiniz.

Bu iki yaklaşımdan birini seçerek, antrenman programlarınızdan ağırlık, set ve tekrar sayısındaki artışı sağlayabilirsiniz. Böylelikle hedefinize giden bu yolda, hangi yaklaşımının sizin için uygun olduğunu anlayabilirsiniz.
        </p>
</body>
</html>
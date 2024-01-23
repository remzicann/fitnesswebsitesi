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

        .blog-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .blog-post {
            flex: 1;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
            position: relative; /* Renk değişikliği ve animasyon için pozisyonu göreceli yapın */
        }

        .blog-post:hover {
            background-color: #f9f9f9;
        }

        .blog-title {
            font-size: 24px;
            font-weight: bold;
        }

        .blog-date {
            color: #888;
        }

        .blog-content {
            margin-top: 10px;
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
		<br> 
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

    <div class="blog-container">
        <div class="blog-post" onmouseover="blogHover(this)" onmouseout="blogUnhover(this)">
            <h2 class="blog-title">Günlük Kalori İhtiyacı Hesaplama</h2>
            <p class="blog-date">10 Eylül 2023</p>
            <p class="blog-content">
                Günlük kalori ihtiyacı, kişinin yaşam tarzı, aktivite düzeyi, cinsiyeti, boyu, kilosu ve
                metabolizması gibi birbirinden farklı ve bağımsız bir çok faktöre bağlıdır. Bu faktörleri bir
                fonksiyondan geçirerek kişinin günlük kalori ihtiyacı ortalama olarak belirlenebilir.
            </p>
            <a href="kalori.php">Devamını oku</a>
        </div>
        <div class="blog-post" onmouseover="blogHover(this)" onmouseout="blogUnhover(this)">
            <h2 class="blog-title">Protein Tozu Nedir?</h2>
            <p class="blog-date">15 Eylül 2023</p>
            <p class="blog-content">
                Protein tozu, yüksek protein içeren popüler bir besin takviyesidir. Bu besin takviyeleri, ısı ve enzimler kullanılarak peynir altı suyu gibi besinlerden ayrıştırılan proteinden elde edilir.
            </p>
            <a href="protein.php">Devamını oku</a>
        </div>
        <div class="blog-post" onmouseover="blogHover(this)" onmouseout="blogUnhover(this)">
            <h2 class="blog-title">Vücut Yağ Oranı Hesaplama Formülü</h2>
            <p class="blog-date">20 Eylül 2023</p>
            <p class="blog-content">
                Vücut yağ oranı takibini yapmanın kolay bir yolunu arıyorsanız, vücut çevresi ölçümlerinize bağlı olarak yağ oranınızı öğrenebilirsiniz.
            </p>
            <a href="yağ.php">Devamını oku</a>
        </div>
    
    <div class="blog-post" onmouseover="blogHover(this)" onmouseout="blogUnhover(this)">
        <h2 class="blog-title">Progressive Overload Nedir? Nasıl Uygulanır?</h2>
        <p class="blog-date">15 Eylül 2023</p>
        <p class="blog-content">
            Progressive Overload dilimize, aşamalı aşırı yüklenme veya aşamalı yükleme olarak çevirebileceğimiz, zamana bağlı olarak 
            hareketlerde kullandığını ağırlıkların, tekrarların, set sayılarının arttırılmasıdır.
        </p>
        <a href="prograssive.php">Devamını oku</a>
    </div>
    
</div>
    <script>
        function blogHover(element) {
            element.style.backgroundColor = "#007BFF";
            element.style.transform = "scale(1.05)";
            element.style.transition = "all 0.3s";
            element.style.color = "#fff";
        }

        function blogUnhover(element) {
            element.style.backgroundColor = "#fff";
            element.style.transform = "scale(1)";
            element.style.color = "#000";
        }
    </script>
</body>
</html>
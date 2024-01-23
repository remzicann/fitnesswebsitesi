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
	
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Oluştur</title>
    <style>
        header {
            text-align: center;
        }

        .logo {
            display: inline-block;
            vertical-align: middle;
        }

        .logo img {
            height: 100px;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <center>
        <h1>Program Oluştur</h1>
        <form name="egzersiz" action="#" method="get" onsubmit="return saveExercise()">
            <table>
                <tr>
                    <td>Egzersiz Adı:</td>
                    <td><input type="text" id="egzersizAdi"></td>
                </tr>
                <tr>
                    <td>Set Sayısı:</td>
                    <td><input type="number" id="setSayisi"></td>
                </tr>
                <tr>
                    <td>Tekrar Sayısı:</td>
                    <td><input type="number" id="tekrarSayisi"></td>
                </tr>
            </table>
            <input type="submit" value="Kaydet">
            <input type="reset" value="Temizle">
        </form>
        <table id="egzersizTablosu">
            <thead>
                <tr>
                    <th>Egzersiz Adı</th>
                    <th>Set Sayısı</th>
                    <th>Tekrar Sayısı</th>
                </tr>
            </thead>
            <tbody id="egzersizTablosuGovde">
                
            </tbody>
        </table>
    </center>
    <script>
        function saveExercise() {
            var egzersizAdi = document.getElementById("egzersizAdi").value;
            var setSayisi = document.getElementById("setSayisi").value;
            var tekrarSayisi = document.getElementById("tekrarSayisi").value;
    
            var table = document.getElementById("egzersizTablosuGovde");
            
            // Yeni bir satır oluştur
            var row = table.insertRow(-1);
    
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
    
            cell1.innerHTML = egzersizAdi;
            cell2.innerHTML = setSayisi;
            cell3.innerHTML = tekrarSayisi;
    
            // Silme düğmesini oluştur
            var deleteButton = document.createElement("button");
            deleteButton.innerHTML = "Sil";
            deleteButton.onclick = function() {
                // Silme düğmesine tıklandığında bu işlev çağrılacak
                var rowIndex = this.parentElement.parentElement.rowIndex;
                table.deleteRow(rowIndex);
            };
    
            cell4.appendChild(deleteButton);
    
            // Girdi alanlarını temizle
            document.getElementById("egzersizAdi").value = "";
            document.getElementById("setSayisi").value = "";
            document.getElementById("tekrarSayisi").value = "";
    
            return false;
        }
    </script>
    
</body>
</html>
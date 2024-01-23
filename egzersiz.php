<?php
require_once 'database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> RePe Fitness</title>
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
	</header>

	<!DOCTYPE html>
<html>
<head>
    <title>Egzersizler</title>
    <style>
    #container {
        text-align: center;
    }

    .exercise-category {
        display: inline-block;
        padding: 10px;
        margin: 10px;
        cursor: pointer;
    }

    .selected {
        background-color: #0f0f0f;
        color: #fff;
    }

    .exercise-list {
        display: none;
        text-align: center;
    }

    .exercise-box {
        display: inline-block;
        width: 250px;
        height: 300px;
        margin: 10px;
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }

    .exercise-box img {
        max-width: 100%;
        height: auto;
    }

    .exercise-box p {
        font-weight: bold;
    }

    #exercises {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
	.exercise-box:hover {
        background-color: #3498db; /* Fare yaklaşıldığında arka plan rengi değişiyor */
        color: #fff; /* Fare yaklaşıldığında metin rengi değişiyor */
    }
</style>

</head>
<body>
    <div id="container">
        <div class="exercise-category" onmouseover="changeColor(this)" onmouseout="restoreColor(this)" onclick="showExercises('gogus')">Göğüs</div>
        <div class="exercise-category" onmouseover="changeColor(this)" onmouseout="restoreColor(this)" onclick="showExercises('sirt')">Sırt</div>
        <div class="exercise-category" onmouseover="changeColor(this)" onmouseout="restoreColor(this)" onclick="showExercises('omuz')">Omuz</div>
        <div class="exercise-category" onmouseover="changeColor(this)" onmouseout="restoreColor(this)" onclick="showExercises('bacak')">Bacak</div>
        <div class="exercise-category" onmouseover="changeColor(this)" onmouseout="restoreColor(this)" onclick="showExercises('onkol')">Ön Kol</div>
        <div class="exercise-category" onmouseover="changeColor(this)" onmouseout="restoreColor(this)" onclick="showExercises('arkakol')">Arka Kol</div>
        

    <div id="exercises">
        <div class="exercise-list" id="gogus-exercises" >
            <div class="exercise-box">
                <img src="image/egzersiz1.jpg" alt="Egzersiz 1 Resmi" width="200" height="200">
                <p>Bench Press </p>
            </div>
            <div class="exercise-box">
                <img src="image/egzersiz2.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
                <p>Dumbell Bench Press</p>
            </div>
			<div class ="exercise-box">
                <img src="image/egzersiz6.jpg" alt="Egzersiz 6 Resmi" width="200" height="200">
                <p>Dumbell Fly</p>
            </div>
            <div class="exercise-box">
                <img src="image/egzersiz3.jpg" alt="Egzersiz 3 Resmi" width="200" height="200">
                <p>İncline Dumbell Press </p>
            </div> <br>
            <div class="exercise-box">
                <img src="image/egzersiz4.jpg" alt="Egzersiz 4 Resmi" width="200" height="200">
                <p>İncline Barbell Press</p>
            </div> 
            <div class="exercise-box">
                <img src="image/egzersiz5.jpg" alt="Egzersiz 5 Resmi" width="200" height="200">
                <p>İncline Dumbell Fly</p>
            </div>
           
            <div class="exercise-box">
                <img src="image/egzersiz7.jpg" alt="Egzersiz 7 Resmi" width="200" height="200">
                <p>Machine Fly</p>
            </div>
			<div class="exercise-box">
                <img src="image/egzersiz8.jpg" alt="Egzersiz 8 Resmi" width="200" height="200">
                <p>Decline Barbell Press </p>
            </div> <br>
			<div class="exercise-box">
                <img src="image/egzersiz9.jpg" alt="Egzersiz 9 Resmi" width="200" height="200">
                <p>Decline Dumbell Press</p>
            </div>
			<div class="exercise-box">
                <img src="image/egzersiz10.jpg" alt="Egzersiz 10 Resmi" width="200" height="200">
                <p>Decline Dumbell Fly </p>
            </div>
			<div class="exercise-box">
                <img src="image/egzersiz11.jpg" alt="Egzersiz 11 Resmi" width="200" height="200">
                <p>Cable Fly </p>
            </div>
        </div>
		<div id="exercises">
			<div class="exercise-list" id="sirt-exercises">
				<div class="exercise-box">
					<img src="image/sırt1.jpg" alt="Egzersiz 1 Resmi" width="200" height="200">
					<p>PULL UP(Barfiks) </p>
				</div>
				<div class="exercise-box">
					<img src="image/sırt2.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
					<p>LAT PULLDOWN</p>
				</div>
				<div class ="exercise-box">
					<img src="image/sırt3.jpg" alt="Egzersiz 6 Resmi" width="200" height="200">
					<p>CLOSE GRİP LAT PULLDOWN</p>
				</div>
				<div class="exercise-box">
					<img src="image/sırt4.jpg" alt="Egzersiz 3 Resmi" width="200" height="200">
					<p>DEADLİFT </p>
				</div> <br>
				<div class="exercise-box">
					<img src="image/sırt5.jpg" alt="Egzersiz 4 Resmi" width="200" height="200">
					<p>DUMBBELL BENT OVER REVERSE GRIP ROW</p>
				</div>
				<div class="exercise-box">
					<img src="image/sırt6.jpg" alt="Egzersiz 5 Resmi" width="200" height="200">
					<p>DUMBBELL ROW</p>
				</div>
			   
				<div class="exercise-box">
					<img src="image/sırt7.jpg" alt="Egzersiz 7 Resmi" width="200" height="200">
					<p>T BAR ROW </p>
				</div>
				<div class="exercise-box">
					<img src="image/sırt8.jpg" alt="Egzersiz 8 Resmi" width="200" height="200">
					<p>SEATED CABLE ROW </p>
				</div> <br>
				<div class="exercise-box">
					<img src="image/sırt9.jpg" alt="Egzersiz 9 Resmi" width="200" height="200">
					<p>BARBELL BENT OVER ROW</p>
				</div>
				<div class="exercise-box">
					<img src="image/sırt10.jpg" alt="Egzersiz 10 Resmi" width="200" height="200">
					<p> BENT OVER DUMBBELL ROW </p>
				</div>
				<div class="exercise-box">
					<img src="image/sırt11.jpg" alt="Egzersiz 11 Resmi" width="200" height="200">
					<p>CABLE ONE ARM LAT PULLDOWN </p>
				</div>
				<div class="exercise-box">
					<img src="image/sırt12.jpg" alt="Egzersiz 11 Resmi" width="200" height="200">
					<p>ROPE STRAIGHT ARM PULLDOWN </p>
				</div> <br>
				<div class="exercise-box">
					<img src="image/sırt13.jpg" alt="Egzersiz 11 Resmi" width="200" height="200">
					<p>LEVER T-BAR ROW </p>
				</div>
				<div class="exercise-box">
					<img src="image/sırt14.jpg" alt="Egzersiz 11 Resmi" width="200" height="200">
					<p>REVERSE GRIP BARBELL ROW </p>
				</div>
				
			</div>
			<div id="exercises">
				<div class="exercise-list" id="omuz-exercises">
					<div class="exercise-box">
						<img src="image/omuz1.jpg" alt="Egzersiz 1 Resmi" width="200" height="200">
						<p>DUMBBELL SHOULDER PRESS </p>
					</div>
					<div class="exercise-box">
						<img src="image/omuz2.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
						<p>DUMBBELL LATERAL RAISE</p>
					</div>
					<div class ="exercise-box">
						<img src="image/omuz3.jpg" alt="Egzersiz 6 Resmi" width="200" height="200">
						<p>CABLE LATERAL RAISE</p>
					</div>
					<div class="exercise-box">
						<img src="image/omuz4.jpg" alt="Egzersiz 3 Resmi" width="200" height="200">
						<p>DUMBBELL FRONT RAISE </p>
					</div> <br>
					<div class="exercise-box">
						<img src="image/omuz5.jpg" alt="Egzersiz 4 Resmi" width="200" height="200">
						<p>REAR DELT FLY MACHINE</p>
					</div> 
					<div class="exercise-box">
						<img src="image/omuz6.jpg" alt="Egzersiz 5 Resmi" width="200" height="200">
						<p>ARNOLD PRESS</p>
					</div>
				   
					<div class="exercise-box">
						<img src="image/omuz7.jpg" alt="Egzersiz 7 Resmi" width="200" height="200">
						<p>CABLE REAR DELT FLY</p>
					</div>
					<div class="exercise-box">
						<img src="image/omuz8.jpg" alt="Egzersiz 8 Resmi" width="200" height="200">
						<p>BENT OVER LATERAL RAISE / REVERSE FLY</p>
					</div> <br>
					<div class="exercise-box">
						<img src="image/omuz9.jpg" alt="Egzersiz 9 Resmi" width="200" height="200">
						<p>FACE PULL</p>
					</div>
					<div class="exercise-box">
						<img src="image/omuz10.jpg" alt="Egzersiz 10 Resmi" width="200" height="200">
						<p> SMITH MACHINE SHOULDER PRESS </p>
					</div> 
					<div class="exercise-box">
						<img src="image/omuz11.jpg" alt="Egzersiz 11 Resmi" width="200" height="200">
						<p>LEVER SHOULDER PRESS / MACHINE SHOULDER PRESS </p>
					</div>
					<div class="exercise-box">
						<img src="image/omuz12.jpg" alt="Egzersiz 11 Resmi" width="200" height="200">
						<p>45 DEGREE İNCLINE ROW </p>
					</div> <br>
				</div>
				<div id="exercises">
					<div class="exercise-list" id="onkol-exercises">
						<div class="exercise-box">
							<img src="image/biceps1.jpg" alt="Egzersiz 1 Resmi" width="200" height="200">
							<p>DUMBBELL CURL </p>
						</div>
						<div class="exercise-box">
							<img src="image/biceps2.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
							<p>BARBELL CURL</p>
						</div>
						<div class ="exercise-box">
							<img src="image/biceps3.jpg" alt="Egzersiz 6 Resmi" width="200" height="200">
							<p>CONCENTRATION CURL</p>
						</div>
						<div class="exercise-box">
							<img src="image/biceps4.jpg" alt="Egzersiz 3 Resmi" width="200" height="200">
							<p>DUMBBELL PREACHER CURL </p>
						</div> <br>
						<div class="exercise-box">
							<img src="image/biceps5.jpg" alt="Egzersiz 3 Resmi" width="200" height="200">
							<p>EZ BAR PREACHER CURL </p>
						</div>
						<div class="exercise-box">
							<img src="image/biceps6.jpg" alt="Egzersiz 3 Resmi" width="200" height="200">
							<p>HAMMER CURL </p>
						</div>
						<div class="exercise-box">
							<img src="image/biceps7.jpg" alt="Egzersiz 3 Resmi" width="200" height="200">
							<p>SEATED INCLINE DUMBBELL CURL </p>
						</div>
						<div class="exercise-box">
							<img src="image/biceps8.jpg" alt="Egzersiz 3 Resmi" width="200" height="200">
							<p>ONE ARM CABLE CURL </p>
						</div> <br>
						<div class="exercise-box">
							<img src="image/biceps9.jpg" alt="Egzersiz 3 Resmi" width="200" height="200">
							<p>OVERHEAD CABLE CURL </p>
						</div>				
    </div>
	</div>
	<div id="exercises">
		<div class="exercise-list" id="arkakol-exercises">
			<div class="exercise-box">
				<img src="image/triceps1.jpg" alt="Egzersiz 1 Resmi" width="200" height="200">
				<p>TRİCEPS PUSH DOWN </p>
			</div>
			<div class="exercise-box">
				<img src="image/triceps2.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
				<p>SEATED DUMBBELL TRICEPS EXTENSION</p>
			</div>
			<div class="exercise-box">
				<img src="image/triceps3.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
				<p>DUMBBELL SKULL CRUSHER</p>
			</div>
			<div class="exercise-box">
				<img src="image/triceps4.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
				<p>ROPE PUSHDOWN</p>
			</div> <br>
			<div class="exercise-box">
				<img src="image/triceps5.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
				<p>REVERSE GRIP PUSHDOWN</p>
			</div> 
			<div class="exercise-box">
				<img src="image/triceps6.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
				<p>CABLE ONE-ARM OVERHEAD TRICEPS EXTENSION</p>
			</div> 
			<div class="exercise-box">
				<img src="image/triceps7.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
				<p>ONE ARM TRICEPS PUSHDOWN</p>
			</div> 
			<div class="exercise-box">
				<img src="image/triceps8.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
				<p>CABLE ROPE OVERHEAD TRICEPS EXTENSION</p>
			</div> 
		</div>
		<div id="exercises">
			<div class="exercise-list" id="bacak-exercises">
				<div class="exercise-box">
					<img src="image/bacak1.jpg" alt="Egzersiz 1 Resmi" width="200" height="200">
					<p>DUMBBELL WALKING LUNGE </p>
				</div>
				<div class="exercise-box">
					<img src="image/bacak2.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
					<p>DUMBBELL SQUAT</p>
				</div>
				<div class="exercise-box">
					<img src="image/bacak3.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
					<p>BARBELL SQUAT</p>
				</div>
				<div class="exercise-box">
					<img src="image/bacak4.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
					<p>SEATED LEG CURL
					</p>
				</div> <br>
				<div class="exercise-box">
					<img src="image/bacak5.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
					<p>LEG EXTENSION</p>
				</div> 
				<div class="exercise-box">
					<img src="image/bacak6.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
					<p>LEG PRESS</p>
				</div> 
				<div class="exercise-box">
					<img src="image/bacak7.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
					<p>DUMBBELL REAR LUNGE</p>
				</div> 
				<div class="exercise-box">
					<img src="image/sırt4.jpg" alt="Egzersiz 2 Resmi" width="200" height="200">
					<p>DEADLİFTS</p>
				</div> 
    <script>
        function showExercises(category) {
            // Tüm kategorileri gizle
            var categories = document.getElementsByClassName('exercise-list');
            for (var i = 0; i < categories.length; i++) {
                categories[i].style.display = 'none';
            }

            // Seçilen kategoriyi göster
            var categoryExercises = document.getElementById(category + '-exercises');
            categoryExercises.style.display = 'block';

            // Tüm kategori seçeneklerinin rengini sıfırla
            var categoryButtons = document.getElementsByClassName('exercise-category');
            for (var i = 0; i < categoryButtons.length; i++) {
                categoryButtons[i].classList.remove('selected');
            }

            // Seçilen kategori seçeneğinin rengini değiştir
            var selectedCategoryButton = document.querySelector('[onclick="showExercises(\'' + category + '\')"]');
            selectedCategoryButton.classList.add('selected');
        }

        function changeColor(element) {
            element.style.backgroundColor = '#3498db';
            element.style.color = '#fff';
        }

        function restoreColor(element) {
            element.style.backgroundColor = '';
            element.style.color = '';
        }
		
    </script>
</body>
</html>
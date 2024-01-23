<?php
// MySQL veritabanına bağlantı sağladığımız kısım 
//bağlantı kurulamazsa,  "Veritabanı Bağlantısı sağlanamadı" hata mesajıyla  işlem sonlandırılır.
        $servername = "localhost"; 
        $username = "root";
        $password = "";
        $dbname = "hesaplar";
        $connection = @ mysql_connect($servername,$username,$password) or die("MySQL Bağlantısı Sağlanamadı.");
        mysql_select_db($dbname, $connection) or die("Veritabanı Bağlantısı sağlanamadı.");


        session_start(); // oturum başlatılır

        //Oturumun var olup olmadığı ve kullanıcının giriş yapıp yapmadığı kontrol edilir.
        // Eğer oturum varsa ve kullanıcı giriş yapmışsa, kullanıcı bilgileri veritabanından çekilerek ilgili değişkenlere atanır.
        if (isset($_SESSION['login'])) {
                if ($_SESSION['login'] == 5) {
                        $userid = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($_SESSION['userid']))));
                        $uyequery = mysql_query("SELECT * FROM hesaplar WHERE userid='".$userid."'");

                        // Kullanıcının veritabanındaki bilgileri, bir döngü aracılığıyla çekilir ve ilgili değişkenlere atanır.
                        while ($uyesonuc = mysql_fetch_array($uyequery)) {
                                $a_id = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($uyesonuc['userid']))));
                                $a_ad = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($uyesonuc['name']))));
                                $a_soyad = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($uyesonuc['surname']))));
                                $a_email = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($uyesonuc['email']))));
                                $a_sifre = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($uyesonuc['password']))));
                                $girissorgu = 1;
                        }
                } else {
                        $girissorgu = 0;
                }
                
        }else {
                $girissorgu = 0;
        }

?>
<?php  






  if($_POST)  {


        $kullaniciadi = $_POST["kullaniciadi"];
        $sifre = $_POST["sifre"];


        if($kullaniciadi =="g201210027@sakarya.edu.tr" && $sifre =="g201210027"){
            echo "Giris Basarili ";
            echo "<br>";
            
            echo "Hosgeldiniz g201210027 ";
            echo "<br>";
            
            echo "Anasayfaya yonlendiriliyorsunuz";
           





            header("Refresh: 3; url=index.html");
        }

        else {


            echo "Hatali Giris Yaptiniz!";
            echo "<br>";

            echo "Lutfen Bilgilerinizi Kontrol Edip Tekrar Deneyin!!";
            echo "<br>";
            echo "Login Sayfasina yonlendiriliyorsunuz";
            header("Refresh: 3; url=login.html");
            
        }


  }
?>
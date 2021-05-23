<?php


if($_POST)  {


    $isim = $_POST["isim"];
    $soyisim = $_POST["soyisim"];
    $email = $_POST["email"];
    $cinsiyet = $_POST["cinsiyet"];
   $yas =$_POST["yas"];
    $mesaj =$_POST["mesaj"];



    echo $isim;
    echo "<br>";
    echo $soyisim;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $cinsiyet;
    echo "<br>";
    echo $yas;
    echo "<br>";
    echo $mesaj;
    header("Refresh: 3; url=index.html");
    
    


}




?>
<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */

 // Önce function.php dosyasını dahil ediyoruz.
require_once("functions.php");

//id değeri eğer boş gelirse default değer 1 olacak
if (!isset($id)) {
    $id=1;
}

//Titile değeri var mı yok mu bakılır yoksa default değer atanır yoksa olan değer düşer
if(!isset($value["title"]))
 	{
        $title="Hasan Kürşad KORKMAZ Bootcamp 2. Hafta Ödev";
    }
 	else
 	{
 		$title=$value["title"];
 	}

//Type içim hergangi bir değer düştüyse o işlenir düşmediyse default olarak normal olur
if(!isset($value["type"]))
 	{
 		$type="normal";
 	}
 	else
 	{
 		$type=$value["type"];
 	}

     //Type'ın değerine göre arkaplan rengi değişir
     if ($type=="normal") {
         $background="none";
     }
     elseif ($type=="urgent") {
         $background="red";
     }
     elseif ($type=="warning") {
        $background="yellow";
     }
     //type değerine göre oluşan background -color ile div oluşturulur.
     echo "<div style='background-color:".$background.";'>";

     //ilgili fonksiyondan çağıralan değerlere göre fonksiyon çalışır.
     getPostDetails($id,$title);
     echo "</div>";


     

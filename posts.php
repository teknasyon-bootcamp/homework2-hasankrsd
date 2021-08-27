  
<?php

/**
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */ 

  // Önce function.php dosyasını dahil ediyoruz.
  
require_once("functions.php");

$randomNumber= getRandomPostCount(1,1000); //1 ile 1000 arasında rastgele sayı değeri üretir.
$randomPosts=getLatestPosts($randomNumber); // elde edilen sayıyı getlatestpost fonksiyonuna atama yapılır.


//post.php'deki değerler döngü ile çekilir ve ekrana yazıdılırç
foreach ($randomPosts as $id => $value) {
    //post.php dahil edildi
include "post.php";

echo "id:".$id." title:".$value['title']." type:".$value['type']."<br>";


}

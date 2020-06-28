<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=asosyal", "onder", "Ankara06!1");
    $db->query("SET CHARACTER SET utf8");

} catch ( PDOException $e ){
    print $e->getMessage();
}



class UyeGirisi
{
var $kullanici_adi;
var $kullanici_sifre;
var $hata;
var $shata;
var $session;
    public function uye($kullanici_adi,$kullanici_sifre)
    {
        require_once("ayarlar/db.php");
        $query = $db->query("SELECT 	* FROM 	kullanici 
        WHERE	kullanici.kullanici_adi = '{$kullanici_adi}'
        AND    kullanici.kullanici_sifre = '{$kullanici_sifre}' ")->fetch(PDO::FETCH_ASSOC);
            if ( $query ){
             $this->kullanici_adi = $query['kullanici_adi'];
             $this->kullanici_sifre =  $query['kullanici_sifre'];
             
                    $_SESSION['valid'] = true;
                    $_SESSION['timeout'] = time();
                    $_SESSION['username'] = $query['kullanici_adi'];
                    $_SESSION['id'] = $query['id'];       
            }
            else {$this->hata='hata';}

       
    }


    


public function Ses($session)
{
    
      if( isset( $_SESSION['username'] ) ) {
          echo 'Lütfen Bekleyin...';
         header('Refresh: 0; URL = ?act=anasayfa'); 
    }
    
    else {
       
     //   echo  'Merhaba Misafir';
    }
        
     
}
    

}


?>


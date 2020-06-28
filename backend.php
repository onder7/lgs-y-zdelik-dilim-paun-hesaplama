<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />

</head>
<body>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once ('ayarlar/src/Exception.php');
require_once ('ayarlar/src/PHPMailer.php');
require_once ('ayarlar/src/SMTP.php');
if (!empty($_POST))
{


      

                                    $turkcedogru= $_POST['turkcedogru'];
                                    $turkceynls= $_POST['turkceynls'];
                                    $matematikdogru= $_POST['matematikdogru'];
                                    $matematikynls= $_POST['matematikynls'];
                                    $fendogru= $_POST['fendogru'];
                                    $fenynls= $_POST['fenynls'];
                                    $dindogru= $_POST['dindogru'];
                                    $dinynls= $_POST['dinynls'];
                                    $ingilizcedogru= $_POST['ingilizcedogru'];
                                    $ingilizceynls= $_POST['ingilizceynls'];
                                    $tarihdogru= $_POST['tarihdogru'];
                                    $tarihynls= $_POST['tarihynls'];

                                    $telefon= $_POST['telefon'];
                                    $adsoyad= $_POST['adsoyad'];
                                    $puan= $_POST['puan'];
                                    $yuzdedilim= $_POST['yuzdedilim'];

        echo     '

<table style="width: 492px; height: 326px;">
    <tbody>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">&nbsp;&nbsp;Ad Soyad</td>
            <td style="width: 161px; height: 23px;">&nbsp;&nbsp;Telefon</td>
            <td style="width: 134px; height: 23px;">Puan</td>
            <td style="width: 134px; height: 23px;">Yüzdelik Dilim</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">'.$adsoyad .'</td>
            <td style="width: 161px; height: 23px;">'.$telefon .'</td>
            <td style="width: 134px; height: 23px;">'.$puan .'</td>
            <td style="width: 134px; height: 23px;">'.$yuzdedilim .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">&nbsp;Ders</td>
            <td style="width: 161px; height: 23px;">&nbsp;Doğru</td>
            <td style="width: 134px; height: 23px;">&nbsp;Yanlış</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">Türkçe</td>
            <td style="width: 161px; height: 23px;">'.$turkcedogru .'</td>
            <td style="width: 134px; height: 23px;">'.$turkceynls .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">Matematik</td>
            <td style="width: 196px; height: 23px;">'.$matematikdogru .'</td>
            <td style="width: 196px; height: 23px;">'.$matematikynls .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">Fen</td>
            <td style="width: 196px; height: 23px;">'.$fendogru .'</td>
            <td style="width: 196px; height: 23px;">'.$fenynls .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">Din</td>
            <td style="width: 196px; height: 23px;">'.$dindogru .'</td>
            <td style="width: 196px; height: 23px;">'.$dinynls .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">İnglizce</td>
            <td style="width: 196px; height: 23px;">'.$ingilizcedogru .'</td>
            <td style="width: 196px; height: 23px;">'.$ingilizceynls .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">Tarih</td>
            <td style="width: 196px; height: 23px;">'.$tarihdogru .'</td>
            <td style="width: 196px; height: 23px;">'.$tarihynls .'</td>
        </tr>
    </tbody>
</table>

            ';

 //////mail işleimi


$phpMailerObj= new PHPMailer();

$phpMailerObj->SetLanguage("tr", "phpmailer/language");
$phpMailerObj->CharSet  ="utf-8";
$phpMailerObj->Encoding="base64";
$phpMailerObj->isSMTP();                    
$phpMailerObj->SMTPDebug = 1;
$phpMailerObj->Debugoutput = 'html';                    
$phpMailerObj->Host = 'smtp.gmail.com';;                     
$phpMailerObj->Port = 587;


$phpMailerObj->SMTPSecure = 'tls';
$phpMailerObj->SMTPAuth = TRUE;                 
$phpMailerObj->Username = 'onder7@gmail.com';                 
$phpMailerObj->Password = 'Adana0607!1';

$phpMailerObj->isHTML(true); // Define as HTML


$phpMailerObj->setFrom('onder7@gmail.com', 'NOT Bilgisi',0);//gondren
$phpMailerObj->addAddress('onder7@gmail.com', 'Merhaba:' );//alıcı
$phpMailerObj->Subject = 'NOT Bilgisi ***';
$phpMailerObj->Body = '<html>
<head>
<title></title>
</head>    <style>
        /* DivTable.com */
.divTable{
    display: table;
    width: 100%;
}
.divTableRow {
    display: table-row;
}
.divTableHeading {
    background-color: #EEE;
    display: table-header-group;
}
.divTableCell, .divTableHead {
    border: 1px solid #999999;
    display: table-cell;
    padding: 3px 10px;
}
.divTableHeading {
    background-color: #EEE;
    display: table-header-group;
    font-weight: bold;
}
.divTableFoot {
    background-color: #EEE;
    display: table-footer-group;
    font-weight: bold;
}
.divTableBody {
    display: table-row-group;
}
    </style>
<body> <table style="width: 492px; height: 326px;">
    <tbody>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">&nbsp;&nbsp;Ad Soyad</td>
            <td style="width: 161px; height: 23px;">&nbsp;&nbsp;Telefon</td>
            <td style="width: 134px; height: 23px;">Puan</td>
            <td style="width: 134px; height: 23px;">Yüzdelik Dilim</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">'.$adsoyad .'</td>
            <td style="width: 161px; height: 23px;">'.$telefon .'</td>
            <td style="width: 134px; height: 23px;">'.$puan .'</td>
            <td style="width: 134px; height: 23px;">'.$yuzdedilim .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">&nbsp;Ders</td>
            <td style="width: 161px; height: 23px;">&nbsp;Doğru</td>
            <td style="width: 134px; height: 23px;">&nbsp;Yanlış</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">Türkçe</td>
            <td style="width: 161px; height: 23px;">'.$turkcedogru .'</td>
            <td style="width: 134px; height: 23px;">'.$turkceynls .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">Matematik</td>
            <td style="width: 196px; height: 23px;">'.$matematikdogru .'</td>
            <td style="width: 196px; height: 23px;">'.$matematikynls .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">Fen</td>
            <td style="width: 196px; height: 23px;">'.$fendogru .'</td>
            <td style="width: 196px; height: 23px;">'.$fenynls .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">Din</td>
            <td style="width: 196px; height: 23px;">'.$dindogru .'</td>
            <td style="width: 196px; height: 23px;">'.$dinynls .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">İnglizce</td>
            <td style="width: 196px; height: 23px;">'.$ingilizcedogru .'</td>
            <td style="width: 196px; height: 23px;">'.$ingilizceynls .'</td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 196px; height: 23px;">Tarih</td>
            <td style="width: 196px; height: 23px;">'.$tarihdogru .'</td>
            <td style="width: 196px; height: 23px;">'.$tarihynls .'</td>
        </tr>
    </tbody>
</table>
</body>
</html>
          ';

if (!$phpMailerObj->send()) {
echo "phpMailerObjer Error: " . $phpMailerObj->ErrorInfo;
return 0;
} else {
// echo "Message sent!";
return 1;
}

 // 
}
else
{
    echo 'Ömder Mönder';
}
?>
        
        </body>
</html>
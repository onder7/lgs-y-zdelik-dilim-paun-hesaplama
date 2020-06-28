<!DOCTYPE html>

<head>
	
<html xmlns="http://www.w3.org/1999/xhtml">
 <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!-- CODER: Önder Mönder :::onder7@gmail.com -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="css.css">

<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	

</head>
<body>

<div class="container contact">
	<div class="row">
		<div class="col-md-4">
			<div class="contact-info">
				<img src="https://portal.nesibeaydin.com.tr/logolar/kurum_logo_kucuk.png" alt="image"/>
				
				<h4>LGS PUANINI HEMEN HESAPLA, BURSUNU ÖĞREN!

</h4>

			</div>
		</div>
		<div class="col-md-7">
			<div class="contact-form">
<style type="text/css">
	
		#burss{ display:none; }
</style>


				<form action="javascript:hesaplama(); javascript:compute();">
	<table id="tableid">


<thead id="theadid">
				<tr id="trid">
<th id="thid">
</th>
<th id="thid">
Doğru Sayısı</th>
<th id="thid">
Yanlış Sayısı</th>
<th id="thid">
Boş Sayısı</th>
</tr>
				</thead>


<thead id="theadid">
				<tr id="trid">
<th id="thid">
</th>
<th id="thid">
SAYISAL BÖLÜM </th>
<th id="thid"><p class="c">----------------</p>
</th>
<th id="thid"><p class="c">----------------</p>
</th>
	</th>
</tr>
				</thead>

				<tbody id="tbodyid">

					<tr id="trid">
						<td id="tdid">
Matematik (20)</td>
<td id="tdid">
	<input class="form-control" min="0" max="20" type="number" id="matematikdogru" value="20">
						</td>
							<td id="tdid">
<input class="form-control" min="0" max="20" onblur="dogrusayisi(1)" type="number" id="matematikynls" value="0">
							</td>
<td id="tdid">
<input class="form-control" min="0" max="20" onblur="dogrusayisi(1)" type="number" id="matematikbos" value="0" readonly="">
</td>
</tr>


<tr id="trid">
<td id="tdid">
Fen Bilimleri (20)</td>
<td id="tdid">
<input class="form-control" min="0" max="20" type="number" id="fendogru" value="20">
</td>
<td id="tdid">
<input  class="form-control" min="0" max="20" onblur="dogrusayisi(2)" type="number" id="fenynls" value="0">	
</td>
<td id="tdid">
<input class="form-control" min="0" max="20" onblur="dogrusayisi(2)" type="number" id="fenbos" value="0" readonly="">
</td>
</tr>


<thead id="theadid">
				<tr id="trid">
<th id="thid">
</th>
<th id="thid">
SÖZEL BÖLÜM </th>
<th id="thid"><p class="c">----------------</p>
</th>
</th>
<th id="thid"><p class="c">----------------</p>
</th>
	</th>
</tr>
				</thead>
<tr id="trid">
<td id="tdid">
	
</td>
<tr id="trid">
<td id="tdid">
Türkçe (20)</td>
<td id="tdid">
<input class="form-control" min="0" max="20" type="number" id="turkcedogru" value="20">
</td>
						<td id="tdid">
<input class="form-control" min="0" max="20" onblur="dogrusayisi(0)" type="number" id="turkceynls" value="0">
</td>
						<td id="tdid">
<input class="form-control" min="0" max="20" onblur="dogrusayisi(0)" type="number" id="turkcebos" value="0" readonly="">
						</td>
					</tr>
					

<tr id="trid">
<td id="tdid">
Din Kültürü (10)</td>
<td id="tdid">
<input class="form-control" min="0" max="20" type="number" id="dindogru" value="10">
</td>
<td id="tdid">
<input class="form-control" min="0" max="10" onblur="dogrusayisi(3)" type="number" id="dinynls" value="0">
</td>
<td id="tdid">
<input class="form-control" min="0" max="10" onblur="dogrusayisi(3)" type="number" id="dinbos" value="0" readonly="">
</td>
</tr>
<tr id="trid">
<td id="tdid">
İngilizce (10)</td>
<td id="tdid">
<input class="form-control" min="0" max="20" type="number" id="ingilizcedogru" value="10">
</td>
<td id="tdid">
<input class="form-control" min="0" max="10" onblur="dogrusayisi(4)" type="number" id="ingilizceynls" value="0">
</td>
<td id="tdid">
<input class="form-control" min="0" max="10" onblur="dogrusayisi(4)" type="number" id="ingilizcebos" value="0" readonly="">
</td>
</tr>
<tr id="trid">
<td id="tdid">
Inkılap Tarihi (10)</td>
<td id="tdid">
<input class="form-control" min="0" max="20" type="number" id="tarihdogru" value="10">
</td>
<td id="tdid">
<input class="form-control" min="0" max="10" onblur="dogrusayisi(5)" type="number" id="tarihynls" value="0">
</td>
<td id="tdid">
<input class="form-control" min="0" max="10" onblur="dogrusayisi(5)" type="number" id="tarihbos" value="0" readonly="">
</td>
</tr>


<tr id="trid">

<td id="tdid1">
</td>
<td id="tdid1">
</td>
</tr>
</tbody>
	</table>
	<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					

<button name="btn" id="show" type="submit" class="btn btn-default">Hesapla</button>					

<button id="hide" class="btn btn-danger" type="submit" onclick="temizle()">Temizle</button>
				  </div>
				</div>
				
</form>



				
				

				
			</div>




			<div class="nv-content-wrap entry-content">

	
			
<div id="burss">

		<div class="row">
		<div class="onder">
<table class="tg">
<thead>
  <tr>
    


    


  </tr>
</thead>
<tbody>
<tr>
  	
    <td class="tg-0pky">Yüzdelik Dilim:</td>

    <td class="tg-0pky"><input class="form-control" id="yuzdedilim" type="text" name="yuzdedilim" > </td>

    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
  	
    <td class="tg-0pky">Puan</td>

    <td class="tg-0pky"><input class="form-control" id="puan" type="text" name="puan" > </td>

    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>

  <tr>
  	
    <td class="tg-0pky">Ad Soyad</td>

    <td class="tg-0pky"><input class="form-control" id="adsoyad" type="text" name="adsoyad" required> </td>

    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky">Telefon</td>
    <td class="tg-0pky"><input class="form-control" id="telefon" type="text" name="telefon" required > </td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
      
  
    
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
</tbody>
</table>

</div></div>



	<button style="color: #fff; background-color: #25274D;" name="btn" id="bursx" id="bursx" type="submit" class="btn btn-default">Bursluluk Oranını Görmek İçin Tıklayın </button>	

	<div class="yuzdeyuz" id="yuzdeyuz" style="display:none">Tam Bursluluk Aldınız..</div>
	<ul>
		<hr>
		<li><p>2019 MEB LGS sınav istatistikleri (net ortalamaları ve standart sapma değerleri) kullanılarak puan hesaplaması yapılmaktadır. Dolayısıyla tüm puan hesaplama uygulamaları tahmini olacaktır.</p></li>
<li><p>Sistemi kullanarak alacağınız puan tahmini puandır, kanuni bağlayıcılığı yoktur.</p></li>
<li><p>Sınavın kolay olması durumunda puanlar düşer, zor olması durumunda puanlar yükselir.</p></li>
<li><p>Yerleştirme sisteminde önemli olan aldığınız puan değil, tüm sınava girenler içindeki sıralamanızdır.</p></li>
	</ul>				



</div>


</div>

		</div>
	</div>
</div>
<style>
    .swal2-container.fade {
       opacity: 1
    }
</style>
<script>
$(document).ready(function(){


	$("#hide").click(function(){
	$("#burss").hide();

	});	

	$("#show").click(function(){
	$("#burss").show();

	$("#bursx").click(function(){

 

var turkcedogru = document.getElementById("turkcedogru").value;
var turkceynls = document.getElementById("turkceynls").value;

var matematikdogru = document.getElementById("matematikdogru").value;
var matematikynls = document.getElementById("matematikynls").value;

var fendogru = document.getElementById("fendogru").value;
var fenynls = document.getElementById("fenynls").value;

var dindogru = document.getElementById("dindogru").value;
var dinynls = document.getElementById("dinynls").value;

var ingilizcedogru = document.getElementById("ingilizcedogru").value;
var ingilizceynls = document.getElementById("ingilizceynls").value;

var tarihdogru = document.getElementById("tarihdogru").value;
var tarihynls = document.getElementById("tarihynls").value;



var telefon = document.getElementById("telefon").value;
var adsoyad = document.getElementById("adsoyad").value;
var puan = document.getElementById("puan").value;
var yuzdedilim = document.getElementById("yuzdedilim").value;
sayi=yuzdedilim.substr(1);
var yuzdedilim = parseFloat(sayi,100);
yuzdedilim = yuzdedilim.toFixed(2);

if (adsoyad.length == 0) {
      swal({
  title: "İsim Soyisim yazmadınız",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 $(document).die();
}
else if(telefon.length == 0)
{
	      swal({
  title: "Telefon Yazmadınız",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
 $(document).die();
}

if (yuzdedilim == 0.01 ) {

swal("Tam Bursluluk hakkı kazandınız.. Sizi aramamızı istermisiniz", {
 title: 'Tebrikler',


	icon: 'success',
			buttons: {  //cancel, catch, defealt farkını anlamadım.
				cancel: "Kapat", 
				defeat: "Evet arayın", 
			  },
			})
			.then((value) => {
			  switch (value) {
			 
				case "defeat":
				  swal("Teşekkürler!", "En kısa sürede sizi arayacağız", "success");
				  break;
			 
		
				default:
				  swal("Teşekkürler...");
			}
		});
}
else if (yuzdedilim < 	1.01  && yuzdedilim < 2 ) {
swal("%70 Bursluluk hakkı kazandınız.. Sizi aramamızı istermisiniz", {
			buttons: {  
				cancel: "Kapat", 
							defeat: "Evet arayın", 
			  },
			})
			.then((value) => {
			  switch (value) {
			 
				case "defeat":
				  swal("Teşekkürler!", "En kısa sürede sizi arayacağız", "success");
				  break;
				default:
				  swal("Teşekkürler...");
			}
		});
}

else if (yuzdedilim < 2.01  && yuzdedilim < 5 ) {
  swal("%50 Bursluluk hakkı kazandınız.. Sizi aramamızı istermisiniz", {
			buttons: {  
				cancel: "Kapat", 
							defeat: "Evet arayın", 
			  },
			})
			.then((value) => {
			  switch (value) {
			 
				case "defeat":
				  swal("Teşekkürler!", "En kısa sürede sizi arayacağız", "success");
				  break;
				default:
				  swal("Teşekkürler...");
			}
		});


}
else if (yuzdedilim < 5.01  && yuzdedilim < 7 ) {
swal("%35 Bursluluk hakkı kazandınız.. Sizi aramamızı istermisiniz", {
			buttons: { 
				cancel: "Kapat", 
							defeat: "Evet arayın", 
			  },
			})
			.then((value) => {
			  switch (value) {
			 
				case "defeat":
				  swal("Teşekkürler!", "En kısa sürede sizi arayacağız", "success");
				  break;
			 
		
				default:
				  swal("Teşekkürler...");
			}
		});
}
else if (yuzdedilim < 7.01  && yuzdedilim < 10 ) {
swal("%15 Bursluluk hakkı kazandınız.. Sizi aramamızı istermisiniz", {
			buttons: { 
				cancel: "Kapat", 
							defeat: "Evet arayın", 
			  },
			})
			.then((value) => {
			  switch (value) {
			 
				case "defeat":
				  swal("Teşekkürler!", "En kısa sürede sizi arayacağız", "success");
				  break;
			 
		
				default:
				  swal("Teşekkürler...");
			}
		});
}
else if (yuzdedilim < 10.01  && yuzdedilim < 15 ) {
 swal("%10 Bursluluk hakkı kazandınız.. Sizi aramamızı istermisiniz", {
			buttons: {  
				cancel: "Kapat", 
							defeat: "Evet arayın", 
			  },
			})
			.then((value) => {
			  switch (value) {
			 
				case "defeat":
				  swal("Teşekkürler!", "En kısa sürede sizi arayacağız", "success");
				  break;
			 
		
				default:
				  swal("Teşekkürler...");
			}
		});

}
else if (yuzdedilim > 15 ) {
}


//
 $.ajax({
        url: "backend.php",
        type: "post",
      dataType: 'json',

        data: {
        	turkcedogru,
        	turkceynls,
        	matematikdogru,
        	matematikynls,
        	fendogru,
        	fenynls,
        	dindogru,
        	dinynls,
        	ingilizcedogru,
        	ingilizceynls,
        	tarihdogru,
        	tarihynls,
        	
        	telefon,
        	adsoyad,
        	puan,
        	yuzdedilim


        } ,
        success: function (response) {
           // yanıtı php sayfasında alacağız                 
 
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
 
 
    });
////
 });



   /////////////////////
}); 

});



</script>
<script src="hesapla.js">  </script>


  
</body>
</html>
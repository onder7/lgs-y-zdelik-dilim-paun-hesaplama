	function temizle(){
                   document.getElementById("turkcedogru").value = 20;
		   document.getElementById("turkcebos").value = 0;
		   document.getElementById("turkceynls").value = 0;
  
                   document.getElementById("matematikdogru").value = 20;
		   document.getElementById("matematikbos").value = 0;
		   document.getElementById("matematikynls").value = 0;
 
                   document.getElementById("fendogru").value = 20;
		   document.getElementById("fenbos").value = 0;
		   document.getElementById("fenynls").value = 0;
 
                   document.getElementById("dindogru").value = 10;
		   document.getElementById("dinbos").value = 0;
		   document.getElementById("dinynls").value = 0;
                   
                   document.getElementById("ingilizcedogru").value = 10;
		   document.getElementById("ingilizcebos").value = 0;
		   document.getElementById("ingilizceynls").value = 0;

                   document.getElementById("tarihdogru").value = 10;
		   document.getElementById("tarihbos").value = 0;
		   document.getElementById("tarihynls").value = 0;

                   document.getElementById("puan").value = 0;
}
function hesaplama()
{
     dogrusayisi(0);
     dogrusayisi(1); 
     dogrusayisi(2); 
     dogrusayisi(3);
     dogrusayisi(4);
     dogrusayisi(5);

     var maxpuan = 500;
	 var turkce = 20;
	 var mat = 20;
	 var fen = 20;
	 var din = 10;
	 var ing = 10;
	 var tarih = 10;

	 turkce -= document.getElementById("turkcebos").value;
	 turkce -= document.getElementById("turkceynls").value;
	 turkce -= document.getElementById("turkceynls").value;



	 mat -= document.getElementById("matematikbos").value;
	 mat -= document.getElementById("matematikynls").value;
	 fen -= document.getElementById("fenbos").value;
	 fen -= document.getElementById("fenynls").value;
	 din -= document.getElementById("dinbos").value;
	 din -= document.getElementById("dinynls").value;
	 ing -= document.getElementById("ingilizcebos").value;
	 ing -= document.getElementById("ingilizceynls").value;
	 tarih -= document.getElementById("tarihbos").value;
	 tarih -= document.getElementById("tarihynls").value;
     if(turkce < 0)
     {
     	      swal({
  title: "İsim Soyisim yazmadınız",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})


swal({
		title: "Türkçe toplam boş ve yanlış sayısı 20 soruyu geçemez! " + turkce,
		icon: "warning",
		buttons: true,
		dangerMode: true,
		});

     }
	else if(mat < 0)
     {

swal({
		title: "Matematik toplam boş ve yanlış sayısı 20 soruyu geçemez!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
		});
     }
	else if(fen < 0)
     {



swal({
		title: "Fen Bilimleri toplam boş ve yanlış sayısı 20 soruyu geçemez!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
		});
     }
	else if( din < 0)
     {

swal({
		title: "Din Kültürü toplam boş ve yanlış sayısı 10 soruyu geçemez!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
		});

     }
	else if(ing < 0)
     {
		swal({
		title: "İngilizce toplam boş ve yanlış sayısı 10 soruyu geçemez!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
		});

     }
	else if(tarih < 0)

     {
     	       swal({
  title: "Tarih toplam boş ve yanlış sayısı 10 soruyu geçemez!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
});
     }	 
	else
	{
	   maxpuan -= (document.getElementById("turkcebos").value*3.6709) + (document.getElementById("turkceynls").value * 4.8948);

	   maxpuan -= (document.getElementById("matematikbos").value*4.9522) + (document.getElementById("matematikynls").value * 6.6031);
	   maxpuan -= (document.getElementById("fenbos").value*4.0721) + (document.getElementById("fenynls").value * 5.4296);
	   maxpuan -= (document.getElementById("dinbos").value*1.9404) + (document.getElementById("dinynls").value * 2.5873);
	   maxpuan -= (document.getElementById("ingilizcebos").value*1.6315) + (document.getElementById("ingilizceynls").value * 2.1756);
	   maxpuan -= (document.getElementById("tarihbos").value*1.6846) + (document.getElementById("tarihynls").value * 2.2463);
	 document.getElementById("puan").value = maxpuan;
	}
     


}

function dogrusayisi(a)
{

   if(a == 0)
   {
      var dogruss = 20;
      dogruss -= document.getElementById("turkcedogru").value;
	  dogruss -= document.getElementById("turkceynls").value;

	  if(dogruss >= 0 && dogruss <= 20)
		{
		   document.getElementById("turkcebos").value = dogruss;
		}
      else
      {     
       swal({
  title: "Girilen Yanlış ve Boş Sayısı Soru Sayısından Fazla! Lütfen kontrol ediniz.",
  icon: "warning",
  buttons: true,
  dangerMode: true,
});
		   document.getElementById("turkcedogru").value = 20;
		   document.getElementById("turkcebos").value = 0;
		   document.getElementById("turkceynls").value = 0;

      }	  
   }
   else if(a == 1)
   {
   var dogruss = 20;
      dogruss -= document.getElementById("matematikdogru").value;
	  dogruss -= document.getElementById("matematikynls").value;
	  if(dogruss >= 0 && dogruss <= 20)
		{
		   document.getElementById("matematikbos").value = dogruss;
		}
      else
      {
       swal({
  title: "Girilen Yanlış ve Boş Sayısı Soru Sayısından Fazla! Lütfen kontrol ediniz.",
  icon: "warning",
  buttons: true,
  dangerMode: true,
});		   document.getElementById("matematikdogru").value = 20;
		   document.getElementById("matematikbos").value = 0;
		   document.getElementById("matematikynls").value = 0;
      }	
   }
   else if(a == 2)
   {
   var dogruss = 20;
      dogruss -= document.getElementById("fendogru").value;
	  dogruss -= document.getElementById("fenynls").value;
	  if(dogruss >= 0 && dogruss <= 20)
		{
		   document.getElementById("fenbos").value = dogruss;
		}
      else
      {
       swal({
  title: "Girilen Yanlış ve Boş Sayısı Soru Sayısından Fazla! Lütfen kontrol ediniz.",
  icon: "warning",
  buttons: true,
  dangerMode: true,
});		   document.getElementById("fendogru").value = 20;
		   document.getElementById("fenbos").value = 0;
		   document.getElementById("fenynls").value = 0;
      }	
   }
   else if(a == 3)
   {
   var dogruss = 10;
      dogruss -= document.getElementById("dindogru").value;
	  dogruss -= document.getElementById("dinynls").value;
	  if(dogruss >= 0 && dogruss <= 10)
		{
		   document.getElementById("dinbos").value = dogruss;
		}
      else
      {
       swal({
  title: "Girilen Yanlış ve Boş Sayısı Soru Sayısından Fazla! Lütfen kontrol ediniz.",
  icon: "warning",
  buttons: true,
  dangerMode: true,
});		   document.getElementById("dindogru").value = 10;
		   document.getElementById("dinbos").value = 0;
		   document.getElementById("dinynls").value = 0;
      }	
   }
   else if(a == 4)
   {
   var dogruss = 10;
      dogruss -= document.getElementById("ingilizcedogru").value;
	  dogruss -= document.getElementById("ingilizceynls").value;
	  if(dogruss >= 0 && dogruss <= 10)
		{
		   document.getElementById("ingilizcebos").value = dogruss;
		}
      else
      {
       swal({
  title: "Girilen Yanlış ve Boş Sayısı Soru Sayısından Fazla! Lütfen kontrol ediniz.",
  icon: "warning",
  buttons: true,
  dangerMode: true,
});		   document.getElementById("ingilizcedogru").value = 10;
		   document.getElementById("ingilizcebos").value = 0;
		   document.getElementById("ingilizceynls").value = 0;
      }	
   }
   else if(a == 5)
   {
   var dogruss = 10;
      dogruss -= document.getElementById("tarihdogru").value;
	  dogruss -= document.getElementById("tarihynls").value;
	  if(dogruss >= 0 && dogruss <= 10)
		{
		   document.getElementById("tarihbos").value = dogruss;
		}
      else
      {
       swal({
  title: "Girilen Yanlış ve Boş Sayısı Soru Sayısından Fazla! Lütfen kontrol ediniz.",
  icon: "warning",
  buttons: true,
  dangerMode: true,
});		   document.getElementById("tarihdogru").value = 10;
		   document.getElementById("tarihbos").value = 0;
		   document.getElementById("tarihynls").value = 0;
      }	
   }
   

}
function normalcdf(X){   //HASTINGS.  MAX ERROR = .000001
	var T=1/(1+.2316419*Math.abs(X));
	var D=.3989423*Math.exp(-X*X/2);
	var Prob=D*T*(.3193815+T*(-.3565638+T*(1.781478+T*(-1.821256+T*1.330274))));
	if (X>0) {
		Prob=1-Prob
	}
	return Prob
}   

function compute() {
    Z	=	eval(document.getElementById("puan").value)
    M	=	298.87;
    SD	= 78,73;
    with (Math) {
		if (SD<0) {
			alert("The standard deviation must be nonnegative.")
		} else if (SD==0) {
		    if (Z<M){
		        Prob=0
		    } else {
			    Prob=1
			}
		} else {
			Prob=normalcdf((Z-M)/SD);
			Prob=round(100000*Prob)/100000;
		}
	}

if(document.getElementById("puan").value == "500")
{
document.getElementById("yuzdedilim").value = "%0.01";
}
else
{
Prob = 100.0*(1.0-Prob)
	Prob = round(Prob,4)
    document.getElementById("yuzdedilim").value = "%" + Prob;
}

	
}
function round(value, precision) {
    var multiplier = Math.pow(10, precision || 0);
    return Math.round(value * multiplier) / multiplier;
}
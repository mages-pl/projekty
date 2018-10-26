function Czas(){
    var data = new Date();
    var sekunda = data.getSeconds();
    var minuta = data.getMinutes();
    var godzina = data.getHours();
    
    var s = sekunda*6;
    var m = minuta*6;
    var Hm = minuta*0.5;
    if (godzina > 12) {
        h = (godzina - 12 )* 30;
      }
    else {
        h = godzina * 30;
      }
    
    var divS = document.getElementById("sekunda");
      divS.style.webkitTransform = "rotate("+ s +"deg)";
      divS.style.MozTransform = "rotate("+ s +"deg)";
      divS.style.OTransform = "rotate("+ s +"deg)";
      divS.style.msTransform = "rotate("+ s +"deg)";
    var divM = document.getElementById("minuta");
      divM.style.webkitTransform = "rotate("+ m +"deg)";
      divM.style.MozTransform = "rotate("+ m +"deg)";
      divM.style.OTransform = "rotate("+ m +"deg)";
      divM.style.msTransform = "rotate("+ m +"deg)";
    var divH = document.getElementById("godzina");
      divH.style.webkitTransform = "rotate("+ (h+Hm) +"deg)";
      divH.style.MozTransform = "rotate("+ (h+Hm) +"deg)";
      divH.style.OTransform = "rotate("+ (h+Hm) +"deg)";
      divH.style.msTransform = "rotate("+ (h+Hm) +"deg)";
    
    setTimeout(Czas, 1000);
  }  
window.onload = Czas;
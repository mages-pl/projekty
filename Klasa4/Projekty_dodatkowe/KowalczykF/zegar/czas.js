

function showTextTime() {
    const currentDate = new Date();
   
    var godzina =currentDate.getHours();
	var minuta = currentDate.getMinutes();
	var sekunda =currentDate.getSeconds();
	var dzien = currentDate.getDate()


var skundnik = document.querySelector("#sekundnik");
sekundnik.style.transform="rotateZ("+(sekunda*6)+"deg)";

var godzinnik = document.querySelector("#godzinnik");
godzinnik.style.transform="rotateZ("+(godzina*30)+"deg)";

var minutnik = document.querySelector("#minutnik");
minutnik.style.transform="rotateZ("+(minuta*6)+"deg)";



    setTimeout(function() {
        showTextTime()
    }, 1000);
}


	
	
	


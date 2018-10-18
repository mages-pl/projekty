function dzisiaj() {
	var aktualnaData = new Date;

	var godz = aktualnaData.getHours();
	if(godz<10) godz = "0"+godz;

	var min = aktualnaData.getMinutes();
	if(min<10) min = "0"+min;

	var sec = aktualnaData.getSeconds();
	if(sec<10) sec = "0"+sec;

	var rotateGodz = godz*30;
	var rotateMin = min*6;
	var rotateSec = sec*6;

	document.querySelector('#h').innerHTML = godz+" : ";
	document.querySelector('#m').innerHTML = min+" : ";
	document.querySelector('#s').innerHTML = sec;

	var wskazowkaGodzin = document.querySelector('img[id=wskazowkaGodzin]').style.transform = "rotate("+rotateGodz+"deg)";/* Autor: Wojtek Grabowski */
	var wskazowkaMinut = document.querySelector('img[id=wskazowkaMinut]').style.transform = "rotate("+rotateMin+"deg)";
	var wskazowkaSekund = document.querySelector('img[id=wskazowkaSekund]').style.transform = "rotate("+rotateSec+"deg)";	

	setTimeout("dzisiaj()", 1000);
}
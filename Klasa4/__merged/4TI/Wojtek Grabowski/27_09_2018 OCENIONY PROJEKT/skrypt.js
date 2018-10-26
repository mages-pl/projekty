document.querySelector("input[name=oblicz]").addEventListener("click", function() {
	var liczba = document.querySelector("input[name=liczba]").value;
	var upust = document.querySelector("input[name=upust]");
	var upust2 = document.querySelector("input[name=upust2]");
	var miejsce = document.getElementById("miejsce");
	if(upust2.checked==true && upust.checked==true) {
		console.log("ch1: t, ch2: t");
		var cena = 1.70;
		var wynik = liczba*cena;
		miejsce.innerHTML = "Koszt z upustem: "+wynik+" PLN";
	} else if(upust2.checked==true && upust.checked==false) {
		console.log("ch1: false, ch2: true");
		var cena = 1.90;
		var wynik = liczba*cena;
		miejsce.innerHTML = "Koszt bez upustu: "+wynik.toFixed(2)+" PLN";
	} else if(upust.checked==false && upust2.checked==false) {
		console.log("ch1: f, ch2: f");
		var cena = 2.0;
		var wynik = liczba*cena;
		miejsce.innerHTML = "Koszt bez upustu: "+wynik+" PLN";
	} else if (upust.checked==true && upust2.checked==false) {
		console.log("ch1: t, ch2: f");
		var cena = 1.80;
		var wynik = liczba*cena;
		miejsce.innerHTML = "Koszt bez upustu: "+wynik+" PLN";
	}
});
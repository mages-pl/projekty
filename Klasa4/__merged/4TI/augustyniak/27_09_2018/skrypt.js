document.querySelector("input[name=oblicz]").addEventListener("click", function() {
	var liczba = document.querySelector("input[name=liczba]").value;
	var upust = document.querySelector("input[name=upust]");
	var miejsce = document.getElementById("miejsce");
	if(liczba>0 && liczba<=50) {
		if(upust.checked==true) {
			var cena = 1.80;
			var wynik = liczba*cena;
			miejsce.innerHTML = "Koszt ogłoszeń: "+wynik+" PLN";
		} else if(upust.checked==false) {
			var cena = 2;
			var wynik = liczba*cena;
			miejsce.innerHTML = "Koszt ogłoszeń: "+wynik+" PLN";
		}
	} else if(liczba>=51) {
		if(upust.checked==true) {
			var cena = 0.80;
			var wynik = liczba*cena;
			miejsce.innerHTML = "Koszt ogłoszeń: "+wynik.toFixed(2)+" PLN";
		} else if(upust.checked==false) {
			var cena = 1;
			var wynik = liczba*cena;
			miejsce.innerHTML = "Koszt ogłoszeń: "+wynik+" PLN";
		}
	}
});
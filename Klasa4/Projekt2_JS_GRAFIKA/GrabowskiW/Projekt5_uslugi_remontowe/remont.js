document.querySelector('input[type=button').addEventListener("click", function() {
	var wartosc_1 = document.querySelector('input[name=wymiar1').value;
	var wartosc_2 = document.querySelector('input[name=wymiar2').value;
	var obliczenia = document.querySelector('#obliczenia');
	var wysokosc = 2.7;
	var cena = 8;
	var powierzchnia = (2*wartosc_1*wysokosc)+(2*wartosc_2*wysokosc);
	var koszt = cena*powierzchnia;
	obliczenia.innerHTML = "<p>Powierzchnia całkowita ścian: "+powierzchnia.toFixed(2)+" m<sup>2</sup></p><p>Koszt malowania: "+koszt.toFixed(2)+" zł</p>";
});
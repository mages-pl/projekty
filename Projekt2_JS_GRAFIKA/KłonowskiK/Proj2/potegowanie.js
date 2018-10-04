
var x = document.querySelector("input[name=x]"); // liczba 1

var y = document.querySelector("input[name=y]"); // liczba 2 (ktora jest wykladnikiem )
var wynik_f = document.querySelector("input[name=wynik]"); // wynik


// funkcja poteguj

function poteguj() {
	
   //przechwyc wartosc licznika z podanej wartosci
   var licznik = y.value.slice(0, y.value .indexOf("/"));
   //przechwyc wartosc mianownika z podanej wartosci
var mianownik = y.value.slice(y.value.indexOf("/") + 1, y.length);

   // jezeli w wykladniku znalezono slash (ulamek)
   if (y.value.indexOf("/") > 0) {
       

       var wynik = (Math.pow(parseFloat(x.value), (licznik / mianownik))); // funkcja potegowania (parameter 1 podstawa, paramter2 wykladnik)
       // to licz to jako ulamek czyli wykladnik dziel

   } else {

       var wynik = (Math.pow(parseFloat(x.value), (y.value))); // funkcja potegowania (parameter 1 podstawa, paramter2 wykladnik)

       
       // jesli nie to licz standradowo

   }

   //alert(licznik + " oraz " + mianownik);

   wynik_f.value = wynik.toFixed(2);
}




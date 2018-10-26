function silnia(n)
 {
 if(n==0) return 1;
 return n * silnia(n-1);
 }
 function oblicz()
 {
 var n = eval(document.formularz.n.value);
 document.formularz.wynik.value = silnia(n);
 }


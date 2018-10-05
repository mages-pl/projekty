
 function silnia(n)
 {
 if(n==0) return 1;
 return n * silnia(n-1); //4 3*2
 }
 function oblicz()
 {
 var n = eval(document.f1.n.value);
 document.f1.wynik.value = silnia(n);
 }

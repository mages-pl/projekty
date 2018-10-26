/*function silnia(n)
 {
 if(n==0) return 1;
 return n * silnia(n-1);
 }
 */
 function oblicz()
 {
var wynik = 1; 
 var x = document.querySelector("input[name=n]");
 var wynik_f = document.querySelector("input[name=wynik]");
 
 
 if(x.value >= 0) { 
  
  var i = 1;
  while(i<=x.value)  {
	  
wynik = i*wynik;
	 	  
	  i++;
  }
  
  
  alert(wynik);
  wynik=1;
   
 }  else { 
 alert("Wpisz wartosc wieksza lub rowna 0");
 } 
 
 }


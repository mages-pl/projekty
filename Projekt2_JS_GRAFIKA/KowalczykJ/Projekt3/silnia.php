<!doctype html>
<html> 
  <head> 
  <script language=javascript> 
    function silnia(n) 
    { 
      if(n==0) return 1; 
      return n * silnia(n-1); 
    } 
    function oblicz() 
    { 
      var n = eval(document.f1.n.value);   
      document.f1.wynik.value = silnia(n); 
    } 
  </script> 
  </head> 
  <body> 
  <h1 align=center>Silnia</h1> 
  <form name=f1> 
    <center> 
    <p>Podaj liczbę naturalną</p>
: <br> 
    <input type=text size=10 name=n> <br><br> 
    <input type=button  
           value=Oblicz onClick=oblicz()> <br><br> 
    Silnia: <br> 
    <input type=text size=20 name=wynik> <br> 
    </center> 
  </form> 
  </body> 
</html> 
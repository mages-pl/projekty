var a = document.silnia; // ".silnia" - nazwa formularza
function silnia(n) {
	if(n==0 || n==1) {
		return 1;
	}
	var wynik = n*silnia(n-1);
	return wynik; 
} 
function obl() {
	var n = eval(a.n.value);   
	a.wynik.value = silnia(n); 
} 
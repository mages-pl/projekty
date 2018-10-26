window.onload=init;
function init(){
	
	alert('das');
var a = document.silnia; // ".silnia" - nazwa formularza

function silnia(n) {

	if(n==0 || n==1) {
		return 1;
	}
	var wynik = n*silnia(n-1);
	return wynik; 
} 
function obl() {
		if(n>0){
	
	
	var n = eval(a.n.value);   
	a.wynik.value = silnia(n); 
	
	
	
	
}else{
	var a = document.querySelector("#divek");
	a.innerHTML = 'Wpisz liczbę dodatnią';}


} 

}






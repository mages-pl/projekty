/*
Prosty skrypt losowania z tablicy indeksu reprezentującego ucznia
*/


function losowanie() {
    var uczniowie = [
        'Ł. Augustyniak',
        'E. Cierniak',
        'W. Grabowski',
        'K. Kłonowski',
        'Knapiński',
        'P. Korylak',
        'J. Kowalczyk',
        'P. Latoszewski',
        'J. Muskała',
        'B. Niewiadomski',
        'N. Panasiuk',
        'A. Połczyński',
        'T. Socha',

    ];


    /* 
    Nazwa właściwości	Opis
status	status połączenia (np 200, 404, 301, 500)
statusText	status w formie tekstowej
timeout	Jak długo połączenie ma czekać na odpowiedź
responseURL	adres odpowiedzi
responseType	Typ odpowiedzi
responseText	treść odpowiedzi
readyState	stan połączenia
    */
    var d = new XMLHttpRequest();

    //console.log(d);

    var xmlhttp = new XMLHttpRequest();  // nawiązanie połączenia asynchronicznego
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) { // stan połączenia 
            var myObj = JSON.parse(this.responseText);
            console.log("Json parsed data is: " + JSON.stringify(myObj.pytania[1].pytanie));
        }
    };

    /*
    Wartość readyState	Opis
    0	połączenie nie nawiązane
    1	połączenie nawiązane
    2	żądanie odebrane
    3	przetwarzanie
    4	dane zwrócone i gotowe do użycia
        */

    //typ połączenia, url, czy połączenie asynchroniczne

    xmlhttp.open("GET", "data.json", true);

    // wysyłamy połączenie
    xmlhttp.send();



    //console.log("odpowiedz " + xmlhttp.response);

    var randNumber = Math.floor(Math.random() * uczniowie.length);
    document.querySelector("#uczen").innerHTML = uczniowie[randNumber];
}
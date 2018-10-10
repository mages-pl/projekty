/*
Prosty skrypt losowania z tablicy indeksu reprezentującego ucznia
*/
var myObj;
var x;
var uczniowie = [];
var level_status;

var level = [
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,
    1,


]
var punkty = [
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
];

var randNumber;
function getJSONFile() {

    var xmlhttp = new XMLHttpRequest();  // nawiązanie połączenia asynchronicznego
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) { // stan połączenia 
            myObj = JSON.parse(this.responseText);

            //console.log("Json parsed data is: " + JSON.stringify(myObj.pytania[x].pytanie));
            document.querySelector('#pytanie').innerHTML = "<h2>" + (myObj.pytania[x].pytanie) + "</h2>";
            document.querySelector('#odp1').innerHTML = "<b>A:</b> " + (myObj.pytania[x].odp1);
            document.querySelector('#odp2').innerHTML = "<b>B:</b> " + (myObj.pytania[x].odp2);
            document.querySelector('#odp3').innerHTML = "<b>C:</b> " + (myObj.pytania[x].odp3);
            document.querySelector('#odp4').innerHTML = "<b>D:</b> " + (myObj.pytania[x].odp4);
        }
    };

    xmlhttp.open("GET", "data.json", true);

    // wysyłamy połączenie
    xmlhttp.send();

}

window.onload = initObjects;

function nextLevel(level) {

    var nextLevel = parseInt((level) * 10 * Math.PI / 2);

    //alert(level);
    return nextLevel;
}

function levelUp(uczen, level, punkty) {

    if (punkty >= ((level) * 10 * Math.PI / 2)) {
        alert(uczniowie[uczen] + " Level UP!");
        level_status = true;
    }
    else {
        level_status = false;
    }
    return level_status;
}
function initObjects() {

    losowanie();

    var odpowiedz = document.querySelectorAll('input[type=radio]');



    for (var j = 0; j < odpowiedz.length; j++) {
        odpowiedz[j].addEventListener("click", function () {
            odpowiadanie(this);
        });
    }
}
// Sprawdzamy odpowiedź
function odpowiadanie(object) {

    //alert("wybrales odpowiedz" + object.value);

    getJSONFile();

    if (object.value == myObj.pytania[x].odp) {
        alert("Wybrales " + object.value + " jest to odpowiedz poprawna " + myObj.pytania[x].odp);
        object.classList.add("success");

        punkty[randNumber] = punkty[randNumber] + 10;
        levelUp(randNumber, level[randNumber], punkty[randNumber]);
        if (level_status == true) {
            level[randNumber] = level[randNumber] + 1;
        }

        console.log(punkty[randNumber]);
        document.querySelector("#uczen").innerHTML = uczniowie[randNumber] + " <mark>LEVEL: " + level[randNumber] + "</mark> <i class='material-icons'>star_border</i > Punkty: " + punkty[randNumber] + " / " + nextLevel(level[randNumber]) + " <progress value='" + punkty[randNumber] + "' max='" + nextLevel(level[randNumber]) + "'></progress></progress>";
    } else {
        alert("Wybrales " + object.value + " jest to odpowiedz niepoprawna, popranwna odp " + myObj.pytania[x].odp);
        object.classList.add("bad");
        punkty[randNumber] = punkty[randNumber] - 5;
        document.querySelector("#uczen").innerHTML = uczniowie[randNumber] + " <mark>LEVEL: " + level[randNumber] + "</mark> <i class='material-icons'>star_border</i > Punkty: " + punkty[randNumber] + ' / ' + nextLevel(level[randNumber]) + " <progress value='" + punkty[randNumber] + "' max='" + nextLevel(level[randNumber]) + "'></progress></progress>";
    }
    showStatystyki();

}


// Losujemy które pytanie ma zadac

function losujPytanie() {

    x = Math.floor((Math.random()) * 37);
    return x;
    console.log(x);
}

function resetChoice() {
    var odpowiedz = document.querySelectorAll('input[type=radio]');
    var labele_odpowiedzi = document.querySelectorAll('label');


    for (var j = 0; j < odpowiedz.length; j++) {
        odpowiedz[j].classList.remove("bad");
        odpowiedz[j].classList.remove("success");
        odpowiedz[j].checked = false;
        labele_odpowiedzi[j].classList.remove('is-checked');
    }
}

// Wybieramy ucznia i pytanie dla niego
function losowanie() {

    resetChoice();

    uczniowie = [
        'Ł. Augustyniak',
        'E. Cierniak',
        'W. Grabowski',
        'K. Kłonowski',
        'J. Knapiński',
        'P. Korylak',
        'J. Kowalczyk',
        'P. Latoszewski',
        'J. Muskała',
        'B. Niewiadomski',
        'N. Panasiuk',
        'A. Połczyński',
        'T. Socha',
    ];

    losujPytanie();
    getJSONFile();

    randNumber = Math.floor(Math.random() * uczniowie.length);


    document.querySelector("#uczen").innerHTML = uczniowie[randNumber] + " <mark>LEVEL: " + level[randNumber] + " </mark> <i class='material-icons'>star_border</i > Punkty: " + punkty[randNumber] + " / " + nextLevel(level[randNumber]) + " <progress value='" + punkty[randNumber] + "' max='" + nextLevel(level[randNumber]) + "'></progress></progress>";
}
function showStatystyki() {
    var statystyka = '';
    for (var z = 0; z < uczniowie.length; z++) {
        statystyka += '<li class="mdl-list__item"><span class="mdl-list__item-primary-content"><i class="material-icons mdl-list__item-avatar">person</i>' + uczniowie[z] + "<br/> Level: " + level[z] + "<br/>Punkty " + punkty[z] + "</span></li>";
    }
    document.querySelector("#statystyki").innerHTML = statystyka;

}

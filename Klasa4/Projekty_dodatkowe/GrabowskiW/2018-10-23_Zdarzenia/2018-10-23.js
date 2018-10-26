var pobierzListe = document.querySelector('.list-group');
function EventAdd() {
	var pobierzTytul = document.querySelector('input[name=tytul_zdarzenia]').value;
	var pobierzDate = document.querySelector('input[name=data_zdarzenia]').value;
	var pobierzTresc = document.querySelector('textarea[name=tresc_zdarzenia]').value;
	var pobierzKolor = document.querySelector('#wybor').value;
	var contentEvent = '';
	if((pobierzTytul!='')&&(pobierzTresc!='')&&(pobierzDate!='')) {
	//	contentEvent = '<div class="zdarzenie">Data dodania: '+pobierzDate+'<br/>Treść zdarzenia: '+pobierzTresc+'<input type="button" onclick="removeEvent(this)" value="x"></div>';
		contentEvent = '<div class="list-group-item '+pobierzKolor+'"  onclick="removeEvent(this)"><div class="d-flex w-100 justify-content-between"><h5 class="mb-1">'+pobierzTytul+'</h5><small class="text-white">'+pobierzDate+'</small></div><p class="mb-1">'+pobierzTresc+'</p></div>';
		pobierzListe.innerHTML += contentEvent;
	//	console.log(contentEvent);
	} else {
		alert("Uzupełnij pola");
	}
}
function removeEvent(event) {
	//var listaZdarzen = ;
	var pobranyEvent = event.parentElement;
	pobranyEvent.removeChild(event);
}
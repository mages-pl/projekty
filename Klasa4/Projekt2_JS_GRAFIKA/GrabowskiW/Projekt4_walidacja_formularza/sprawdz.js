document.querySelector("input[name=login]").addEventListener("blur", function() {
	var login = document.querySelector("input[name=login").value;
	if(login.length<=4) {
		document.querySelector("input[name=login]").classList.remove("ok");
		document.querySelector("input[name=login]").classList.add("danger");
		document.querySelector("input[name=login]").placeholder = "Login jest wymagany";
	} else if(login.length>=5) {
		document.querySelector("input[name=login]").classList.remove("danger");
		document.querySelector("input[name=login]").classList.add("ok");
	}
});

document.querySelector("input[name=mail").addEventListener("blur", function() {
	var mail = document.forms["rejestracja"]["mail"].value;
	var mail_at = mail.indexOf("@");
	var mail_dot = mail.lastIndexOf(".");
	if(mail_at<1||mail_dot+2||mail_dot+2>=mail.length) {
		document.querySelector("input[name=mail]").classList.add("danger");
		document.querySelector("input[name=mail]").classList.remove("ok");
		document.querySelector("input[name=mail]").placeholder = "E-mail jest wymagany";
	}
	if(mail_at=1&&mail_dot>=1) {
		document.querySelector("input[name=mail]").classList.remove("danger");
		document.querySelector("input[name=mail]").classList.add("ok");
		console.log("x");
	}
});

document.querySelector("input[name=haslo]").addEventListener("blur", function() {
	var haslo = document.forms["rejestracja"]["haslo"]
	var password = document.forms["rejestracja"]["haslo"].value;
	if(password.length<6) {
		haslo.classList.remove("ok");
		haslo.classList.add("danger");
		document.querySelector(".warning").style.display = "inline-block";
		document.querySelector(".warning").innerHTML = "Popraw hasło, powinno mieć co najmniej <span style=\"font-weight:500;\">6</span> znaków";
	} else if(password.length>=7) {
		document.querySelector(".warning").style.display = "none";
	}
});

document.querySelector("input[name=haslo_repeat]").addEventListener("blur", function() {
	var password = document.forms["rejestracja"]["haslo"].value;
	var password_r = document.forms["rejestracja"]["haslo_repeat"].value;
	if(password==password_r) {
		document.querySelector("input[name=haslo]").classList.remove("danger");
		document.querySelector("input[name=haslo]").classList.add("ok");
		document.querySelector("input[name=haslo_repeat]").classList.remove("danger");
		document.querySelector("input[name=haslo_repeat]").classList.add("ok");
		console.log("TEST");
	} else {
		document.querySelector(".warning").style.display = "inline-block";
		document.querySelector(".warning").innerHTML = "Jedno z haseł jest <span style=\"font-weight:500;\">niepoprawne</span>";
	}
});
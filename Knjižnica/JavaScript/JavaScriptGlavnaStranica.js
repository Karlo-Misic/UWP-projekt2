//Funkcija vezana za popup,koja nam govori da se registriramo za puni pristup biblioteci,pojavljuje se nakon 10 sekundi
var element = document.getElementById("popup");
var t=setTimeout(openPopUp,10000);
function openPopUp() {
  element = document.getElementById("popup");
  element.style.visibility = "visible";
  element.style.opacity = "1";
}

//Funkcija omogućava da pristiskom na "X" maknemo popup
var close = document.getElementsByClassName("closebtn");
// var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
//

//Funkcija dobrodošli,traje 5 sekundi
function hidediv()
{
	document.getElementById("mydiv").style.visibility="hidden";
}
setTimeout("hidediv()",5000);
//

/*
var modal = document.getElementById('id02');       
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}

var modal = document.getElementById('id01');              
	window.onclick = function(event) {
		if (event.target == modal) {
 			modal.style.display = "none";
    }
  }

*/

//Funkcije koje rade nešto (sakri knjige,disable button..) pritiskom na određeni button
document.getElementsByName("registration")[0].addEventListener("click", function(){
  document.getElementsByName("login")[0].disabled = true;
});

document.getElementsByName("closeregistration")[0].addEventListener("click", function(){
  document.getElementsByName("login")[0].disabled = false;
});

document.getElementsByName("closeregistration1")[0].addEventListener("click", function(){
  document.getElementsByName("login")[0].disabled = false;
});

document.getElementsByName("login")[0].addEventListener("click", function(){
  document.getElementsByName("registration")[0].disabled = true;
});

document.getElementsByName("closelogin")[0].addEventListener("click", function(){
  document.getElementsByName("registration")[0].disabled = false;
});

document.getElementsByName("closelogin1")[0].addEventListener("click", function(){
  document.getElementsByName("registration")[0].disabled = false;
});

document.getElementsByName("registrirajSe")[0].addEventListener("click", function(){
  document.getElementsByName("registration")[0].disabled = false;
});

document.getElementsByName("registration")[0].addEventListener("click", function(){
  document.getElementsByName("sakri1")[0].style.visibility = "hidden";
  document.getElementsByName("sakri2")[0].style.visibility = "hidden";
  document.getElementsByName("sakri3")[0].style.visibility = "hidden";
});

document.getElementsByName("closeregistration")[0].addEventListener("click", function(){
  document.getElementsByName("sakri1")[0].style.visibility = "visible";
  document.getElementsByName("sakri2")[0].style.visibility = "visible";
  document.getElementsByName("sakri3")[0].style.visibility = "visible";
});

document.getElementsByName("closeregistration1")[0].addEventListener("click", function(){
  document.getElementsByName("sakri1")[0].style.visibility = "visible";
  document.getElementsByName("sakri2")[0].style.visibility = "visible";
  document.getElementsByName("sakri3")[0].style.visibility = "visible";
});

document.getElementsByName("login")[0].addEventListener("click", function(){
  document.getElementsByName("sakri1")[0].style.visibility = "hidden";
  document.getElementsByName("sakri2")[0].style.visibility = "hidden";
  document.getElementsByName("sakri3")[0].style.visibility = "hidden";
});

document.getElementsByName("closelogin")[0].addEventListener("click", function(){
  document.getElementsByName("sakri1")[0].style.visibility = "visible";
  document.getElementsByName("sakri2")[0].style.visibility = "visible";
  document.getElementsByName("sakri3")[0].style.visibility = "visible";
});

document.getElementsByName("closelogin1")[0].addEventListener("click", function(){
  document.getElementsByName("sakri1")[0].style.visibility = "visible";
  document.getElementsByName("sakri2")[0].style.visibility = "visible";
  document.getElementsByName("sakri3")[0].style.visibility = "visible";
});
//

//Pri prijavi ili registraciji razmak nije dopušten u input poljima
function keyDown(e) { 
  var e = window.event || e;
  var key = e.keyCode;
  //Razmak stisnut
   if (key == 32) { //32 broj koji označava razmak na tipkovnici
    e.preventDefault();
   }       
}
//

// prikaz lozinke u formi
const togglePasswords = document.querySelectorAll('#togglePassword, #togglePassword1');
const passwords = document.querySelectorAll('#id_password, #id_password1');

togglePasswords.forEach(function(togglePassword, index) {
    togglePassword.style.display = 'none';

    // Funkcija koja će se pozvati prilikom provjere stanja polja za unos
    function checkPassword() {
        if (passwords[index].value !== '') {
            togglePassword.style.display = 'inline-block';
        } else {
            togglePassword.style.display = 'none';
        }
    }

    // Event listener koji će se aktivirati kada korisnik počne pisati u polje za unos lozinke
    passwords[index].addEventListener('input', checkPassword);

    // Event listener koji će se aktivirati kada korisnik klikne na sliku oka
    togglePassword.addEventListener('mousedown', function (e) {
        if (e.button !== 2) { // Provjera da li je klik lijevim ili srednjim klikom, ako je lijevim ili srednjim klikom onda mijenja sliku
            e.preventDefault(); // Spriječava uobičajeno ponašanje klika (npr. fokusiranje input polja)
            // Provjera tipa input polja 
            const type = passwords[index].getAttribute('type') === 'password' ? 'text' : 'password';
            passwords[index].setAttribute('type', type);
            // Promjena slike 
            if (type === 'password') {
                togglePassword.src = "../Slike/eye1.png";
            } else {
                togglePassword.src = "../Slike/eye.png";
            }
        }
    });

    // Event listener koji će se aktivirati kada korisnik napusti polje za unos lozinke
    passwords[index].addEventListener('blur', function (e) {
        // Provjerava da li je kliknuto na sliku oka
        if (!togglePassword.contains(e.relatedTarget) && passwords[index].value === '') {
            togglePassword.style.display = 'none';
        }
    });

    // Event listener koji će spriječiti otvaranje kontekstnog izbornika pritiskom na desni klik
    togglePassword.addEventListener('contextmenu', function (e) {
        e.preventDefault();
    });

    // Poziv funkcije checkPassword za provjeru stanje polja za unos
    checkPassword();
});

//RealTime poruke popup prozor
const chatIcon = document.getElementById('chat-icon');
const messageWindow = document.getElementById('message-window');
const sendButton = document.getElementById('button');
const messageInput = document.querySelector('#message-window textarea');

function openMessageWindow() {
  messageWindow.style.bottom = '10px';
  messageWindow.style.height = '1000px';
  messageWindow.style.width = '400px';
  chatIcon.style.display = 'none';
  messageInput.focus();
}

function closeMessageWindow() {
  messageWindow.style.bottom = '-1050px';
  chatIcon.style.display = 'block';
  messageInput.value = '';
}

chatIcon.addEventListener('click', openMessageWindow);

//sendButton.addEventListener('click', closeMessageWindow);

window.addEventListener('click', (event) => {
  if (!messageWindow.contains(event.target) && event.target !== chatIcon) {
    closeMessageWindow();
  }
});
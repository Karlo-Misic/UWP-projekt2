// Razlikuje velika i mala slova
const input = document.getElementById("input");
const button = document.getElementById("button");

const search = () => {
  let unos = input.value;
  let textDiv = [...  document.querySelectorAll(
      "#text1, #text2, #text3, #text4, #text5, #text6, #text7"
    )]
  
	console.log(textDiv);
  unos = unos.replace(/[.*+?^^${}()|[\]\\]/g, "\\$&");
 
  let pattern = new RegExp(`${unos}`, "g"); //Ključan dio koji određuje da li će biti mala ili velika slova
  let listaP = textDiv.map((div) => {
    return [...div.querySelectorAll("p,h2")];
  });

  listaP.forEach((p) =>
    p.forEach(
      (p) =>
        (p.innerHTML = p.textContent.replace(
          pattern,
          (match) => `<m class="highlight">${match}</m>`
        ))
    )
  );
};
//

// Ne razlikuje velika i mala slova
const search1 = () => {
  let unos1 = input.value;
  let textDiv = [...  document.querySelectorAll(
      "#text1, #text2, #text3, #text4, #text5, #text6, #text7"
    )]
  
	console.log(textDiv);
  unos1 = unos1.replace(/[.*+?^^${}()|[\]\\]/g, "\\$&");
 
  let pattern1 = new RegExp(`${unos1}`, "gi"); //Ključan dio koji određuje da li će biti mala ili velika slova
  let listaP = textDiv.map((div) => {
    return [...div.querySelectorAll("p,h2")];
  });

  listaP.forEach((p) =>
    p.forEach(
      (p) =>
        (p.innerHTML = p.textContent.replace(
          pattern1,
          (match1) => `<m class="highlight">${match1}</m>`
        ))
    )
  );
};
//

// Funkcija koja dopušta enteru da pretražuje bez pritiska na button
document.getElementById('input')
    .addEventListener('keyup', function(event) {
        if (event.code === 'Enter')
        {           
            event.preventDefault();
            document.getElementById("button").click();          
        }
    });
//

//Funkcija check poziva auto4 "ne razlikuj" sa auto pretraživanjem
  function check(){
          var radio = document.getElementsByName("==");
          var len = radio.length

          for (i = 0; i< len; i++) {
 
            if(radio[i].checked)
            {
              document.getElementById("auto1").addEventListener("click", function(){
                input.removeEventListener("keyup",search)
                input.addEventListener("keyup",search1)               
              });
            }
          }
        }
//

//Funkcija check1 poziva auto3 "razlikuj" sa auto pretraživanjem
function check1(){
          var radio1 = document.getElementsByName("==");
          var len1 = radio1.length

          for (i = 0; i< len1; i++) {
            if (radio1[i].checked)
            {
              document.getElementById("auto1").addEventListener("click", function(){
                input.removeEventListener("keyup",search1)
               input.addEventListener("keyup",search)
            });  
           }   
          }
        }
//

//Funkcije koje znaju šta treba raditi pritiskom na određeni radio button
    document.getElementById("auto2").addEventListener("click", function(){
      input.removeEventListener("keyup",search)
      input.removeEventListener("keyup",search1)
    });

    document.getElementById("auto3").addEventListener("click", function(){
      button.addEventListener("click",search) 
      button.removeEventListener('click',search1)   
      document.getElementById("auto2").click();
    });
 
    button.addEventListener("click",search1)
    document.getElementById("auto4").click();    

    document.getElementById("auto4").addEventListener("click", function(){
      button.addEventListener("click",search1)  
      button.removeEventListener('click',search)  
      document.getElementById("auto2").click();
    });

    document.getElementsByName("next-btn")[0].addEventListener("click", function(){
      document.getElementsByName("LastPage")[0].style.visibility = "hidden";
    });

    document.getElementsByName("back-btnBackPage")[0].addEventListener("click", function(){
      document.getElementsByName("LastPage")[0].style.visibility = "visible";
    });
//
    
// Popup funkcija
var element = document.getElementById("popup");
var t=setTimeout(openPopUp,10000);
function openPopUp() {
  element = document.getElementById("popup");
  element.style.visibility = "visible";
  element.style.opacity = "1";
}
//

// Stisni X i ugasi popup
var close = document.getElementsByClassName("closebtn");
for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
//
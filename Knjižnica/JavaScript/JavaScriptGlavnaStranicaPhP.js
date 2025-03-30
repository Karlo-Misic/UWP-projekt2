//Pri prijavi pojavljuje se "DOBORDOŠLI" s imenom korisnika,nestaje za 5 sekundi
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
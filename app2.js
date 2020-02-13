var btnValider = document.getElementById("nt");
btnValider.addEventListener('click',makeRequest);
var affichage = document.getElementById("r");
var xhr = new XMLHttpRequest();


function makeRequest(e){
e.preventDefault()
let url = "auteur.php"
let Nom = document.getElementById("Nom").value
let Prenom = document.getElementById("Prenom").value
var donnee = "Nom="+ Nom +"&Prenom="+ Prenom;

  let input = monForm.getElementsByTagName("input");
  xhr.onreadystatechange = alertContent;
  xhr.open('POST',url,true);
  xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  xhr.send(donnee);
};

function alertContent(){
  if (xhr.readyState === XMLHttpRequest.DONE){
    document.getElementById("test").innerHTML=xhr.responseText;
  }
};

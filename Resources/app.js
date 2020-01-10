var btnValider = document.getElementById("trigger");
//btnValider.addEventListener('click',makeRequest);

var xhr = new XMLHttpRequest();

function makeRequest(id){
  // event.preventDefault()

  let url = "../update/" + id;
  let params="statut=1";

  xhr.onreadystatechange = alertContent;

  xhr.open('POST',url,true);
  xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  xhr.send(params);


  // let bug = document.getElementsByClassName("corps");
  // let id_html = bug.id
console.log(id);
};

function alertContent(){
  if (xhr.readyState === XMLHttpRequest.DONE){
    // document.getElementById("trigger").innerHTML=xhr.responseText;
    let nt = document.getElementById("trigger")
    nt.innerHTML="resolut";
    nt.className = "r"
    nt.onclick = ""
    nt.cursor = "preventDefault"
  }
};


/*
let url = "bug/update/"+
let up = document.getElementById("nt").value
*/

/*
  xhr.onreadystatechange = alertContent;
  xhr.open('POST',url,true);
  xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  xhr.send(up);
*/


/*
var affichage = document.getElementByClassName("span");
var xhr = new XMLHttpRequest();


function makeRequest(e){
e.preventDefault()
let url = "auteur.php"

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
*/

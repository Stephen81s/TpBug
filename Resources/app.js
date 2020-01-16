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



var checkbox = document.getElementById("checkbox");
//target.addEventListener(type, listener, [options]);
function filter (){
  }
};

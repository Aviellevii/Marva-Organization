
function send() {
  setTimeout(function () { alert("תודה! הטופס נשלח"); }, 100);
}
//open and close topnav
function myFunction(w) {
  var x;
  if (w == 1) {
    x = document.getElementById("project1");
  }
  if (w == 2) {
    x = document.getElementById("project2");
  }
  if (w == 3) {
    x = document.getElementById("project3");
  }
  if (w == 4) {
    x = document.getElementById("MahutPniya");
  }
  if (w == 5) {
    x = document.getElementById("SugSiua");
  }
  if (w == 6) {
    x = document.getElementById("hour");
  }
  if (w == 7) {
    x = document.getElementById("ole");
  }


    if (x.style.display == "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
}

var hagana1 = false;
var hagana2 = false;
var hagana3 = false;
var mispar1 = false;
var mispar2 = false;
var mispar3 = false;


function funcProject1(x) {

  if (x == "הגנה על שלום הזקן") {
    hagana1 = true;
  }
  else {
    if(x=="הכשרות והרצאות")
      mispar1=true;
      else
      mispar1=false;
    hagana1 = false;
  }
  hagana();
  mispar();
  document.getElementById("_project1").innerHTML = x;
  document.getElementById("proj").value = x;
  myFunction(1);
}

function funcProject2(x) {

  if (x == "הגנה על שלום הזקן") {
    hagana2 = true;
  }
  else {
    if(x=="הכשרות והרצאות")
      mispar2=true;
      else
      mispar2=false;
    hagana2 = false;
  }
  hagana();
  mispar();
  document.getElementById("_project2").innerHTML = x;
  document.getElementById("proj1").value = x;
  myFunction(2);
}
function funcProject3(x) {
  if (x == "הגנה על שלום הזקן") {
    hagana3 = true;
  }
  else {
    if(x=="הכשרות והרצאות")
      mispar3=true;
      else
      mispar3=false;
    hagana3 = false;
  }
  hagana();
  mispar();
  document.getElementById("_project3").innerHTML = x;
  document.getElementById("proj2").value = x;
  myFunction(3);
}

function funcMahutPniya(x) {
  document.getElementById("_MahutPniya").innerHTML = x;
  document.getElementById("mahut").value = x;

  myFunction(4);
}

function funcSugSiua(x) {
  document.getElementById("_SugSiua").innerHTML = x;
  document.getElementById("siua").value = x;

  myFunction(5);
}
function funcHour(x) {
  document.getElementById("_hour").innerHTML = x;
  document.getElementById("Hour").value = x;

  myFunction(6);
}

function funcOle(x) {
  document.getElementById("_ole").innerHTML = x;
  document.getElementById("Ole").value = x;


  myFunction(7);
}

function funch1(x) {
  document.getElementById("_sugHitalelut").innerHTML = x;
  document.getElementById("sug_hitalelut").value = x;
}

function funch2(x) {
  document.getElementById("_mitalel").innerHTML = x;
  document.getElementById("Mitalel").value = x;
}
function funch3(x){
  document.getElementById("_yesha").innerHTML = x;
  document.getElementById("Yesha").value = x;
}

function hagana() {
  if (hagana1 || hagana2 || hagana3) {

    sugHitalelut.style.display = "block";
    mitalel.style.display = "block";
    yesha.style.display="block";
  }
  else {
    sugHitalelut.style.display = "none";
    mitalel.style.display = "none";
    yesha.style.display="none";
  }
}
function mispar(){
  if(mispar1||mispar2||mispar3)
    mis.style.display="block";

  else
   mis.style.display="none";

}

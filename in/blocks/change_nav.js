


var title = document.title;
if(title == "Admin - Hlavní stránka"){
  document.getElementById("hls").style.textDecoration = "underline";
}
if(title == "Admin - Aktuality"){
  document.getElementById("akt").style.textDecoration = "underline";
  document.getElementById("akt_dd1").style.display = "block";
  document.getElementById("akt_dd2").style.display = "block";
}
if(title == "Admin - Akce"){
  document.getElementById("akc").style.textDecoration = "underline";
}
if(title == "Admin - SV"){
  document.getElementById("sv").style.textDecoration = "underline";
}
if(title == "Admin - Ostatní"){
  document.getElementById("ost").style.textDecoration = "underline";
}

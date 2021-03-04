
let ValFrm = document.getElementById("Valider");
let Nom = document.getElementById("FullName");
let Pays =  document.getElementById("Country");
let Addresse =  document.getElementById("StreetAddress");
let Ville =  document.getElementById("City");
let Region =  document.getElementById("Region");
let CodePostal =  document.getElementById("PostalCode");
let Tel =  document.getElementById("Mobile");



ValFrm.addEventListener("click", function(e) {
//erreur nom
if (Nom.value==""){
    Nom.classList.add("errorBG");
    document.getElementById("ErreurNom").innerHTML="Ce champ est obligatoire !";
}
else {
    Nom.classList.remove("errorBG");
    document.getElementById("ErreurNom").innerHTML="";
}

//erreur Pays
if (Pays.value==""){
    Pays.classList.add("errorBG");
    document.getElementById("ErreurPays").innerHTML="Ce champ est obligatoire !";
}
else {
    Pays.classList.remove("errorBG");
    document.getElementById("ErreurPays").innerHTML="";
}

//erreur Addresse
if (Addresse.value==""){
    Addresse.classList.add("errorBG");
    document.getElementById("ErreurAddresse").innerHTML="Ce champ est obligatoire !";
}
else {
    Addresse.classList.remove("errorBG");
    document.getElementById("ErreurAddresse").innerHTML="";
}

//erreur Ville
if (Ville.value==""){
    Ville.classList.add("errorBG");
    document.getElementById("ErreurVille").innerHTML="Ce champ est obligatoire !";
}
else {
    Ville.classList.remove("errorBG");
    document.getElementById("ErreurVille").innerHTML="";
}

//erreur Region
if (Region.value==""){
    Region.classList.add("errorBG");
    document.getElementById("ErreurRegion").innerHTML="Ce champ est obligatoire !";
}
else {
    Region.classList.remove("errorBG");
    document.getElementById("ErreurRegion").innerHTML="";
}

//erreur Code Postal
if (CodePostal.value==""){
    CodePostal.classList.add("errorBG");
    document.getElementById("ErreurCodePostal").innerHTML="Ce champ est obligatoire !";
}
else {
    CodePostal.classList.remove("errorBG");
    document.getElementById("ErreurCodePostal").innerHTML="";
}

//erreur Mobile
if (Tel.value==""){
    Tel.classList.add("errorBG");
    document.getElementById("ErreurMobile").innerHTML="Ce champ est obligatoire !";
}
else {
    Tel.classList.remove("errorBG");
    document.getElementById("ErreurMobile").innerHTML="";
}
});

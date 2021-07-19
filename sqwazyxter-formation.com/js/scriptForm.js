

/*ecouteur*/


/*let valFrm2 = document.getElementById("btnVal");
valFrm2.addEventListener("click",function(e){
    console.log(e);*/


    
/*frm
let erreurNom;
let erreurPrenom;
let erreurTel;
let erreurMail;

let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let tel = document.getElementById('tel');
let mail = document.getElementById('mail');





if (mail.value==""){
        
    erreurMail = "Veuiller renseigner votre adresse email"
    mail.classList.add("errorEmpty");
            

}else{
    mail.classList.remove("errorEmpty");
    document.getElementById("erreurMail").classList.add("off");

}

if (tel.value==""){
        
    erreurTel = "veuiller renseigner votre n° de téléphone"
    tel.classList.add("errorEmpty");

}else{
    tel.classList.remove("errorEmpty");
    document.getElementById("erreurTel").classList.add("off");

}
if (prenom.value==""){
        
    erreurPrenom = "veuiller renseigner votre prénom"
    prenom.classList.add("errorEmpty");
   


}else{
    prenom.classList.remove("errorEmpty");
    document.getElementById("erreurPrenom").classList.add("off");

    
}
if (nom.value==""){
        
    erreurNom = "veuiller renseigner votre nom"
    nom.classList.add("errorEmpty");

}else{
    nom.classList.remove("errorEmpty");
    document.getElementById("erreurNom").classList.add("off");



}


















if (erreurMail) {
    document.getElementById("erreurMail").innerHTML = erreurMail;

}
    if (erreurTel) {
        document.getElementById("erreurTel").innerHTML = erreurTel;
    
    
    }

    if (erreurPrenom) {
        document.getElementById("erreurPrenom").innerHTML = erreurPrenom;
    
    
    }

    if (erreurNom) {
        document.getElementById("erreurNom").innerHTML = erreurNom;
    
    
    }


    if(nom.value!=""&prenom.value!=""&tel.value!=""&mail.value!=""){
        alert("formulaire envoyé GG booooooooyyyyyyyyyyyy")
    }



   




    
    
});



let removeError = document.getElementById("frmRdv")
removeError.addEventListener("keydown",function(k){
    console.log(k);

let erreurNom;
let erreurPrenom;
let erreurTel;
let erreurMail;

let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let tel = document.getElementById('tel');
let mail = document.getElementById('mail');


if(nom.value!=""){
    document.getElementById("erreurNom").classList.add("off");
    nom.classList.remove("errorEmpty");

}else{
    document.getElementById("erreurNom").classList.remove("off");
    nom.classList.add("errorEmpty");
}
if(prenom.value!=""){
    document.getElementById("erreurPrenom").classList.add("off");
    prenom.classList.remove("errorEmpty");

}if(tel.value!=""){
    document.getElementById("erreurTel").classList.add("off");
    tel.classList.remove("errorEmpty");

}
if(mail.value!=""){
    document.getElementById("erreurMail").classList.add("off");
    mail.classList.remove("errorEmpty");

}
























});
*/
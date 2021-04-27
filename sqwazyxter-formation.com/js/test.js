/*let semaine = [11,12,13,14,15,16,17]; //créer un tableau
    let nbrtab = semaine.length; //scanne le tableau
    let ligne = document.getElementById("ligne"); //pointeur sur id
    let cels = ligne.cells; //récupere toutes les colonnes
    let nbrcels = cels.length; //compte le no e 7 fois
    alert(i); 
    for(j=0;j){ //reste bloqué ?
    console.log(j);
    }
    
    }
    
    /*
    const date = new Date(); //ne change pas
    console.log (Date)
    const jour = date.getDate();
    console.log(jour);
    */
    
    /*var date = 0;
    
    function {
    date = date+1; 
    } 
    
    do {
    date= date+ 1;
    date = result + i;
    } while (i < 5);*/
    
    /*let mois = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"]
    function AfficherMois() {
        let selectedM = document.getElementById('selectedM');
        let index = selectedM.selectedIndex;
        let titreh1 = document.getElementById("titreh1").innerHTML =index;
        titreh1.innerHTML = selectedM[index].innerHTML;
    }*/

    /*let valFrm = document.getElementById("valFrm");
    valFrm.addEventListener("click",function(e){
        console.log(e);
        let nom = document.getElementById("nomFrm");
        let prenom = document.getElementById("prenomFrm");
        let civ = document.getElementById('civFrm');
        let tel = document.getElementById('telFrm');
        let visite = document.getElementById('visiteFrm');
        rdv(civ,nom,prenom,tel,visite);
    } );
    function rdv(civ,nom,prenom,tel,visite) {
        let civM = civ.value;
        let nomM = nom.value;
        let prenomM = prenom.value;
        let telM = tel.value;
        let visiteM = visite.value;
        // test d'affichage
        //alert("Voici mes coordonnées : "+nomM+" "+prenomM);
        
        //erreur civilité
        if (civM=="Choisir civilité"){
            civ.classList.add("errorBG");
        }
        else{
            civ.classList.remove("errorBG");
        }
        //erreur nom
        if (nomM==""){
            nom.classList.add("errorBG");
            nom.parentNode.children[1].classList.remove("off");
        }
        else {
            nom.classList.remove("errorBG");
            nom.parentNode.children[1].classList.add("off");
        }
        //erreur prenom
        if (prenomM==""){
            prenom.classList.add("errorBG");
            prenom.parentNode.children[1].classList.remove("off");
        }
        else {
            prenom.classList.remove("errorBG");
            prenom.parentNode.children[1].classList.add("off");
        }
        //erreur tel
        if (telM==""){
            tel.classList.add("errorBG");
            tel.parentNode.children[1].classList.remove("off");
        }
        else {
            tel.classList.remove("errorBG");
            tel.parentNode.children[1].classList.add("off");
        }
        //erreur visite
        if (visiteM=="Raison de la visite"){
            visite.classList.add("errorBG");
        }
        else{
            visite.classList.remove("errorBG");
        }
    }*/
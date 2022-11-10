//vérification de saisie
let submit = document.getElementById("submit");
submit.addEventListener("submit", function (inscription) {
    let Nom = document.getElementById("Nom");
    if (Nom.value.trim() == "") {
        let erreur = document.getElementById("erreur");
        erreur.innerHTML = "champ obligatoire";
        setTimeout(function(){
            erreur.innerHTML = "";
        }, 1500);
        erreur.style.color = "red";
        inscription.preventDefault();
    }
    else if(Nom.value.match(mailformat)) {
        erreur.innerHTML = "";
    }

    let Prenom = document.getElementById("Prenom");
    if (Nom.value.trim() == "") {
        let erreur = document.getElementById("erreur1");
        erreur1.innerHTML = "champ obligatoire";
        setTimeout(function(){
            erreur1.innerHTML = "";
        }, 1500);
        erreur1.style.color = "red";
        inscription.preventDefault();
    }
    else if(Prenom.value.match(mailformat)) {
        erreur1.innerHTML = "";
    }

    let Email = document.getElementById("Email");
    let mailformat = /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/;
    if (Email.value.trim() == "") {
        let erreur = document.getElementById("erreur2");
        erreur2.innerHTML = "champ obligatoire";
        setTimeout(function(){
            erreur2.innerHTML = "";
        }, 1500);
        erreur2.style.color = "red";
        inscription.preventDefault();
    }
    else if (Email.value.match(mailformat)) {
        erreur2.innerHTML = "";
    }
    else {
        erreur2.innerHTML = "Email invalide";
        erreur2.style.color = "red";
    }

    let Role = document.getElementById("Role");
    if (Role.value.trim() == "") {
        let erreur3 = document.getElementById("erreur3");
        erreur3.innerHTML = "champ obligatoire";
        setTimeout(function(){
            erreur3.innerHTML = "";
        }, 1500);
        erreur3.style.color = "red";
        inscription.preventDefault();
    }
    else if(Role.value.match(mailformat)) {
        erreur3.innerHTML = "";
    }

    let password = document.getElementById("password");
    if (password.value.trim() == "") {
        let erreur4 = document.getElementById("erreur4");
        erreur4.innerHTML = "champ obligatoire";
        setTimeout(function(){
            erreur4.innerHTML = "";
        }, 1500);
        erreur4.style.color = "red";
        inscription.preventDefault();
    }
    else{(password.value.match(mailformat)) 
        erreur4.innerHTML = "";
    }

    let password1 = document.getElementById("password1");
    if (password1.value.trim() == "") {
        let erreur5 = document.getElementById("erreur5");
        erreur5.innerHTML = "champ obligatoire";
        setTimeout(function(){
            erreur5.innerHTML = "";
        }, 1500);
        erreur5.style.color = "red";
        inscription.preventDefault();
    }
    else{(password1.value.match(mailformat)) 
        erreur5.innerHTML = "";
    }

});
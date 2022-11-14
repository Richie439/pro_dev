//affichage button eye

// const input=document.getElementById("password")

// const oeil=document.getElementById("oeil")
// oeil.addEventListener("click", ()=>{
//     console.log("click");
//     input.setAttribute("type", "text")
// })
// const oeil1=document.getElementById("oeil1")
// oeil1.addEventListener("click", ()=>{
//     console.log("click");
//     input.setAttribute("type", "password")
// })


//vérification de saisie
let submit = document.getElementById("submit");
submit.addEventListener("submit", function (ft) {
    let email = document.getElementById("email");
    let mailformat = /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/;
    if (email.value.trim() == "") {
        let erreur2 = document.getElementById("erreur2");
        erreur2.innerHTML = "champ obligatoire";
        erreur2.style.color = "red";
        setTimeout(function(){
            erreur2.innerHTML = "";
        }, 1500);
        ft.preventDefault();
    }
    else if (email.value.match(mailformat)) {
        erreur2.innerHTML = "";
    }
    else {
        erreur2.innerHTML = "Email invalide";
        erreur2.style.color = "red";
    }

    let nom = document.getElementById("nom");
    if (nom.value.trim() == "") {
        let erreur = document.getElementById("erreur");
        erreur.innerHTML = "champ obligatoire";
        erreur.style.color = "red";
        setTimeout(function(){
            erreur.innerHTML = "";
        }, 1500);
        ft.preventDefault();
    }
    else{(password.value.match(mailformat)) 
        erreur.innerHTML = "";
    }
    
    let prenom = document.getElementById("prenom");
    if (prenom.value.trim() == "") {
        let erreur1 = document.getElementById("erreur1");
        erreur1.innerHTML = "champ obligatoire";
        erreur1.style.color = "red";
        setTimeout(function(){
            erreur1.innerHTML = "";
        }, 1500);
        ft.preventDefault();
    }
    else{(prenom.value.match(mailformat)) 
        erreur1.innerHTML = "";
    }
    
})










// //

// // vérification des saisie
// const emailInput = document.querySelector('#email');
// const passwordInput = document.querySelector('#password');
// form.addEventListener('submit', (event)=>{

//     validateForm();
//     console.log(isFormValid());
//     if(isFormValid()==true){
//         form.submit();
//      }else {
//          event.preventDefault();
//      }

// });

// function isFormValid(){
//     const inputContainers = form.querySelectorAll('.input-control');
//     let result = true;
//     inputContainers.forEach((container)=>{
//         if(container.classList.contains('error')){
//             result = false;
//         }
//     });
//     return result;
// }

// function validateForm() {


//     //EMAIL
//     if(emailInput.value.trim()==''){
//         setError(emailInput, 'ce champ est requis');
//     }else if(isEmailValid(emailInput.value)){
//         setSuccess(emailInput);
//     }else{
//         setError(emailInput, 'Provide valid email address');
//     }

//     //PASSWORD
//     if(passwordInput.value.trim()==''){
//         setError(passwordInput, 'ce champ est requis');
//     }else if(passwordInput.value.trim().length <6 || passwordInput.value.trim().length >20){
//         setError(passwordInput, 'Password doit avoir 6 caractére.');
//     }else {
//         setSuccess(passwordInput);
//     }

// }

// function setError(element, errorMessage) {
//     const parent = element.parentElement;
//     if(parent.classList.contains('success')){
//         parent.classList.remove('success');
//     }
//     parent.classList.add('error');
//     const paragraph = parent.querySelector('p');
//     paragraph.textContent = errorMessage;
// }

// function setSuccess(element){
//     const parent = element.parentElement;
//     if(parent.classList.contains('error')){
//         parent.classList.remove('error');
//     }
//     parent.classList.add('success');
// }

// function isEmailValid(email){
//     const reg =/^(([^<>()[].,;:\s@"]+(.[^<>()[].,;:\s@"]+)*)|(".+"))@(([^<>()[].,;:\s@"]+.)+[^<>()[].,;:\s@"]{2,})$/i;

//     return reg.test(email);
// }




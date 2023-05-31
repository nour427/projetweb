
function acceptCookies() {
    // Get the checkbox element
    var acceptCookiesCheckbox = document.getElementById("accepter2");

    // Set the cookie if the checkbox is checked
    if (acceptCookiesCheckbox.checked) {
        document.cookie = "acceptCookies=true; path=/; expires=Fri, 31 Dec 9999 23:59:59 GMT";
    } else {
        document.cookie = "acceptCookies=false; path=/; expires=Fri, 31 Dec 9999 23:59:59 GMT";
    }

    /*
    // Check if the user has already accepted cookies
    if (document.cookie.indexOf("acceptCookies=true") !== -1) {
        console.log("Cookies have been accepted.");
        // Check the checkbox if the user has already accepted cookies
        document.getElementById("accepter2").checked = true;
    } else {
        console.log("Cookies have not been accepted.");
    }   */
}

function validateForm() {


    // Récupérer les éléments du formulaire


//const form = document.querySelector('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
<<<<<<< HEAD
const email = document.getElementById('email');
=======
>>>>>>> 604ee3df1d7d7f3d3ddefbd07b5ddbd224bfcf46

const matricule = document.getElementById('matricule');
const password1 = document.getElementById('motdepasse');
const password2 = document.getElementById('confirmermotdepasse');
const accepterCheckbox = document.getElementById('accepter');



    // Valider les champs du formulaire


<<<<<<< HEAD
    if (!(email.value.endsWith("@insat.ucar.tn") || email.value.endsWith("@insat.u-carthage.tn"))) {
        alert('Veuillez entrer votre adresse mail institutionnel ! \n (qui se termine par "@insat.ucar.tn" ou "@insat.u-carthage.tn")');
        email.focus();
        return false;
    }


=======
>>>>>>> 604ee3df1d7d7f3d3ddefbd07b5ddbd224bfcf46

    if (!(/^\d{6}$/.test(matricule.value))) {
        alert('La matricule doit être un numéro de 6 chiffres !"');
        matricule.focus();
        return false;
    }



    if (password1.value !== password2.value) {
        alert('Les mots de passe ne correspondent pas.');
        password1.value = '';
        password2.value = '';
        password1.focus();
        return false;
    }



    // si tous les champs sont valides, envoyer le formulaire
    acceptCookies();
    return true;
}

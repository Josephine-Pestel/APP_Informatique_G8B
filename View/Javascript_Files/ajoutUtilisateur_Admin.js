

function checkForm_Admin() {
    let username = document.forms["formulaire_ajout"]["prenom"].value;
    let name = document.forms["formulaire_ajout"]["nom"].value;
    let password = document.forms["formulaire_ajout"]["mdp"].value;
    let confirm_password = document.forms["formulaire_ajout"]["confirmation_mdp"].value;
    let email = document.forms["formulaire_ajout"]["email"].value;
    checkUsername_Admin(username);
    checkName_Admin(name);
    checkPassword_Admin(password,confirm_password);
    ValidateEmail_Admin(email);

}

//Fonction trim :nettoie une chaine de caractères au début et à la fin,
// en supprimant les espaces, les tabulations et les retours à la ligne qui se trouvent aux extrémités de la chaine de caractères
function checkUsername_Admin(username) {
    return username.trim() !=="";
}

function checkName_Admin(name) {
    return name.trim() !=="";
}

function checkPassword_Admin(password, confirm_password) {
    if (password != confirm_password) {
        alert("Les mots de passe ne sont pas identiques !");
        window.location.reload();
    }
}

function ValidateEmail_Admin(mail)
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
    {
        return (true)
    }
    alert("Vous avez rentré une adresse email invalide !")
    return (false)
}
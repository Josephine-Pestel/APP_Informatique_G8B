

function checkForm() {
    let username = document.forms["formulaire_inscription"]["prenom"].value;
    let name = document.forms["formulaire_inscription"]["nom"].value;
    let password = document.forms["formulaire_inscription"]["mdp"].value;
    let confirm_password = document.forms["formulaire_inscription"]["confirmation_mdp"].value;
    let email = document.forms["formulaire_inscription"]["email"].value;
    checkUsername(username);
    checkName(name);
    checkPassword(password,confirm_password);
    ValidateEmail(email);

}

//Fonction trim :nettoie une chaine de caractères au début et à la fin,
// en supprimant les espaces, les tabulations et les retours à la ligne qui se trouvent aux extrémités de la chaine de caractères
function checkUsername(username) {
    return username.trim() !=="";
}

function checkName(name) {
    return name.trim() !=="";
}

function checkPassword(password, confirm_password) {
    if (password != confirm_password) {
        alert("Les mots de passe ne sont pas identiques !");
        window.location.reload();
    }
}

function ValidateEmail(mail)
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
    {
        return (true)
    }
    alert("Vous avez rentré une adresse email invalide !")
    return (false)
}
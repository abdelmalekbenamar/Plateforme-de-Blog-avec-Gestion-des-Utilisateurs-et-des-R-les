const supprimeruser = document.querySelectorAll(".supprimeruser");

const userDeleteForm = document.querySelector(".userDeleteForm");

const idUserDelForm = document.querySelector(".idUserDelForm");

const annulerSupprUtilisateur = document.querySelector(".annulerSupprUtilisateur");

supprimeruser.forEach(el => {
    el.addEventListener("click", () => {
        let id = el.parentNode.parentNode.id;
        idUserDelForm.value = id;
        userDeleteForm.hidden = false;
    })
});

annulerSupprUtilisateur.addEventListener("click", (e) => {
    e.preventDefault();
    userDeleteForm.hidden = true;
});
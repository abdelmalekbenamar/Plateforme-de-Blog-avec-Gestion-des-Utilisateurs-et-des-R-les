const formModify = document.querySelector(".commentaireModifyForm");
const formDelete = document.querySelector(".commentDeleteForm");

const modifyButtons = document.querySelectorAll(".modifierCommentaire");
const deleteButtons = document.querySelectorAll(".supprimerCommentaire");

const modifyFormIdInput = document.querySelector(".idCommentaireModifyForm");
const modifyFromCommentInput = document.querySelector(".commentaireAAfficher");

const idCommentaireASupprimee = document.querySelector(".idCommentDelForm");

const annulerModif = document.querySelector(".annulerModifCommentaire");
const annulSupp = document.querySelector(".annulerSupprArticle");

modifyButtons.forEach(el => {
    el.addEventListener("click", () => {
        let idComment = el.parentNode.parentNode.id;
        let comment = el.parentNode.previousElementSibling.value;
        modifyFromCommentInput.value = comment;
        modifyFormIdInput.value = idComment;
        formModify.hidden = false;
    });
});

deleteButtons.forEach(el => {
    el.addEventListener("click", () => {
        let idComment = el.parentNode.parentNode.id;
        idCommentaireASupprimee.value = idComment;
        formDelete.hidden = false;
        console.log(idComment);
    });
});

annulerModif.addEventListener("click", (e) => {
    e.preventDefault();
    formModify.hidden = true;
});

annulSupp.addEventListener("click", (e) => {
    e.preventDefault();
    formDelete.hidden = true;
});
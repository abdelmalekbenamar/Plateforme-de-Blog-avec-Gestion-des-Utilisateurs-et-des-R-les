const formModify = document.querySelector(".commentaireModifyForm");
const formDelete = document.querySelector(".commentDeleteForm");

const modifyButtons = document.querySelectorAll(".modifierCommentaire");
const deleteButtons = document.querySelectorAll(".supprimerCommentaire");

const modifyFormIdInput = document.querySelector(".idCommentaireModifyForm");
const modifyFromCommentInput = document.querySelector(".commentaireAAfficher");

modifyButtons.forEach(el => {
    el.addEventListener("click", () => {
        let idComment = el.parentNode.parentNode.id;
        let comment = el.parentNode.previousElementSibling.value;
        modifyFromCommentInput.value = comment;
        modifyFormIdInput.value = idComment;
        formModify.hidden = false;
    });
});
const modifier = document.querySelectorAll(".modifierArticle");
const supprimer = document.querySelectorAll(".supprimerArticle");

const articleModifyForm = document.querySelector(".articleModifyForm");
const articleDeleteForm = document.querySelector(".articleDeleteForm");

const annulerModifArticle = document.querySelector(".annulerModifArticle");
const annulerSupprArticle = document.querySelector(".annulerSupprArticle");

annulerModifArticle.addEventListener("click", (e) => {
    e.preventDefault();
    articleModifyForm.hidden = true;
});

annulerSupprArticle.addEventListener('click', (e) => {
    e.preventDefault();
    articleDeleteForm.hidden = true;
});

modifier.forEach(el => {
    el.addEventListener("click", () => {
        articleModifyForm.hidden = false;
        const leTitreAAfficher = articleModifyForm.querySelector("input.leTitreAAfficher");
        const lArticleAAfficher = articleModifyForm.querySelector("textarea.lArticleAAfficher");
        const hiddenInputId = articleModifyForm.querySelector(".idArticleModifyForm");
        const leParentNode = el.parentNode.previousElementSibling;
        const nodeGlobal = el.parentNode.parentNode;
        const idArticle = nodeGlobal.id;
        hiddenInputId.value = idArticle;
        let lArticle = leParentNode.textContent;
        let leTitre = leParentNode.previousElementSibling.textContent;
        leTitreAAfficher.value = leTitre;
        lArticleAAfficher.textContent = lArticle;
    });
});

supprimer.forEach(el => {
    el.addEventListener("click", () => {
        articleDeleteForm.hidden = false;
        let idArticle = el.parentNode.parentNode.id;
        let hiddenInput = articleDeleteForm.querySelector(".idArticleDelForm");
        hiddenInput.value = idArticle;
    });
});


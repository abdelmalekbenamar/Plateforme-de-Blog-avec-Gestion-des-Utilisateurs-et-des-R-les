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
        const leParentNode = el.parentNode.previousElementSibling;
        let lArticle = leParentNode.textContent;
        let leTitre = leParentNode.previousElementSibling.textContent;
        console.log(lArticle, leTitre);
        leTitreAAfficher.value = leTitre;
        lArticleAAfficher.textContent = lArticle;
    });
});


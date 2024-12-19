const likeButton = document.querySelector(".likedButton");
const checkbox = document.querySelector(".likeCheckbox");


likeButton.addEventListener("click", () => {
    if(!checkbox.checked){
        likeButton.src = "./images/liked.png";
        checkbox.checked = true;
    }else{
        likeButton.src = "./images/unliked.png";
        checkbox.checked = false;
    }
});



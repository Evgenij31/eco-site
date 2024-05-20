//mobile navigation script
let closeNavBtn = document.getElementById("close-nav-btn");
let openNavBtn = document.getElementById("open-nav-btn");
let navUl = document.getElementById("nav-ul");
let logo = document.getElementById("logo");

//on click open the navigation
function openNav() {
    openNavBtn.style.display = "none";
    closeNavBtn.style.animation = "scale-in .2s";
    setTimeout(() => {
        closeNavBtn.style.display = "block";
    }, 200);
    logo.style.display = "none";
    navUl.style.display = "block";
}

//on click close the navigation
function closeNav() {
    closeNavBtn.style.display = "none";
    openNavBtn.style.animation = "scale-in .2s";
    setTimeout(() => {
        openNavBtn.style.display = "block";
    }, 200);

    logo.style.display = "block";
    navUl.style.display = "none";
}

//end of mobile navigation script
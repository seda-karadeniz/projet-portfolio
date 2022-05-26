 const burgerMenu = {
        init(){
            document.documentElement.classList.add('js-enabled');
            this.e_btn = document.querySelector('.nav-button');
            this.e_main = document.querySelector('main');
            console.log(this.e_btn)
/*
            this.e_btn.addEventListener('click', ()=>{
                this.e_main.classList.toggle('is-opened');
            })*/
        }
    }
    burgerMenu.init();

/*

const menu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".nav__link");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
    if (menu.classList.contains("showMenu")) {
        menu.classList.remove("showMenu");
        closeIcon.style.display = "none";
        menuIcon.style.display = "block";
    } else {
        menu.classList.add("showMenu");
        closeIcon.style.display = "block";
        menuIcon.style.display = "none";
    }
}

hamburger.addEventListener("click", toggleMenu);

menuItems.forEach(
    function(menuItem) {
        menuItem.addEventListener("click", toggleMenu);
    }
)
*/

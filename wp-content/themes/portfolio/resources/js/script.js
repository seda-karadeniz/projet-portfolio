class DW_Controller
{
    constructor()
    {
        // Ici, le DOM n'est pas encore prêt
        // Pour le moment, rien à faire.
    }

    run()
    {
        // Ici, le DOM est prêt.
    }
}

window.dw = new DW_Controller();
window.addEventListener('load', () => window.dw.run());
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

import {Carousel, Fancybox} from "@fancyapps/ui";

class DW_Controller
{

    constructor()
    {
        // Ici, le DOM n'est pas encore prêt
        // Pour le moment, rien à faire.

    }

    run()
    {



        const svg = document.querySelector(".introduction__rect svg");
        const lines = svg.querySelectorAll('.introduction__rect svg line');
        const divProjects = document.querySelector('.projects__wrapper');

            for (const line of lines) {
                const length = line.getTotalLength();
                line.style.transition = 'none';
                line.style.strokeDasharray = `${length} ${length}`;
                line.style.strokeDashoffset = length;
                line.getBoundingClientRect();
                line.style.transition = 'stroke-dashoffset 5s ease';
                line.style.strokeDashoffset = 0;

            }

       /*document.addEventListener("scroll", () => {
            if (window.scrollY + window.innerHeight <= window.innerHeight) {




            }
        })*/
        divProjects.classList.add('js-animation');
        document.addEventListener("scroll", () => {
            const {scrollTop, clientHeight} = document.documentElement;
            const topElementToTopViewport = divProjects.getBoundingClientRect().top;
            if (scrollTop > + (scrollTop+ topElementToTopViewport).toFixed() - clientHeight * 0.99) {
                divProjects.classList.add('active');

            }
        })



    }
}

window.dw = new DW_Controller();
window.addEventListener('load', () => window.dw.run());

/*
document.addEventListener("scroll", () => {
            if (window.scrollY + window.innerHeight <= window.innerHeight) {
                divProjects.classList.add('js-animation');



            }
        })

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

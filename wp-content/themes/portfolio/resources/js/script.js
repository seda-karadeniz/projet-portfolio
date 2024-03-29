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
        if (svg){
            const lines = svg.querySelectorAll('.introduction__rect svg line');

            for (const line of lines) {
                const length = line.getTotalLength();
                line.style.transition = 'none';
                line.style.strokeDasharray = `${length} ${length}`;
                line.style.strokeDashoffset = length;
                line.getBoundingClientRect();
                line.style.transition = 'stroke-dashoffset 5s ease';
                line.style.strokeDashoffset = 0;

            }

        }
        const divProjects = document.querySelector('.projects__wrapper');
        const footer= document.querySelector('.footer');



       /*document.addEventListener("scroll", () => {
            if (window.scrollY + window.innerHeight <= window.innerHeight) {




            }
        })*/
       /* divProjects.classList.add('js');
        footer.classList.add('js');
        document.addEventListener("scroll", () => {
            const {scrollTop, clientHeight} = document.documentElement;
            const topElementToTopViewport = divProjects.getBoundingClientRect().top;
            if (scrollTop > + (scrollTop+ topElementToTopViewport).toFixed() - clientHeight * 0.7) {
                divProjects.classList.add('active');
                footer.classList.add('active');

            }
            else {

                divProjects.classList.remove("active");
                footer.classList.remove("active");
            }
        })*/
             function reveal() {
                 let reveals = document.querySelectorAll(".reveal");


                for (let i = 0; i < reveals.length; i++) {

                     let windowHeight = window.innerHeight;
                     let elementTop = reveals[i].getBoundingClientRect().top;
                     let elementVisible = 10;

                     reveals[i].classList.add('js');

                     if (elementTop < windowHeight - elementVisible) {

                         reveals[i].classList.add("active");
                     } else {

                         reveals[i].classList.remove("active");
                     }
                 }
             }

             window.addEventListener("scroll", reveal);



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

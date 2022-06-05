    <footer class="footer reveal">
        <section class="footer__body ">
            <h2 class="hidden" role="heading" aria-level="2" >Footer</h2>
            <?php
            // à changer si l'uri change de format .. format actuel /../contact/
            $path = $_SERVER['REQUEST_URI'];
            $explodedPath = explode("/",$path);
            $lastPath = $explodedPath[count($explodedPath) - 2];
            if (!($lastPath == "contact")):?>
            <div class="footer__contact">
                <p class="footer__contact-para">Ne soyez pas timide,</p>
                <a href="contact" class="footer__contact-btn btn"><span>--</span>Contactez-moi<span>--</span></a>
            </div>
            <?php endif;?>
            <div class="footer__rs">
                <a href="https://github.com/seda-karadeniz">GitHub</a>
                <a href="https://www.linkedin.com/in/seda-karadeniz-0a92251ba/">LinkedIn</a>
                <a href="https://dribbble.com/sedaKaradeniz">Dribbble</a>
                <a href="https://www.behance.net/sedakaradeniz">Behance</a>
            </div>

            <div class="more">
                <span class="copy">&copy; Seda Karadeniz 2022</span>
                <span><a href="privacy" class="privacy">Politique de confidentialité</a></span>
            </div>

        </section>
    </footer>
    </body>
</html>
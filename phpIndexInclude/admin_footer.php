<!--------------------- Pied et Contact ----------------------- -->

<footer id="pied">

    <div id="contcontact">
        <div id="contactezmoi">
            <h2 id="contacte">
                Contactez-moi
            </h2>
            <form target="_blank" action="https://formsubmit.co/alss-sio-slam21-evi@ccicampus.fr" method="POST">
                <input placeholder="Nom" type="text" name="name" required>
                <input placeholder="E-mail" type="email" name="email" required>
                <textarea placeholder="Votre message ici..." name="texte" required></textarea>
                <button placeholder="Votre message ici..." type="submit">Envoyer</button>
            </form>
        </div>

        <div id="retrouvezmoi">

            <h1>
                Retrouvez moi sur Linkedin
            </h1>
            <div>
                <a href="https://www.linkedin.com/feed/?trk=seo-authwall-base_signin-form_submit"><img
                        title="lien vers linkedin" class="logofoot" src="<?= WEBROOT; ?>img/logolinkedin.png"
                        alt=""></a>
            </div>
            <div id="copyrightdiv">
                <div id="copyright">

                    <span>
                        © VTRSolution
                        <a href="./html/mentionLeg.html">(mentions légales)</a>; 2022
                    </span>
                </div>
            </div>

        </div>

    </div>

    <?php
    // include('../lib/debug.php');
    ?>
</footer>

<script src="<?= WEBROOT; ?>asset/js/monscript.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>



</body>

</html>
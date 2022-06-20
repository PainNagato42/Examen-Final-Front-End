<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("parties/head.php"); ?>
        <title>Contact - Libres comme l'air formation et club de saut extrême à Grenoble</title>
        <meta name="description" content="Libres comme l'air vous propose de prendre contact pour plus d'informations ou de reservation. Nous sommes accrédités par la FFP et la FFVL pour une bonne qualité de formation."/>
    </head>
    <body onscroll="backToTop(), changeHeader2();">
        <!----------------------------------------------------------------------->
        <!------------------------------- HEADER -------------------------------->
        <!----------------------------------------------------------------------->
        <?php include("parties/header.php"); ?>
        <?php include("parties/small-menu.php"); ?>
        <main class="margin-top-172">
            <div class="container">
                <div class="ariane">
                    <a href="index.php" title="Revenir à l'accueil - Libres comme l'air formation et club de saut extrême">Accueil</a>
                    <span>></span>
                    <span>Contact</span>
                </div>
                <div class="flex justify-center">
                    <span class="deco-gauche-bleu small-none"></span><span class="deco-gauche-bleu-small large-none small-block"></span><h2>Nous contacter</h2><span class="deco-droite-bleu small-none"></span><span class="deco-droite-bleu-small large-none small-block"></span>
                </div>
                <div class="formulaire text-center">
                    <p>Merci de bien vouloir remplir le formulaire,</p>
                    <p>nous vous répondrons sous 24 h.</p>
                    <form method="POST">
                        <div class="flex">
                            <label class="large-15" for="nom">Votre Nom :</label>
                            <input class="large-30" type="text" name="nom" id="nom" required/>
                        </div>
                        <div class="flex">
                            <label class="large-15" for="prenom">Votre Prénom :</label>
                            <input class="large-30" type="text" name="prenom" id="prenom" required/>
                        </div>
                        <div class="flex">
                            <label class="large-15" for="eamil">Votre e-mail :</label>
                            <input class="large-30" type="email" name="email" id="email"/>
                        </div>
                        <div class="flex">
                            <label class="large-15" for="message">Votre message :</label>
                            <textarea class="large-30" required></textarea>
                        </div>
                        <input type="submit" value="Valider"/>
                    </form>
                </div>
            </div>
        </main>
        <!----------------------------------------------------------------------->
        <!----------------------------- NEWSLETTER ------------------------------>
        <!----------------------------------------------------------------------->
        <?php include("parties/newsletter.php"); ?>
        <!----------------------------------------------------------------------->
        <!---------------------------- BACK-TO-TOP ------------------------------>
        <!----------------------------------------------------------------------->
        <?php include("parties/back-to-top.php"); ?>
        <!----------------------------------------------------------------------->
        <!------------------------------- FOOTER -------------------------------->
        <!----------------------------------------------------------------------->
        <?php include("parties/footer.php"); ?>
        <?php include("parties/script.php"); ?>
    </body>
</html>

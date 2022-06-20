<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("parties/head.php"); ?>
        <title>Prestation Wingsuit - Libres comme l'air formation et club de saut extrême à Grenoble</title>
        <meta name="description" content="Libres comme l'air vous propose la formation de wingsuit avec les brevets adéquates. Nous sommes accrédités par la FFP et la FFVL pour une bonne qualité de formation."/>
    </head>
    <body onscroll="backToTop(), changeHeader2();">
        <!----------------------------------------------------------------------->
        <!------------------------------- HEADER -------------------------------->
        <!----------------------------------------------------------------------->
        <?php include("parties/header.php"); ?>
        <!----------------------------------------------------------------------->
        <!------------------------------ WINGSUIT ------------------------------->
        <!----------------------------------------------------------------------->
        <?php include("parties/small-menu.php"); ?>
        <main class="margin-top-172 small-margin-top-16">
            <div class="container">
                <div class="ariane">
                    <a href="index.php" title="Revenir à l'accueil - Libres comme l'air formation et club de saut extrême">Accueil</a>
                    <span>></span>
                    <span>Wingsuit</span>
                </div>
                <div class="flex justify-center">
                    <span class="deco-gauche-bleu small-none"></span><span class="deco-gauche-bleu-small large-none small-block"></span><h2>Wingsuit</h2><span class="deco-droite-bleu small-none"></span><span class="deco-droite-bleu-small large-none small-block"></span>
                </div>
                <div class="wingsuit flex small-100">
                    <div class="large-50 text-center small-100">
                        <img class="small-100" src="img/Wingsuit.jpg" alt="deux personnes en l'air en wingsuit au dessus de l'eau"/>
                    </div>
                    <div class="large-50 small-100">
                        <p><strong>Prérequis :</strong><br />Titulaire du BPA et du module BI4 track, totaliser 150 sauts minimum
                        </p>
                        <p><strong>Formation 1 : débutant:</strong> <br />
                            Vous devez être titulaire du BPA et du module BI4 track, totaliser 150 sauts minimum, vous devrez effectuer 2 sauts tests, étudier et assimiler une formation théorique. Pendant l’apprentissage pas d’emport de caméra, une fois le niveau 1 validé vous pourrez pratiquer la wingsuit à 2 maximum et la hauteur d’ouverture est de 1500m jusqu’à l'obtention du niveau suivant. 
                        </p>
                        <p><strong>Formation 2  confirmé:</strong><br /> 
                            Pour ce niveau vous avez toujours 2 sauts pour la validation, vous avez effectué 20 sauts minimum avec une wingsuit niveau 1. Pendant l’apprentissage la hauteur d’ouverture est de 1500m et l’emport de caméra est interdit, une fois ce niveau validé vous pourrez ouvrir à 1100m et le nombre de personnes dans le saut sera en fonction de votre niveau. 
                        </p>
                    </div>
                    <div>
                        <p><strong>Formation 3 Expert:</strong><br />
                            Pour ce niveau il faut être titulaire du brevet C ou D, totaliser 300 sauts dont 80 minimum avec une wingsuit de niveau 2. 2 sauts tests à valider, l’emport de caméra est toujours interdit, la hauteur d’ouverture 1500m et le nombre de wingsuiter en fonction de votre expérience et votre aisance. L’emport d’un altimètre sonore est obligatoire ainsi qu’un altimètre classique, si il est placé sur la sangle de poitrine, il est plus facilement visible et la taille et certain type de voile sont préconisées. Et enfin il faut toujours emporter un téléphone éteint pendant le vol mais très pratique pour être joignables en cas de posé hors zone.</p>
                    </div>
                    <div class="tarifs text-center container">
                        <h3>Tarifs</h3>
                        <p><span>300 €</span> pour 3 jours de niveau 1</p>
                        <p><span>450 €</span> pour 3 jours de niveau 2</p>
                        <p><span>650 €</span> pour 3 jours de niveau 3</p>
                        <a class="btn btn-prestation" href="reservation.php" title="Les reservations - Libres comme l'air formation et club de saut extrême">Je reserve</a>
                    </div>
                </div>
                <!----------------------------------------------------------------------->
                <!----------------------------- VOIR AUSSI ------------------------------>
                <!----------------------------------------------------------------------->
                <div class="flex justify-center">
                    <span class="deco-gauche-bleu small-none"></span><span class="deco-gauche-bleu-small large-none small-block"></span><h2>Voir aussi</h2><span class="deco-droite-bleu small-none"></span><span class="deco-droite-bleu-small large-none small-block"></span>
                </div>
                <article class="flex text-center justify-center">
                    <div class="large-25 small-100 small-grid">
                        <a href="parapente.php" title="Information parapente - Libres comme l'air formation et club de saut extrême">
                            <h3>Parapente</h3>
                            <img src="img/picto_parapente.png" alt="Pictogramme parapente"/>
                        </a>
                        <a class="btn small-40 small-auto" href="parapente.php" title="Information parapente - Libres comme l'air formation et club de saut extrême">En savoir plus</a>
                    </div>
                    <div class="large-25 small-100 small-grid">
                        <a href="parachute.php" title="Information parachute - Libres comme l'air formation et club de saut extrême">
                            <h3>Parachute</h3>
                            <img src="img/picto_parachute.png" alt="Pictogramme parachute"/>
                        </a>
                        <a class="btn small-40 small-auto" href="parachute.php" title="Information parachute - Libres comme l'air formation et club de saut extrême">En savoir plus</a>
                    </div>
                </article>
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

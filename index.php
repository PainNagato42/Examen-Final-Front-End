<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("parties/head.php"); ?>
        <title>Libres comme l'air - Formation et club de saut extrême à Grenoble</title>
        <meta name="description" content="Libres comme l'air, formation et club de saut extrême à Grenoble vous propose de nombreuses prestations, le parapente, le parachute,  le wingsuit et les brevets. Nous sommes accrédités par la FFP et la FFVL."/>
    </head>
    <body onscroll="backToTop(), changeHeader();">
        <!----------------------------------------------------------------------->
        <!------------------------------ HEADER --------------------------------->
        <!----------------------------------------------------------------------->
        <header class="flex justify-between">
            <a href="index.php"><img class="logo" src="img/logo.png" alt=""/></a>
            <div class="large-none medium-block small-block" onclick="menu();">
                <div class="hamb">
                    <div class="barre1"></div>
                    <div class="barre2"></div>
                    <div class="barre3"></div>
                </div>
            </div>
            <nav class="small-none">
                <ul class="flex">
                    <li><a href="index.php" title="Revenir à l'accueil - Libres comme l'air formation et club de saut extrême"><?php include("img/home.svg"); ?></a></li>
                    <li>Prestations
                        <ul>
                            <li><a href="parapente.php" title="Le parapente - Libres comme l'air formation et club de saut extrême">Parapente</a></li>
                            <li><a href="parachute.php" title="Le parachute - Libres comme l'air formation et club de saut extrême">Parachute</a></li>
                            <li><a href="wingsuit.php" title="Le wingsuit - Libres comme l'air formation et club de saut extrême">Wingsuit</a></li>
                        </ul></li>
                    <li><a href="brevets.php" title="Les brevets - Libres comme l'air formation et club de saut extrême">Brevets</a></li>
                    <li><a href="meteo.php" title="La météo - Libres comme l'air formation et club de saut extrême">Météo</a></li>
                    <li><a href="calendrier.php" title="Le calendrier - Libres comme l'air formation et club de saut extrême">Calendrier</a></li>
                    <li><a href="tarifs.php" title="Les tarifs - Libres comme l'air formation et club de saut extrême">Tarifs</a></li>
                    <li><a href="records.php" title="Les records - Libres comme l'air formation et club de saut extrême">Records</a></li>
                    <li><a href="contact.php" title="Contact - Libres comme l'air formation et club de saut extrême">Contact</a></li>
                    <li><a href="tel:0600000000" title="Numéro de téléphone - Libres comme l'air formation et club de saut extrême">06 00 00 00 00</a></li>
                </ul>
            </nav>
        </header>
        <!----------------------------------------------------------------------->
        <!------------------------------- SLIDER -------------------------------->
        <!-----------------------------------------------------------------------> 
        <div class="slider small-none">
            <img class="large-100 image-slide active" src="img/Vol_en_parapente_duo.jpg" alt="Vol en parapente en duo à côter des montagnes"/>
            <img class=" large-100 image-slide" src="img/wingsuit_slider.jpg" alt=""/>
            <img class=" large-100 image-slide" src="img/tandem-parachute.jpg" alt=""/>
            <div class="left" onclick="slidePrecedent();"><?php include("img/fleche-gauche.svg"); ?></div>
            <div class="right" onclick="slideSuivant();"><?php include("img/fleche-droite.svg"); ?></div>
            <div class="slogan text-center">
                <p><strong><span>Libres comme l'air</span><br />va vous faire<br />décoiffer</strong></p>
                <a class="btn btn-slogan" href="reservation.php" title="Les reservations - Libres comme l'air formation et club de saut extrême">Reserver</a>
            </div>
            <div class="logos">
                <img src="img/logo_National_Geographique.png" alt="Logo de National géographique" onclick="afficheNatGeo();"/>
                <img src="img/logo_FFP.png" alt="Logo de la fédération française du parachutisme" onclick="afficheFFP();"/>
                <img src="img/logo__FFVL.png" alt="Logo de la fédération française du vol libre" onclick="afficheFFVL();"/>
                <img src="img/logo_Guinness_World_Records.png" alt="Logo de la Guiness world records" onclick="afficheGuinness();"/>
                <p>Cliquez sur les logos pour avoir plus d'informations.</p>
            </div>
        </div>
        <div class="nat-geo">
            <p>National Geographic, connue sous l'ancien nom de National Geographic Channel, est une chaîne de télévision spécialisée américaine et internationale. Elle diffuse essentiellement des documentaires sur la nature et sur la science, mais également sur la culture et l'histoire. Elle est éditée par la National Geographic Society. Tout comme le magazine dont elle est issue, la chaîne National Geographic est déclinée dans de nombreux pays.<br />Lancée au Royaume-Uni, en Europe et en Australie en septembre 1997, la chaîne est aujourd'hui disponible dans 162 pays et en 27 langues, dans 230 millions de foyers.</p>
            <div class="croix-popup" onclick="fermeNatGeo();"><?php include("img/cross.svg"); ?></div>
        </div>
        <div class="ffp">
            <p>La Fédération française de parachutisme (souvent abrégé FFP) est chargée de l’organisation et de la promotion du parachutisme sport. Créée le 10 décembre 1949, elle est délégataire du Ministère des Sports, de la Jeunesse, de l'Éducation populaire et de la Vie associative depuis 1972.</p>
            <div class="croix-popup" onclick="fermeFFP();"><?php include("img/cross.svg"); ?></div>
        </div>
       <div class="ffvl">
            <p>La Fédération française de Vol Libre (FFVL) est une association française loi de 1901 fondée le 12 mai 1974. Elle gère par délégation ministérielle officielle six activités principales (et disciplines associées) : le deltaplane, le parapente, le cerf-volant, le kite terrestre (snowkite et landkite), le speed riding et le boomerang. En 2012, elle compte 31 835 licenciés1, et, en 2015, 31 8592. En tant que fédération agréée, elle accueille aussi les licenciés de kitesurf.</p>
            <div class="croix-popup" onclick="fermeFFVL();"><?php include("img/cross.svg"); ?></div>
        </div>
        <div class="guinness">
            <p>Le Livre Guinness des records est un livre de référence, publié une fois par an et recensant une collection de records du monde reconnus au niveau international, qui sont à la fois des prouesses humaines et naturelles.</p>
            <div class="croix-popup" onclick="fermeGuinness();"><?php include("img/cross.svg"); ?></div>
        </div>
        <?php include("parties/small-menu.php"); ?>
        <main>
            <div class="popup text-center small-80">
                <p>Bienvenue sur notre site web,</p>
                <p>nous vous offrons une réduction</p>
                <p>de 5% lors de votre première reservation.</p>
                <div class="croix-popup" onclick="fermePopup();"><?php include("img/cross.svg"); ?></div>
            </div>
            <!----------------------------------------------------------------------->
            <!-------------------------------- METEO -------------------------------->
            <!-----------------------------------------------------------------------> 
            <div class="meteo small-none">
                <div class="croix large-none small-block" onclick="cacheMeteo();"><?php include("img/cross.svg"); ?></div>
                <p class="ville">Grenoble</p>
                <div class="flex align-center justify-center text-center">
                    <img class="small-20" src="img/picto_meteo.png" alt="Pictogramme météo partiellement nuageux"/>
                    <div>
                        <p>Partiellement nuageux</p>
                        <p class="degres">28 °C</p>
                    </div>
                </div>
                <p>Aujourd'hui, Lundi 15 Mars</p>
                <div class="text-center">
                    <a class="btn btn-meteo" href="meteo.php" title="Voir météo semaine - Libres comme l'air formation et club de saut extrême">Voir la semaine</a>
                </div>
            </div>
            <div class="small-meteo large-none small-flex align-center justify-center" onclick="afficheMeteo();"><?php include("img/sun.svg"); ?></div>
            <!----------------------------------------------------------------------->
            <!----------------------------- PRESTATIONS ----------------------------->
            <!-----------------------------------------------------------------------> 
            <div class="container">
                <div class="flex justify-center">
                    <span class="deco-gauche-bleu small-none"></span><span class="deco-gauche-bleu-small large-none small-block"></span><h2>Nos prestations</h2><span class="deco-droite-bleu small-none"></span><span class="deco-droite-bleu-small large-none small-block"></span>
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
                    <div class="large-25 small-100 small-grid">
                        <a href="wingsuit.php" title="Information wingsuit - Libres comme l'air formation et club de saut extrême">
                            <h3>Wingsuit</h3>
                            <img src="img/picto_wingsuit.png" alt="Pictogramme wingsuit"/>
                        </a>
                        <a class="btn small-40 small-auto" href="wingsuit.php" title="Information wingsuit - Libres comme l'air formation et club de saut extrême">En savoir plus</a>
                    </div>
                </article>
            </div>
            <!----------------------------------------------------------------------->
            <!---------------------------- PRESENTATION ----------------------------->
            <!-----------------------------------------------------------------------> 
            <div class="presentation">
                <div class="container">
                    <div class="flex justify-center text-center">
                        <span class="deco-gauche-blanc small-none"></span><span class="deco-gauche-blanc-small large-none small-block"></span><h1>Libres comme l'air, club<br /> et école de formation<br /> de saut à Grenoble</h1><span class="deco-droite-blanc small-none"></span><span class="deco-droite-blanc-small large-none small-block"></span>
                    </div>
                    <div class="flex">
                        <div class="large-50 small-100">
                            <img class="small-100" src="img/Locaux_Libres_comme_l'air.jpg" alt="Les locaux de Libres comme l'air"/>
                        </div>
                        <div class="large-50 small-100">
                            <p><strong>L’école a été fondée par Christophe Desbruères et a ouvert en mai 1988.</strong> Après plus de 30 ans de fonctionnement, la richesse de notre expérience nous permet d’assurer une formation complète du débutant au compétiteur ainsi que la formation de moniteurs au diplôme fédéral et d’état (Label FFVL et FFP)</p>
                            <p>Notre école a été aussi à l’initiative de nombreuses actions auprès des jeunes : Stages spécifiques jeunes (12–14 ans), Création des premières compétitions en parapente en France. Notre situation géographique, près de la chartreuse nous différencie des autres écoles des par un climat plus ensoleillé.
                            </p>
                            <p>Par ailleurs, nous sommes la seule structure française située sur le versant sud des chaînes de montagnes. Cette particularité géographique confère à nos sites les caractéristiques suivantes : ils sont généralement protégés du vent du nord, ils sont praticables par vent du sud </p>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------------------------------------------------------->
            <!------------------------------- GALERIE ------------------------------->
            <!----------------------------------------------------------------------->
            <div class="container-galerie">
                <div class="flex justify-center">
                    <span class="deco-gauche-bleu small-none"></span><span class="deco-gauche-bleu-small large-none small-block"></span><h2>Galerie photo</h2><span class="deco-droite-bleu small-none"></span><span class="deco-droite-bleu-small large-none small-block"></span>
                </div>
                <div class="galerie flex justify-between">
                    <div class="large-25 small-100">
                        <img class="large-100" src="img/Wingsuit_montagne.jpg" alt="Une personne qui fait du wingsuit vers les montagnes"/>
                    </div>
                    <div class="large-25 small-100">
                        <img class="large-100" src="img/Parapente_duo.jpg" alt="deux personnes sur une parapente"/>
                    </div>
                    <div class="large-25 small-100">
                        <img class="large-100" src="img/parachute_bord_avion.jpg" alt="deux personnes dans l'avion prêt à sauter"/>
                    </div>
                    <div class="large-25 small-100">
                        <img class="large-100" src="img/Parachute_cote_avion.jpg" alt="deux personnes qui ont juste sauter de l'avion"/>
                    </div>
                    <div class="large-25 small-100">
                        <img class="large-100" src="img/Parachute_en_duo.jpg" alt="deux personnes dans les air qui prennent la pose pour la photo"/>
                    </div>
                    <div class="large-25 small-100">
                        <img class="large-100" src="img/Groupe_wingsuit.jpg" alt="un groupe de sept personnes en wingsuit devant l'avion"/>
                    </div>
                    <div class="large-25 small-100">
                        <img class="large-100" src="img/wingsuit_desert.jpg" alt="trois personnes dans les air en wingsuit au dessus d'un désert"/>
                    </div>
                    <div class="large-25 small-100">
                        <img class="large-100" src="img/Parachute_ocean.jpg" alt="deux personnes en l'air au dessus d'une ile"/>
                    </div>
                </div>
            </div>
            <!----------------------------------------------------------------------->
            <!--------------------------------- AVIS -------------------------------->
            <!----------------------------------------------------------------------->
            <div class="avis">
                <div class="container">
                    <div class="flex justify-center">
                        <span class="deco-gauche-blanc small-none"></span><span class="deco-gauche-blanc-small large-none small-block"></span><h2>Avis des élèves</h2><span class="deco-droite-blanc small-none"></span><span class="deco-droite-blanc-small large-none small-block"></span>
                    </div>
                    <div class="commentaire">
                        <p>Très bonne formation, Merci!</p>
                        <p class="text-end">Kévin<p>
                    </div>
                    <div class="commentaire">
                        <p>Formateurs très sympathiques, explications claires et très bonne école.</p>
                        <p class="text-end">Eva</p>
                    </div>
                    <div class="commentaire">
                        <p>Excellente école, je vous en remercie.</p>
                        <p class="text-end">Patrick</p>
                    </div>
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
        <script src="js/slider.js" type="text/javascript"></script>
    </body>
</html>

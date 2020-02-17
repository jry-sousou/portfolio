<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

    <script src="assets/js/script2.js"></script>


</head>

<body>

    <!-- HEADER ---------------------------------------------------------------------------------->
    <header id="header1" class="container wh column bgmoi">
        <nav class="container jcc aic">

            <ul class="w100h50 jcsa aic">
                <li><a class="texteWhite merry" href="#app"> A propos</a></li>
                <li><a class="texteWhite merry" href="#comp"> Compétences</a></li>
                <li><a class="texteWhite merry" href="#pjt"> Projets</a></li>
                <li> <a class="texteWhite merry" href="#Contact"> Contact</a></li>
            </ul>

            <div id="divDuBurgeur" class="container aic jcc">
                <img class="menu" src="img/menu2.svg"></img>


            </div>


        </nav>
        <!-- IMAGE ACCUEIL ---------------------------------------------------------------------------------->

        <section class="bg titre texteWhite container jcc aic merry fontSize column">
            <h1 class="textcolor">Jerry NICOLAS</h1>
            <h2 class="mt fs25">Developpeur Web junior/ Web Design</h2>
            <h2 class="fs25 mt">HTML/CSS/JavaScript/PHP</h2>

        </section>
        <div class="dix">

        </div>



    </header>


    <!-- MAIN ---------------------------------------------------------------------------------->
    <main class="container column jcsb">

        <section class="h100 w100 container fdc jcc aic jcsb">
            <div id="app" class="title container black w100 jcc satisfyPolice fontSize h50">

                <h1>A propos</h1>
            </div>



            <div class="ap container w80 h100 br satisfyPolice texta aic fontSizee jcc paddingr">
                <img class="und container w50 h70" src="img/undraw_profile_6l1l (1).png" alt="">


                <p>Bonjour et bienvenue sur mon portfolio. Je m'appelle NICOLAS Jerry, je me suis lancé
                    depuis bientôt 3 mois dans le développement web, je suis actuellement en formation au sein de
                    l'établissement Simplon.
                    Le métier de développeur web me plâit énormément plus précisément le web design car je
                    suis quelqu'un de créatif qui a une grande imagination.
                    Je suis actuellement à la recherche d'un stage d'un mois du 2 au 27 Mars, donc si mon profil vous
                    plâit n'hésitez pas à me contacter !</p>


            </div>

            <div class="border w10 jcsa mt mb"></div>



        </section>
        <section id="comp" class="h100 container jcsb jcc fdc bglgg">
            <div class="titlee container black w100 h30 jcc satisfyPolice fontSize aic">

                <h1>Compétences</h1>
                <img class="container w20 h40 compt" src="img/undraw_experience_design_eq3j (3).png" alt="">

            </div>

            <div class="container w100 h70 jcc fdc aic jcse">
                <img class="w50 h70 container ecran" src="img/ecran.png" alt="">
                <div class="border w10 mt mb"></div>

            </div>




        </section>

    </main>

    <!-- PROJETS ---------------------------------------------------------------------------------->
    <section class="container column wh bgwhite pro">
        <div class="container w100 fontSize h30 jcc satisfyPolice jcse mt aic" id="pjt">
            <h1>Projets</h1>
            <img class="container w20 h70 ml projet" src="img/undraw_project_completed_w0oq (2).png" alt="">

        </div>
        <div class="container w100 h50 bggreen aic jcse pr">
            <div class="container w10 h50 bgwhite br aic jcc satisfyPolice fs30 borderf anim">
            <img class="container w100 h100" src="img/soleil.jpg" alt="">
                

            </div>
            <div class="container w10 h50 bgwhite br aic jcc satisfyPolice fs30 borderf anim">
            <img class="container w100 h100" src="img/port.jpg" alt="">
                

            </div>
            <div class="container w10 h50 bgwhite br aic jcc satisfyPolice fs30 borderf anim">
                soon

            </div>

        </div>

        <div class="container w100 h50 bggreen aic jcse pr">
            <div class="container w10 h50 bgwhite br aic jcc satisfyPolice fs30 borderf">
                <img class="container w100 h100" src="img/lune.jpg" alt="">

            </div>


            <div class="container w10 h50 bgwhite br aic jcc satisfyPolice fs30 borderf">
            <img class="container w100 h100" src="img/bureau.jpg" alt="">
                

            </div>

            <div class="container w10 h50 bgwhite br aic jcc satisfyPolice fs30 borderf">
                soon

            </div>

        </div>
    </section>
    <!-- CONTACT ---------------------------------------------------------------------------------->

    <div class="container bgcontact w100 h50" id="Contact">
        <div class="container w50 h80 aic jcc satisfyPolice fontSizee fdc jcsb">
            <h1>Un café ?</h1>
            <form class="container fdc w50 contact" method="post" action="donnees.php" name="form">
                <input type="text" class="contact-text h50 fontSizee br ap" placeholder="Nom" name="nom">
                <input type="email" class="contact-text h50 fontSizee margint marginb br ap" placeholder="E-mail" name="email">
                <input type="number" class="contact-text h50 fontSizee br ap" placeholder="Téléphone" name="telephone">
                <textarea class="contact-text h50 fontSizee marginb margint br ap"
                    placeholder="Votre message" name="message"></textarea>
                <input type="submit" class="contact-btn h30 fontSizee ap texteWhite" value="Envoyer">


            </form>
        </div>
        
        <div class="container w50 h60 aic jcc jsce">

        <a href="https://www.linkedin.com/in/jerry-nicolas-7b51b7199/"><i class="fab fa-linkedin"></i></a>
        <a href="https://github.com/jry-sousou"><i class="fab fa-github"></i></a>
        
        
        </div>
        




    </div>

    <footer class="container w100 bgbg aic jcc" id="copyright">
        <p>&copy; NICOLAS Jerry All rights reserved 2020</p> <a href="#header1"><i class="fas fa-arrow-circle-up marginl"></i></a>

    </footer>
</body>

</html>
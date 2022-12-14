<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le Badminton Club du Moufia situé à Saint-Denis ouvre à 
    nouveau ses portes à toutes nouvelles inscriptions, compétion ou loisir, rejoignez-nous !" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
     rel="stylesheet"> 
    <!-- Lien Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Mon fichier CSS -->
    <link rel="stylesheet" href="styles.css">
    <title>Badminton Club Moufia</title>
    
    <link rel="icon" type="image/x-icon" href="/images/vollant2.png">
</head>
<body>
    <header>
        <nav class="navigation_bar">
            <div class="cont_wrapper">
                <img class="img_header" src="images/vollant2.png" alt="volant" >
                    <div class="cont_header">
                        <a href="/index.php" class="logo fw-semibold">B C M</a>
                        <h1 class="titre fw-semibold">Badminton Club du Moufia</h1>
                    </div>
                        <div class="wrapper_header">
                            <ul>
                                <li><i class="bi bi-instagram"></i></li>
                                <li><i class="bi bi-facebook"></i></li>
                                <li><i class="bi bi-youtube"></i></li>
                            </ul>
                        </div>
            </div>
                        <div class="navigation-links">
                            <ul>
                                <li><a href="/index.php">
                                Accueil
                                </a></li>
                                    <li><a href="/event.php">
                                    Evènement(s) à venir <img src="images/new2.png" alt="new" class="new"></a>
                                    </li>
                            </ul>
                        </div>
        <img src="images/menu.png" alt="menu ham" class="menu_hum">
        </nav>

        <img src="images/bad-img1.jpg" alt="img_accueuil" class="img_acc">
    </header>

    <main>

<section>

 <h2 class="fw-semibold">Inscrivez-vous !</h2>

 <article class="article1">
        <div class="cont_inscri">
            <div class="inscri_info">
            <h3 class="fw-normal fs-5">Le Badminton Club du Moufia ouvre ses portes !</h3>
                <p>Le BCM, créé il y a 8 ans déjà, et compte cette année plus de 132
                    inscrits, le club ouvre ses portes à toutes personnes à partir de 6 ans.
                    Que vous ayez comme objectif la compétition ou jouer par loisir, le
                    BCM s'adaptera à vous ! Le recrutement au club est ouvert du 1er 
                    Décembre 2022 au 31 Janvier 2023.Vous n'avez qu'à ramener 
                    votre tenue de sport, votre raquette et vos vollants !
                </p>
                <div class="cont_btn_direction_formu">
                    <a class="btn btn-warning btn-sm button" href="#cont_formu">
                    Je m'inscris</a>
                </div>  
            </div>

            <div class="cont_quatres_elem">
                <div>
                    <img src="images/cake.png" alt="âge" class="cake">
                    <p class="fw-semibold">A partir de 6 ans</p>
                    <p>Vous pouvez inscrire vos enfants à partir de 6 ans.</p>
                </div>
                <div>
                    <img src="images/signe.png" alt="cotisation" class="cotisation">
                    <p class="fw-semibold">Cotisation</p>
                    <p>Le prix de la cotisation est à partir de 125euros / an.
                    (détails)</p>
                </div>
                <div>
                    <img src="images/badminton.png" alt="bad" class="bad">
                    <p class="fw-semibold">Loisir & compétition</p>
                    <p>Loisir ou compétition, à vous de choisir !</p>
                </div>
                <div>
                    <img src="images/horaires.png" alt="horaire" class="horaire">
                    <p class="fw-semibold">Nos horaires</p>
                    <p>Vous pouvez nous contacter du lundi au vendredi de 10h à 19h00
                    au <span class="fw-semibold">0102 03 04 05.</span>
                    </p>
                </div>
            </div>
        </div>

</article>

<article class="article2">
    <h2>Planning et horaires</h2>
    <ul>
        <li><span class="fw-semibold">Lundi</span> : 18h30-22h30</li>
        <li><span class="fw-semibold">Mardi</span> : 20h00-22h30</li>
        <li><span class="fw-semibold">Jeudi</span> : 20h00-22h30</li>
        <li><span class="fw-semibold">Vendredi</span> : 18h30-22h30</li>
    </ul>
    <p> Les cours se passent au <span class="fw-semibold">Gymnase de Bourran</span> (Rue Léo Lagrange
        97490 Moufia)
    </p>
 </article>

<article class="article3">
    <h2>Tarifs des cotisations</h2>
    <ul>
        <li><span class="fw-semibold">Enfants</span> de 6 à 12 ans : 125 euros</li>
        <li><span class="fw-semibold">Jeunes</span> de 13 à 18 ans : 140 euros</li>
        <li><span class="fw-semibold">Adultes</span> : 160 euros</li>
    </ul>

    <p>Vous pouvez nous contacter par téléphone en utilisant les informations
    de contact plus haut ou bien remplir le formulaire suivant.
    Nous reviendrons vers vous pour répondre à vos questions et finaliser 
    l’inscription.</p>


<div id="cont_formu">
    <div class="title_fomu fw-semibold fs-5">Formulaire de contact</div>
        <form action="/ma-page-de-traitement" method="post">
            <div class="user-details">
                <div class="input-box">
                    <label class="details" for="nom">Nom :</label>
                    <input type="text" placeholder="Entrez votre nom" id="nom" name="user_name" required>
                </div>
                <div class="input-box">
                    <label class="details" for="prenom">Prénom :</label>
                    <input type="text" placeholder="Entrez votre prénom" id="prenom" name="user_name" required>
                </div>
                <div class="input-box">
                    <label class="details" for="email">Email:</label>
                    <input type="email" placeholder="Entrez votre email" id="email" name="user_mail" required>
                </div>

                <div class="input-box">
                    <label class="details" for="message">Message :</label>
                    <textarea id="message" placeholder="Ecrivez votre message" name="user_message"></textarea>
                </div>
                
                <div class="input-box">
                    <label class="details" for="phone">Telephone:</label>
                    <input id ="phone" type="tel" placeholder="Entrez votre numéro" name="tel" maxlength="10" required>
                </div>

                <div class="button_formu">
                    <button type="submit" value="send" class="btn btn-warning btn-sm">
                    Envoyer la demande</button>
                </div>
            </div>

        </form>
</div>

</article>

</section>

</main>
 
<footer>
    <div class="cont_foot">
        <h2 class="title-footer">Badminton Club du Moufia</h2>
            <div class="cont_info_footer">
                <img class="img_footer" src="images/vollant2.png" alt="vollant" >
                <p><span class="fw-semibold maison">Maison des associations</span>
                <br>
                55avenue des lilas 97490, MOUFIA
                <br>
                <span class="fw-bold">-</span>
                <br>
                Tél : 01 02 03 04 05
                <br>
                E-mail: bcm_merignac@gmail.com
                </p>
            </div>

        <h3 class="sous-title-footer fw-semibold">Suivez nous sur les réseaux sociaux :</h3>
        <div class="wrapper">
            <div class="media">
                <ul>
                    <li><i class="bi bi-instagram"></i></li>
                    <li><i class="bi bi-facebook"></i></li>
                    <li><i class="bi bi-youtube"></i></li>
                </ul>
            </div>
            <p class="lien_flaticon">icons récupéré sur : https://www.flaticon.com/</p>
        </div>

    </div>

</footer>

<!-- Script pour le munu hamburger -->
<script> 
        const menuHamburger = document.querySelector(".menu_hum")
        const navLinks = document.querySelector(".navigation-links")
 
        menuHamburger.addEventListener('click',()=>{
        navLinks.classList.toggle('active')})
</script>

<!-- Script bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</php>
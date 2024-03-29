<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haircoholix</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/photos.css" rel="stylesheet">
    <link href="css/salon.css" rel="stylesheet">
    <link href="css/prix.css" rel="stylesheet">
    <link href="css/lightbox.min.css" rel="stylesheet" />
</head>
<body>

<?php include 'include/header.inc.php' ?>
<?php include 'include/nav.inc.php' ?>
    
    <main>
<!--slider-->
        <div class="slide-container">
            <div class="custom-slider fondu">
              <div class="slide-index">1 / 5</div>
              <img class="slide-img" src="images/photos/bras-ciseaux.webp">
              <div class="slide-text">This isn't a car. Hero can be anyone</div>
            </div>
            <div class="custom-slider fondu">
              <div class="slide-index">2 / 5</div>
              <img class="slide-img" src="images/photos/outside.jpg">
              <div class="slide-text">Someone like you</div>
            </div>
            <div class="custom-slider fondu">
              <div class="slide-index">3 / 5</div>
              <img class="slide-img" src="images/photos/lampes.webp">
              <div class="slide-text">I'm not wearing hockey pads</div>
            </div>
            <div class="custom-slider fondu">
                <div class="slide-index">4 / 5</div>
                <img class="slide-img" src="images/photos/portfolio1.PNG">
                <div class="slide-text">I can't do that as Bruce Wayne</div>
            </div>
            <div class="custom-slider fondu">
                <div class="slide-index">5 / 5</div>
                <img class="slide-img" src="images/photos/sechage.webp">
                <div class="slide-text">Well, you see...</div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div class="slide-dot">
        <div class="dot" onclick="currentSlide(1)"></div> 
        <div class="dot" onclick="currentSlide(2)"></div> 
        <div class="dot" onclick="currentSlide(3)"></div>
        <div class="dot" onclick="currentSlide(4)"></div>
        <div class="dot" onclick="currentSlide(5)"></div> 
        </div>
    <div class="interbloc"></div>
<!--salon-->    
        <div class="double_volet gd_pt">
            <div style="background-image:url('images/photos/coupe-miroir.jpg'); width:100%;min-height:500px;"></div>
            <div>
                <h2 class="salon">Le salon</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et nulla quo voluptatum repellendus, numquam delectus recusandae doloremque ad expedita aperiam eos provident aut ipsam nemo facilis, reiciendis illum assumenda cum.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et nulla quo voluptatum repellendus, numquam delectus recusandae doloremque ad expedita aperiam eos provident aut ipsam nemo facilis, reiciendis illum assumenda cum.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et nulla quo voluptatum repellendus, numquam delectus recusandae doloremque ad expedita aperiam eos provident aut ipsam nemo facilis, reiciendis illum assumenda cum.</p>
            </div>
        </div>
    <div class="interbloc"></div>
<!--les services-->
            <div class="double_volet gd_pt">
                <div>
                    <h2 class="salon">Nos services</h2>
                    <p>Passez nous voir pour un conseil ou un devis sans engagement: fort de plus de 35ans d'expérience, nous sommes à l'écoute de vos attentes et de vos désirs afin de vous conseiller et de créer la coupe qui mettra en valeur votre visage.</p>
                        <div class="piou">
                            <li><div class="gauche">COUPE HOMME</div><div class="droite">€18,00</div></li>
                            <li><div class="gauche">TAILLAGE DE BARBE à la tondeuse</div><div class="droite">€10,00</div></li>
                            <li><div class="gauche">COUPE DAME</div><div class="droite">€24,00</div></li>
                            <li><div class="gauche">COUPE ENFANT (jusqu’à 6 ans) à la tondeuse</div><div class="droite">€15,00</div></li>
                            <li><div class="gauche">ÉPILATION AU FIL</div><div class="droite"></div></li>
                        </div>
                </div>
                <div><img src="images/photos/after.jpg" alt="photo de cheveux avant-après"></div>
            </div>
    <div class="interbloc"></div>
<!--les reviews quand ça fonctionnera-->
 <!--      <div class="double_volet pt_gd"> 
            <div><img src="images/photos/before-ext.jpg" alt="photo de cheveux avant-après"></div>
            <div class="bloc_reviews">
                <h2 class="salon">Reviews</h2>
                <img src="images/reviews1.PNG" alt="google reviews">
            </div>
        </div>            
    <div class="interbloc"></div>
-->  
            <div class="double_volet pt_gd"> 
                <section>
                    <h2 class="salon">Contact</h2>
                    <br>
                    <div class="centrage">
                    <address>
                        <p>Av. du Duc Jean 22,
                        <br>1083 Ganshoren</p> 
                    <p>02 445 05 22
                    <br>0493 03 33 03</p>
                    </address> 
                    <br>
                    <ul>
                        <li><div class="gauche">Lundi</div><div class="droite">Fermé</div></li>
                        <li><div class="gauche">Mardi</div><div class="droite">09:30–18:00</div></li>
                        <li><div class="gauche">Mercredi</div><div class="droite">09:30–18:00</div></li>
                        <li><div class="gauche">Jeudi</div><div class="droite">09:30–18:00</div></li>
                        <li><div class="gauche">Vendredi</div><div class="droite">09:30–18:00</div></li>
                        <li><div class="gauche">Samedi</div><div class="droite">09:30–16:00</div></li>
                        <li><div class="gauche">Dimanche</div><div class="droite">Fermé</div></li>
                    </ul>
                    <div style="height:5em"></div>  <!--pour permettre une meilleure répartition du iframe-->
               </div>
                </section>
                <section>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2517.998069814582!2d4.317891715746573!3d50.86823547953514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c3e7111a33f3%3A0xf060fe389cfd5a1c!2sHaircoholix!5e0!3m2!1sfr!2sbe!4v1672345670025!5m2!1sfr!2sbe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
            </div>
    </main>
   
    <?php include 'include/footer.inc.php' ?>
   
    <?php include 'include/btt.inc.php' ?>

    <script src="js/lightbox.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/btt.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>
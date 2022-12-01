<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil</title>

    <link rel="stylesheet" href="./style/home.css">
</head>

<body>


    <div class="banner">

        <?php
        include('header.php');
        ?>
        <article class="slider">
            <section class="slide">
                <img src="./imgs/bg1.jpeg" alt="">

                <div class="slide-content">
                    <!-- <h1 data-aos="fade-right" data-aos-offset="200" data-aos-delay="500" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">MADIOP WADE</h1> -->
                    <!--
                    <h2 data-aos="fade-right" data-aos-offset="200" data-aos-delay="500" data-aos-duration="1000" data-aos-easing="ease-in-out">DEVELOPPEUR WEB FRONT-END</h2> -->
                    <h1>Explorer, Decouvrir, Voyager</h1>
                    <h2> Voyager Autour Du Monde </h2>
                    <a href="package.php" class="btn">Découvrir Plus</a>
                </div>
            </section>

            <section class="slide">
                <img src="./imgs/bg2.jpg" alt="">

                <div class="slide-content">
                    <h1>Explorer, Decouvrir, Voyager</h1>
                    <h2>Des Lieux Magique </h2>
                    <a href="package.php" class="btn">Découvrir Plus</a>
                </div>
            </section>

            <section class="slide">
                <img src="./imgs/img-11.jpeg" alt="">
                <div class="slide-content">
                    <h1>Explorer, Decouvrir, Voyager</h1>
                    <h2>Rendez Votre Visite intéressante </h2>
                    <a href="package.php" class="btn">Découvrir Plus</a>
                </div>
            </section>

            <section class="slide">
                <img src="./imgs/bg4.jpg" alt="">

                <div class="slide-content">
                    <h1>Explorer, Decouvrir, Voyager</h1>
                    <h2> Et Bien plus Encore </h2>
                    <a href="package.php" class="btn">Découvrir Plus</a>
                </div>
            </section>

            <nav class="slider-nav">
                <span class="prev-slide"></span>
                <span class="next-slide"></span>
            </nav>
        </article>
        <!-- end Slider -->
    </div>

    <section class="about ">

        <h1 class=" heading-title aos-item" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1200" data-aos-once="true"> A Propos De Nous </h1>

        <div class="row aos-item" data-aos="zoom-in-down" data-aos-delay="11000" data-aos-duration="1500" data-aos-once="true" data-aos-easing="ease-out-cubic">

            <div class="image aos-item" data-aos="fade-right" data-aos-delay="2000" data-aos-duration="1500" data-aos-once="true" data-aos-easing="ease-out-cubic">
                <img src="./imgs/about.jpg" alt="">
            </div>

            <div class="content  aos-item" data-aos="fade-left" data-aos-delay="2000" data-aos-duration="1500" data-aos-once="true" data-aos-easing="ease-out-cubic">
                <h3>Qui Sommes-Nous</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
                <a href="./about.php" class="btn aos-item" data-aos="fade-right" data-aos-offset="200" data-aos-delay="500" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">Savoir plus</a>
            </div>

        </div>
        <section class="services">

            <h1 class="heading-title aos-item" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500" data-aos-once="true"> nos services </h1>

            <div class="box-container">

                <div class="box aos-item" data-aos="flip-left" data-aos-delay="500" data-aos-duration="1500" data-aos-once="true" data-aos-easing="ease-out-cubic">
                    <img src="imgs/icon-1.png" alt="">
                    <h3>aventure</h3>
                </div>

                <div class="box aos-item" data-aos="flip-left" data-aos-delay="800" data-aos-duration="1500" data-aos-once="true" data-aos-easing="ease-out-cubic">
                    <img src="imgs/icon-2.png" alt="">
                    <h3>tour guide</h3>
                </div>

                <div class="box aos-item" data-aos="flip-left" data-aos-delay="1000" data-aos-duration="1500" data-aos-once="true" data-aos-easing="ease-out-cubic">
                    <img src="imgs/icon-3.png" alt="">
                    <h3>Randonnée</h3>
                </div>

                <div class="box aos-item" data-aos="flip-left" data-aos-delay="1200" data-aos-duration="1500" data-aos-once="true" data-aos-easing="ease-out-cubic">
                    <img src="imgs/icon-4.png" alt="">
                    <h3>Feu De Camp</h3>
                </div>

                <!-- <div class="box aos-item" data-aos="flip-left" data-aos-delay="1400" data-aos-duration="1500" data-aos-once="false" data-aos-easing="ease-out-cubic">
                    <img src="imgs/icon-5.png" alt="">
                    <h3>off road</h3>
                </div> -->

                <div class="box aos-item" data-aos="flip-left" data-aos-delay="1600" data-aos-duration="1500" data-aos-once="true" data-aos-easing="ease-out-cubic">
                    <img src="imgs/icon-6.png" alt="">
                    <h3>camping</h3>
                </div>

            </div>

        </section>

    </section>
    <section>
        <h1 class="heading-title aos-item" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500" data-aos-once="true">nos forfait</h1>
        <div class="container aos-item" data-aos="fade-up" data-aos-delay="1500" data-aos-duration="1500" data-aos-once="true" data-aos-easing="ease-out-cubic">
            <div class="card">
                <div class="imgbx">
                    <img src="imgs/img-1.jpg" alt="photo" height="260px">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="reservation.php" class="btn">reservez</a>
                </div>
            </div>
            <div class="card">
                <div class="imgbx">
                    <img src="imgs/img-2.jpg" alt="photo" height="260px">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="reservation.php" class="btn">reservez</a>
                </div>
            </div>
            <div class="card">
                <div class="imgbx">
                    <img src="imgs/img-3.jpg" alt="photo" height="260px">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="reservation.php" class="btn">reservez</a>
                </div>
            </div>


            <div class="card">
                <div class="imgbx">
                    <img src="imgs/bg2.jpg" alt="photo" height="260px" width="-30rem">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="reservation.php" class="btn">reservez</a>
                </div>
            </div>
            <div class="card">
                <div class="imgbx">
                    <img src="imgs/bg3.jpg" alt="photo" height="260px">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="reservation.php" class="btn">reservez</a>
                </div>
            </div>
            <div class="card">
                <div class="imgbx">
                    <img src="imgs/img-6.jpg" alt="photo" height="260px">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="reservation.php" class="btn">reservez</a>
                </div>
            </div>



        </div>
        <div class="load-more"><a href="package.php" class="btn">voir plus</a> </div>
        <!-- <div class="box">
            <img src="imgs/pexels-photo-800246.jpeg" height="400px" alt="">
            <img src="imgs/tof.jpg" height="400px" alt="">
        </div> -->
    </section>

    <?php
    include('./footer.php');
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        window.jQuery || document.write('<script src="js/lib/jquery-v3.4.1.js"><\/script>');
    </script>

    <script src="./home.js"></script>

</body>

</html>
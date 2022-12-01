<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a propos</title>
    <link rel="stylesheet" href="./style/home.css">
    <link rel="stylesheet" href="./style/about.css">
</head>

<body>
    <?php
    include('header.php');


    ?>
    <section class="about " id="about">


        <h1 class="heading-title aos-item" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1200" data-aos-once="false"> A Propos De Nous </h1>

        <div class="row aos-item" data-aos="zoom-in-down" data-aos-delay="11000" data-aos-duration="1500" data-aos-once="true" data-aos-easing="ease-out-cubic">

            <div class="image aos-item" data-aos="fade-right" data-aos-delay="1100" data-aos-duration="1500" data-aos-once="false" data-aos-easing="ease-out-cubic">
                <img src="./imgs/about.jpg" alt="">
            </div>

            <div class="content aos-item" data-aos="fade-left" data-aos-delay="2000" data-aos-duration="1500" data-aos-once="false" data-aos-easing="ease-out-cubic">
                <h3>Qui Sommes-Nous</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>

            </div>

        </div>
        <section class="agents" id="agents">

            <h1 class="heading aos-item" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1200" data-aos-once="false"> professional <span>agents</span> </h1>

            <div class="box-container">

                <div class="box aos-item" data-aos="flip-left" data-aos-delay="500" data-aos-duration="1500" data-aos-once="false" data-aos-easing="ease-out-cubic">
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                    <img src="./imgs/agent1.jpg" alt="">
                    <h3>Macky Sall</h3>
                    <span>agent</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box aos-item" data-aos="flip-left" data-aos-delay="800" data-aos-duration="1500" data-aos-once="false" data-aos-easing="ease-out-cubic">
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                    <img src="./imgs/agent2.jpg" alt="">
                    <h3>Sonko</h3>
                    <span>agent</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box aos-item" data-aos="flip-left" data-aos-delay="1000" data-aos-duration="1500" data-aos-once="false" data-aos-easing="ease-out-cubic">
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                    <img src="./imgs/agent3.jpg" alt="">
                    <h3>Karim Wade</h3>
                    <span>agent</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box aos-item" data-aos="flip-left" data-aos-delay="1300" data-aos-duration="1500" data-aos-once="false" data-aos-easing="ease-out-cubic">
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                    <img src="./imgs/agent4.jpg" alt="">
                    <h3>Madické</h3>
                    <span>agent</span>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

            </div>

        </section>


    </section>



    <?php
    include('./footer.php');
    ?>
</body>

</html>
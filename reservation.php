<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resevation</title>
    <link rel="stylesheet" href="./style/form.css">
</head>

<body>
    <?php
    include('header.php');

    ?>

    <section class="booking">

        <h1 class="heading-title  aos-item" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1200" data-aos-once="false">Reservez maintenant</h1>

        <form action="reservation_form.php" method="post" class="book-form aos-item" data-aos="zoom-in-down" data-aos-delay="2000" data-aos-duration="1500" data-aos-once="false" data-aos-easing="ease-out-cubic">

            <div class="flex">
                <div class="inputBox">
                    <span>nom :</span>
                    <input type="text" placeholder="entrez votre nom" name="name" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="entrez votre email" name="email" required>
                </div>
                <div class="inputBox">
                    <span>telephone :</span>
                    <input type="number" placeholder="numero de téléphone" name="phone" required>
                </div>
                <div class="inputBox">
                    <span>addresse :</span>
                    <input type="text" placeholder="entrez votre addresse" name="address" required>
                </div>
                <div class="inputBox">
                    <span>choisir un endroit :</span>
                    <input type="text" placeholder="l'endroit que vous voulez visiter" name="location" required>
                </div>
                <div class="inputBox">
                    <span>combien :</span>
                    <input type="number" placeholder="nombre de personne" name="guests" required>
                </div>
                <div class="inputBox">
                    <span>arrivé :</span>
                    <input type="date" name="arrivals" required>
                </div>
                <div class="inputBox">
                    <span>quitant :</span>
                    <input type="date" name="leaving" required>
                </div>
            </div>

            <input type="submit" value="envoyez" class="btn" name="send">

        </form>

    </section>








    <?php
    include('./footer.php');
    ?>
</body>

</html>
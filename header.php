<html lang="en">

<head>
    <!-- <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./style/header.css" />
</head>

<body>
    <header>
        <a href="home.php" class="logo">Logo</a>
        <nav class="navbar">
            <a href="home.php">Acceuil</a>
            <a href="about.php">A propos</a>
            <a href="package.php">forfait</a>
            <a href="reservation.php">Reservation</a>
        </nav>

        <div class="icons">
            <i id="ouvrir" class="fas fa-bars"></i>
            <i id="fermer" class="fas fa-times"></i>
        </div>
    </header>

    <script>
        let icons = document.querySelector(".icons");
        let header = document.querySelector("header");
        icons.addEventListener("click", function() {
            header.classList.toggle("open");
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>
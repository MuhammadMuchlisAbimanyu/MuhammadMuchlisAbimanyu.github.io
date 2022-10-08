<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>OVERPRICED COFFEE</title>
    <link rel='icon' href='image/title-icon.png' type='image/png'>
    <link rel='stylesheet' href='style.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap' rel='stylesheet'>
</head>
<body>
    <section class='header'>
        <nav>
            <img onmouseover='onImage()' onmouseout='outImage()' src='image\logo-white.png' alt='onImage' id='logo'>
            <div class='nav-links'>
                <ul>
                    <li><a href='index.php'>HOME</a></li>
                    <li><a href='about.html'>ABOUT</a></li>
                    <li><a href='menu.html'>MENU</a></li>
                    <li><a href='contact.html'>CONTACT</a></li>
                    <li><img src='image/moon.png' id='icon'></li>
                </ul>
            </div>
        </nav>
    <div class='text-box'>
        <h1>FRESH COFFE IN THE MORNING</h1>
        <p>The special taste and aroma gives the sensation of drinking special premium coffee.</p>
        <a href='menu.html' class='button-home'>Get Yours Now</a>
    </div>
    </section>

    <section class='about'>
        <h1 class='title-white-bg'>ABOUT US</h1>
        <div class='row'>
            <div class='about-col'>
                <h2 class='title-white-bg'>Our Company</h2>
                <p>OVERPRICED COFFEE is a Coffee Shop with in-depth knowledge <br> and experience in Industry Coffee.</p>
            </div>
            <div class='about-col'>
                <div class='image-about'></div>
            </div>
            <div class='about-col'>
                <h2 class='title-white-bg'>Our Owner</h2>
                <p>Muhammad Muchlis Abimanyu <br> 2109106069 <br> INFORMATIKA</p>
            </div>
        </div>
    </section>

    <section class='menu'>
        <h1 class='title-white-bg'>MENU</h1>
        <div class='row-menu'>
            <div class='menu-col'>
                <div class='card-menu'>
                    <img src='image/menu-1.jpg'>
                    <h3 class='name-menu'>Americano</h3>
                    <p class='price'>$10</p>
                    <a href="order.php" class='button-menu'>Buy</a>
                </div>
            </div>
            <div class='menu-col'>
                <div class='card-menu'>
                    <img src='image/menu-2.jpg'>
                    <h3 class='name-menu'>Latte</h3>
                    <p class='price'>$12</p>
                    <a href="order.php" class='button-menu'>Buy</a>
                </div>
            </div>
            <div class='menu-col'>
                <div class='card-menu'>
                    <img src='image/menu-3.jpg'>
                    <h3 class='name-menu'>Cappucino</h3>
                    <p class='price'>$15</p>
                    <a href="order.php" class='button-menu'>Buy</a>
                </div>
            </div>
            <div class='menu-col'>
                <div class='card-menu'>
                    <img src='image/menu-4.jpg'>
                    <h3 class='name-menu'>Racist Coffee</h3>
                    <p class='price'>$69</p>
                    <a href="order.php" class='button-menu'>Buy</a>
                </div>
            </div>
        </div>
    </section>
    <section class='footer'>
        <h1>@Copyright 2022 - by Muhammad Muchlis Abimanyu</h1>
    </section>
    <script type='text/javascript' src='script.js'></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>EndorPhone</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="header">
            <div class="wrapper">
                <div class="top">
                    <div class="logo"></div>
                    <nav>
                        <div class="topnav" id="myTopnav">
                            <a href="">Work</a>
                            <a href="">ABOUT</a>
                            <a href="">Blog</a>
                            <a href="">Contact</a>
                            <a href="#" id="menu" class="icon">&#9776;</a>
                        </div>
                    </nav>
                </div>
                <div class="w-66">
                    <p>Modern branding agency</p>
                    <h1>We are about to change the way you publish on web</h1>
                    <a class="arrow"  href="#about"></a>
                </div>
            </div>
        </header>
        <section class="about" id="about">
            <div class="wrapper">
                <div class="w-66">
                    <h2>About Our Agency</h2>
                <p>We are a new brand studio based in USA. We have over 20 years of combined experience, and know a thing or two about designing websites and mobile apps. Clever use of technology and lean processes enable us to work faster and smarter.</p>
                <button id="joinUs">Join Us</button>
                </div>
            </div>
        </section>
        <section class="numbers">
                <div class="container_numbers">
                    <div class="number">
                        <div class="left">
                            <img src="img/portfolio.png" alt="portfolio">
                        </div>
                        <div class="right">
                            <h6>548</h6>
                            <p>projects completed</p>
                        </div>
                    </div>
                    <div class="number">
                        <div class="left">
                            <img src="img/clock.png" alt="clock">
                        </div>
                        <div class="right">
                            <h6>1465</h6>
                            <p>WORKING HOURS</p>
                        </div>
                    </div>
                    <div class="number">
                        <div class="left">
                            <img src="img/star.png" alt="star">
                        </div>
                        <div class="right">
                            <h6>612</h6>
                            <p>POSITIVE FEEDBACKS</p>
                        </div>
                    </div>
                    <div class="number">
                        <div class="left">
                            <img src="img/like.png" alt="like">
                        </div>
                        <div class="right">
                            <h6>735</h6>
                            <p>HAPPY CLIENTS</p>
                        </div>
                    </div>
                </div>
        </section>
        <section class="clients">
            <div class="container">
                <div class="client">
                    <img src="img/Handmade.png" alt="Handmade">
                </div>
                <div class="client">
                    <img src="img/Monntain.png" alt="Monntain">
                </div>
                <div class="client">
                    <img src="img/Collection.png" alt="Collection">
                </div>
                <div class="client">
                    <img src="img/MonntainBike.png" alt="MonntainBike">
                </div>
                <div class="client">
                    <img src="img/Handmade.png" alt="Handmade">
                </div>
            </div>
        </section>
        <section class="contacts">
            <div class="container">
                <div class="block__contacts">
                    <h2>Contact Info</h2>
                    <p>Praesent interdum congue mauris, et fringilla lacus pel vitae. Quisque nisl mauris, aliquam eu ultrices vel, conse vitae sapien at imperdiet risus. Quisque cursus risus id. fermentum, in auctor quam consectetur.</p>
                    <p class="address"><b>Address:</b> 10111 Santa Monica Boulevard, LA</p>
                    <p class="address"><b>Phone:</b> +44 987 065 908</p>
                    <p class="address"><b>Email:</b> info@aaagency.com</p>
                </div>
                <div class="block__map">
                    <div id="map"></div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="block__about__us">
                    <h5>About Us</h5>
                    <p>Aenean mattis augue in arcu tempor bibendum. Nam euismod facilisis magna, quis pharetra turpis molestie eu. Integer feugiat arcu sit amet leo ullamcorper feugiat efficitur.</p>
                    <div class="block__icons">
                        <img src="img/facebook.png" alt="facebook">
                        <img src="img/twitter.png" alt="twitter">
                        <img src="img/google-plus.png" alt="google-plus">
                        <img src="img/behance.png" alt="behance">
                        <img src="img/pinterest.png" alt="pinterest">
                        <img src="img/instagram.png" alt="instagram">
                    </div>
                </div>
                <div class="block__twits">
                    <h5>Latest Twits</h5>
                    <li>Duis eget finibus nibh. Vivamus sagittis vulputate risus ac tincidunt.</li>
                    <li>Nam semper tortor sit amet arcu malesu ada, a sagittis tellus facilisis.</li>
                    <li>Etiam cursus, tortor id pretium tincidunt, justo leo porta magna.</li>
                </div>
                <div class="block__instagram">
                    <h5>Instagram</h5>
                    <img src="img/Layer-31.png" alt="instagram_photo">
                    <img src="img/21.png" alt="instagram_photo">
                    <img src="img/3.png" alt="instagram_photo">
                    <img src="img/4.png" alt="instagram_photo">
                    <img src="img/5.png" alt="instagram_photo">
                    <img src="img/6.png" alt="instagram_photo">
                    <img src="img/7.png" alt="instagram_photo">
                    <img src="img/8.png" alt="instagram_photo">
                </div>
            </div>
        </footer>
        <div class="modal" id="modal">
            <span class="close">&#9932;</span>
            <div class="modal__content">
                <h2>Join Us</h2>
                <div class="input__content">
                    <form class="" action="#" method="post" name="form" onsubmit="return vaidatForm()">
                        <input class="inputName" type="text" placeholder="Your Name">
                        <input class="inputPhone" type="text" placeholder="Your Phone" id="phoneNumber" required>
                        <input class="inputEmail" type="text" placeholder="Your Email" name='email' id="email" required>
                        <textarea class="inputContent" name="name" rows="8" cols="80" placeholder="Content"  maxlength="1000" id="content" required></textarea>
                        <button type="submit" onclick="validate(phoneNumber,email, content)">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js">
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
    </body>
</html>

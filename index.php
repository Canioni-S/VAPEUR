<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HOME PAGE</title>
</head>

<body>

    <!-- TOP NAVIGATION BAR -->
    <div id="myTopNav" class="TopNavContainer">
        <div class="LeftTopNav">
            <div class="MenuBurgerContainer" onclick="Burgerfunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <a href="#" class="TopNavItems"><i class="fas fa-store"></i>
                <h3>store</h3>
            </a>
            <a href="./form.php" class="TopNavItems"><i class="fas fa-gamepad"></i>
                <h3>my games</h3>
            </a>
            <a href="./form.php" class="TopNavItems"><i class="fas fa-user"></i>
                <h3>my profile</h3>
            </a>
        </div>
    </div>

    <!-- LEFT NAVIGATION BAR -->
    <div id="myLeftNav" class="LeftNavContainer">
        <div class="LeftNavItems">
            <a class="dropdown-btn" href="#">
                <h3>discovery queues &#9660;</h3>
            </a>
            <div class="dropdown-container">
                <a href="#">recommendations</a>
                <a href="#">new release</a>
            </div>
        </div>
        <div class="LeftNavItems">
            <a class="dropdown-btn" href="#">
                <h3>browse categories &#9660;</h3>
            </a>
            <div class="dropdown-container">
                <a href="#">top sellers</a>
                <a href="#">upcoming</a>
                <a href="#">specials offers</a>
                <a href="#">more categories</a>
            </div>
        </div>
        <div class="LeftNavItems">
            <a class="dropdown-btn" href="#">
                <h3>browse by genre &#9660;</h3>
            </a>
            <div class="dropdown-container">
                <a href="#">free to play</a>
                <a href="#">early access</a>
                <a href="#">action</a>
                <a href="#">adventure</a>
                <a href="#">casual</a>
                <a href="#">indie</a>
                <a href="#">more genre</a>
            </div>
        </div>
    </div>

    <div class="MainContainer">
        <!-- FEATURED & RECOMMENDED CARROUSEL -->
        <h2>featured & recommended</h2>
        <div class="CarrouselContainer">

            <!-- CARROUSEL 1 SLIDE 1 -->
            <div class="Carrousel">
                <div class="CarrouselLeftContent">
                    <img src="./images/age_of_empire_IV/age_of_empire_IV.jpg" alt="Age_of_empire_4">
                </div>
                <div class="CarrouselRightContent">
                    <div class="CarrouselRightTopContent">
                        <div class="GameMiniImages"><img src="./images/age_of_empire_IV/age_of_empire_IV_min1.jpg" alt="Age_of_empire_4_ingame_image"></div>
                        <div class="GameMiniImages"><img src="./images/age_of_empire_IV/age_of_empire_IV_min2.jpg" alt="Age_of_empire_4_ingame_image"></div>
                        <div class="GameMiniImages"><img src="./images/age_of_empire_IV/age_of_empire_IV_min3.jpg" alt="Age_of_empire_4_ingame_image"></div>
                        <div class="GameMiniImages"><img src="./images/age_of_empire_IV/age_of_empire_IV_min4.jpg" alt="Age_of_empire_4_ingame_image"></div>
                    </div>
                    <div class="CarrouselRightBotContent">
                        <p class="GameDescription">Age of Empires IV sur PC est un jeu de stratégie qui appartient à la
                            célèbre saga de stratégie. Il vous sera possible de prendre part à des batailles historiques
                            avec des armées possédant leurs propres caractéristiques.</p>
                        <button>price & buy the game</button>
                    </div>
                </div>
            </div>

            <!-- CARROUSEL 1 SLIDE 2 -->
            <div class="Carrousel">
                <div class="CarrouselLeftContent">
                    <img src="./images/battlefield_2042/battlefield_2042.jpg" alt="Battlefield_2042">
                </div>
                <div class="CarrouselRightContent">
                    <div class="CarrouselRightTopContent">
                        <div class="GameMiniImages"><img src="./images/battlefield_2042/battlefield_2042min1.jpg" alt="battlefield_2042_ingame_image"></div>
                        <div class="GameMiniImages"><img src="./images/battlefield_2042/battlefield_2042min2.jpg" alt="battlefield_2042_ingame_image"></div>
                        <div class="GameMiniImages"><img src="./images/battlefield_2042/battlefield_2042min3.jpg" alt="battlefield_2042_ingame_image"></div>
                        <div class="GameMiniImages"><img src="./images/battlefield_2042/battlefield_2042min4.jpg" alt="battlefield_2042_ingame_image"></div>
                    </div>
                    <div class="CarrouselRightBotContent">
                        <p class="GameDescription">Battlefield 2042 est un jeu de tir à la première personne multijoueur
                            ancré dans un futur dystopique. Deux nations mènent une guerre totale, les Etats-Unis et la
                            Russie.</p>
                        <button>price & buy the game</button>
                    </div>
                </div>
            </div>

            <!-- CARROUSEL 1 SLIDE 3 -->
            <div class="Carrousel">
                <div class="CarrouselLeftContent">
                    <img src="./images/free_to_play/path_of_exiles/path_of_exile.jpg" alt="Path_Of_Exile">
                </div>
                <div class="CarrouselRightContent">
                    <div class="CarrouselRightTopContent">
                        <div class="GameMiniImages"><img src="./images/free_to_play/path_of_exiles/poe_min1.webp" alt="Path_Of_Exile_ingame_image"></div>
                        <div class="GameMiniImages"><img src="./images/free_to_play/path_of_exiles/poe_min2.jpg" alt="Path_Of_Exile_ingame_image">
                        </div>
                        <div class="GameMiniImages"><img src="./images/free_to_play/path_of_exiles/poe_min3.jpg" alt="Path_Of_Exile_ingame_image">
                        </div>
                        <div class="GameMiniImages"><img src="./images/free_to_play/path_of_exiles/poe_min4.jpg" alt="Path_Of_Exile_ingame_image">
                        </div>
                    </div>
                    <div class="CarrouselRightBotContent">
                        <p class="GameDescription">Path of Exile est un jeu de rôle hack'n slash qui vous entraînera
                            dans un univers post-apocalyptique particulièrement sombre, vous devrez choisir votre
                            personnage parmi les sept classes différentes. Votre but sera de faire évoluer votre héro en
                            équipant de nouveaux objets et en améliorant vos compétences.</p>
                        <button>price & buy the game</button>
                    </div>
                </div>
            </div>

            <!-- CARROUSEL 1 SLIDE 4 -->
            <div class="Carrousel">
                <div class="CarrouselLeftContent">
                    <img src="./images/gran_turismo_7/gran_turismo_7.jpg" alt="Gran_Turismo_7">
                </div>
                <div class="CarrouselRightContent">
                    <div class="CarrouselRightTopContent">
                        <div class="GameMiniImages"><img src="./images/gran_turismo_7/gt7min1.jpg" alt="Gran_Turismo_7_ingame_image">
                        </div>
                        <div class="GameMiniImages"><img src="./images/gran_turismo_7/gt7min2.jpg" alt="Gran_Turismo_7_ingame_image">
                        </div>
                        <div class="GameMiniImages"><img src="./images/gran_turismo_7/gt7min3.jpg" alt="Gran_Turismo_7_ingame_image">
                        </div>
                        <div class="GameMiniImages"><img src="./images/gran_turismo_7/gt7min4.jpg" alt="Gran_Turismo_7_ingame_image">
                        </div>
                    </div>
                    <div class="CarrouselRightBotContent">
                        <p class="GameDescription">Gran Turismo 7 est un jeu de simulation automobile sur PlayStation 5
                            développé par Polyphony Digital et édité par Sony Interactive Entertainment. Il s'agit du
                            huitième volet principal de la saga de Playstation.</p>
                        <button>price & buy the game</button>
                    </div>
                </div>
            </div>


            <!-- CARROUSEL DOTS -->
        </div>
        <div class="CarrouselDots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
        <!-- CARROUSEL BOUTTONS -->
        <button class="CarrouselLeftBtn" onclick="plusSlides(-1)">&#10094;</button>
        <button class="CarrouselRightBtn" onclick="plusSlides(1)">&#10095;</button>
    </div>


    <script>
        function Burgerfunction(x) {
            x.classList.toggle("change");

            var y = document.getElementById("myTopNav");
            if (y.className == "TopNavContainer") {
                y.className += " responsive";
            } else {
                y.className = "TopNavContainer";
            }

            var z = document.getElementById("myLeftNav");
            if (z.className == "LeftNavContainer") {
                z.className += " responsive";
            } else {
                z.className = "LeftNavContainer";
            }
        }



        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }


        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("Carrousel");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active2", "");
            }
            slides[slideIndex - 1].style.display = "flex";
            dots[slideIndex - 1].className += " active2";
        }
    </script>
</body>

</html>
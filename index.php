<?php
    if ($_SERVER['REQUEST_URI'] == '/index.php/istoriya') {
        header('Location: https://history.samaracardio.ru/index.php/istoriyaru');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>СамараКардио|Главная</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="./index.html" class="navigation-menu__link"><img src="./assets/img/logo@2x.png" alt="" class="logo"></a>
            <nav>
                <ul class="navigation-menu">
                  <li class="navigation-menu__item"><a href="#conference" class="navigation-menu__link">Конференция</a></li>
                  <li class="navigation-menu__item"><a href="#announce" class="navigation-menu__link">Объявления</a>
                  <li class="navigation-menu__item"><a href="#organizers" class="navigation-menu__link">Организаторы</a></li>
                  <li class="navigation-menu__item"><a href="https://history.samaracardio.ru/index.php/istoriyaru" class="navigation-menu__link">История</a></li>
                </ul>
                <div class="hamburger-menu">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                      <span></span>
                    </label>
                    <ul class="menu__box">
                        <li><a class="menu__item" href="#conference">Конференция</a></li>
                        <li><a class="menu__item" href="#">Объявления</a></li>
                        <li><a class="menu__item" href="#organizers">Организаторы</a></li>
                        <li><a class="menu__item" href="https://history.samaracardio.ru/index.php/istoriyaru">История</a></li>
                    </ul>                    
                </div>
              </nav>
        </div>
    </header>
    <main>
        <section id="conference" class="conference">
            <div class="container">
                <div class="conference__head">
                    <h2 class="conference__name">
                        12-я Всероссийская конференция
                        <span class="orange">«Противоречия современной кардиологии:
                        спорные и нерешенные вопросы»</span>
                        20-21 октября 2023 года
                    </h2>
                </div>
                <div class="conference__content">
                    <div class="column">
                        <div class="conference__info">
                            <p class="conference__info_place">
                                Место проведения:<br>
                                г. Самара, отель Холидей Инн, ул. А. Толстого 99.
                                <button id="buttonMap" class="button">Посмотреть на карте</button>
                                <p id="map" class="map">
                                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A53263f491dcc7aae235e00624f80e4fada00f164ce389aa47fe8d4b406899636&amp;width=100%&amp;height=350px&amp;lang=ru_RU&amp;scroll=true"></script>
                                </p> 
                            </p>
                            <p class="conference__info_stream">
                                Ресурс трансляции:<br>
                                <a href="https://stream.samaracardio.ru/">https://stream.samaracardio.ru/</a>
                            </p>
                            <p class="conference__info_languages">
                                Языки конференции: русский и английский
                            </p>
                            <p class="conference__info_message">
                                Подача тезисов будет открыта 1 апреля!
                            </p>
                            <div class="conference__info_buttons">
                                <button class="button"><a href="./assets/attachments/info_2023.pdf">Информационное письмо</a></button>
                                <button class="button"><a href="https://reg.samaracardio.ru/">Регистрация</a></button>   
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="conference__greetings">
                            <img class="conference__greetings_img" src="./assets/img/greetings_img.jpeg" onclick="openModal()" />
                            <div id="video-modal">
                              <div class="modal-content">
                                <video  id="video_player" src="./assets/media/greetings.mp4" controls />
                                <span onclick="closeModal()">&times;</span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="announce" class="announce">
            <div class="container">
                <div id="slider" class="announce__content">
                    <p class="slide active-slide">
                        <span class="text-attention">УВАЖАЕМЫЕ КОЛЛЕГИ!</span>
                        Приглашаем Вас принять участие в работе 12-ой Всероссийской конференции «Противоречия современной кардиологии: спорные и нерешенные вопросы», которая состоится 20-21 октября 2023 года
                    </p>
                    <p class="slide">
                        <span class="text-attention">ВНИМАНИЕ!</span>
                        Опубликована запись трансляции 11-й Всероссийской конференции «Противоречия современной кардиологии: спорные и нерешенные вопросы»! 
                        <a href="https://history.samaracardio.ru/index.php/istoriya">Посмотреть</a>
                    </p>
                </div>
            </div>
        </section>
        <section id="organizers" class="organizers">
            <div class="container">
                <div class="organizers__head">
                    <h2 class="organizers__name">
                        Организаторы конференции
                    </h2>
                </div>
                <div class="organizers__content">
                    <div class="organizers__item">
                        <img src="./assets/img/smz.png" alt="Министерство здравоохранения Самарской области">
                        <p>
                            Министерство здравоохранения Самарской области
                        </p>
                    </div>
                    <div class="organizers__item">
                        <img src="./assets/img/samsmu.png" alt="Самарский государственный медицинский университет">
                        <p>
                            Самарский государственный медицинский университет
                        </p>
                    </div>
                    <div class="organizers__item">
                        <img src="./assets/img/rco.png" alt="Российское кардиологическое общество">
                        <p>
                            Российское кардиологическое общество
                        </p>
                    </div>
                    <div class="organizers__item">
                        <img src="./assets/img/sokkd.jpg" alt="Самарский областной клинический кардиологический диспансер им. В.П. Полякова">
                        <p>
                            Самарский областной клинический кардиологический диспансер им. В.П. Полякова
                        </p>
                    </div>    
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p>© Все права защищены.</p>
    </footer>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('buttonMap').addEventListener("click", function(){
            if (document.getElementById('map').style.display === "none") {
                document.getElementById('map').style.display = "block";
            } else {
                document.getElementById('map').style.display = "none";
            }});
        });
        function openModal() {
            document.getElementById('video-modal').classList.add('open');
            document.getElementById('video_player').play();
        }
        window.onclick = function(event) {
            var modal = document.getElementById('video-modal');
            if (event.target == modal) {
            document.getElementById('video-modal').classList.remove('open');
            document.getElementById('video_player').pause();
            }
        }
        window.ontouchstart = function(event) {
            var modal = document.getElementById('video-modal');
            if (event.target == modal) {
            document.getElementById('video-modal').classList.remove('open');
            document.getElementById('video_player').pause();
            }
        }
        let slider = document.getElementById("slider");
        let slides = slider.querySelectorAll(".slide");
        let currentSlide = 0;
        let slideInterval = setInterval(nextSlide, 9000);

        function nextSlide(){
            slides[currentSlide].className = "slide";
            currentSlide = (currentSlide+1)%slides.length;
            slides[currentSlide].className = "slide active-slide";
        }
    </script>

</body>
</html>
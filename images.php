<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>ফটো গ্যালারী</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap" rel="stylesheet" />

        <link href="css/modern-business.css" rel="stylesheet" />
        <!-- bangla fonts link -->
        <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/style2.css" />
        <style>
            /* Position the image container (needed to position the left and right arrows) */
            /* .container {
    position: relative;
  } */

            /* Hide the images by default */
            .mySlides {
                display: none;
                margin-top: 75px;
            }

            /* Add a pointer when hovering over the thumbnail images */
            .cursor {
                cursor: pointer;
            }

            /* Next & previous buttons */
            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 40%;
                width: auto;
                padding: 16px;
                margin-top: -50px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                border-radius: 0 3px 3px 0;
                user-select: none;
                -webkit-user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
                background-color: rgba(0, 0, 0, 0.9);
            }

            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            /* Container for image text */
            .caption-container {
                text-align: center;
                background-color: #222;
                padding: 2px 16px;
                color: white;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Six columns side by side */
            .column {
                float: left;
                width: 16.66%;
            }

            /* Add a transparency effect for thumnbail images */
            .demo {
                opacity: 0.6;
            }

            .active,
            .demo:hover {
                opacity: 1;
            }
            @media (max-width: 568px) {
                .gallery {
                    height: 250px;
                    width: 100%;
                }
            }
            @media (max-width: 568px) {
                .demo {
                    height: 70px;
                    width: 100%;
                }
            }
            @media (min-width: 569px) {
                .gallery {
                    height: 400px;
                    width: 100%;
                }
            }
            @media (min-width: 569px) {
                .demo {
                    height: 120px;
                    width: 100%;
                }
            }
            @media (min-width: 850) {
                .gallery {
                    height: 600px;
                    width: 100%;
                }
            }
            @media (min-width: 850) {
                .demo {
                    height: 120px;
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>
        <?php
include_once ('includes/header.php');
?>

        <!-- Container for the image gallery -->
        <div class="container" style="background: #f1f1f1;">
            <!-- Full-width images with number text -->
            <div class="mySlides">
                <div class="numbertext">1 / 12</div>
                <img class="gallery" src="pic/1.jpg" />
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 12</div>
                <img class="gallery" src="pic/2.jpg" />
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 12</div>
                <img class="gallery" src="pic/3.jpg" />
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 12</div>
                <img class="gallery" src="pic/4.jpg" />
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 12</div>
                <img class="gallery" src="pic/5.jpg" />
            </div>

            <div class="mySlides">
                <div class="numbertext">6 / 12</div>
                <img class="gallery" src="pic/6.jpg" />
            </div>
            <div class="mySlides">
                <div class="numbertext">7 / 12</div>
                <img class="gallery" src="pic/7.jpg" />
            </div>

            <div class="mySlides">
                <div class="numbertext">8 / 8</div>
                <img class="gallery" src="pic/8.jpg" />
            </div>

            <div class="mySlides">
                <div class="numbertext">9 / 12</div>
                <img class="gallery" src="pic/9.jpg" />
            </div>

            <div class="mySlides">
                <div class="numbertext">10 / 12</div>
                <img class="gallery" src="pic/10.jpg" />
            </div>

            <div class="mySlides">
                <div class="numbertext">11 / 12</div>
                <img class="gallery" src="pic/11.jpg" />
            </div>

            <div class="mySlides">
                <div class="numbertext">12 / 12</div>
                <img class="gallery" src="pic/12.jpg" />
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Image text -->
            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <!-- Thumbnail images -->
            <div class="row" style="margin-left: 0px; margin-right: 0px;">
                <div class="column">
                    <img class="demo cursor" src="pic/1.jpg" onclick="currentSlide(1)" alt="Madrasha Building" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="pic/2.jpg" onclick="currentSlide(2)" alt="Madrasha Building" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="pic/3.jpg" onclick="currentSlide(3)" alt="Madrasha Building" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="pic/4.jpg" onclick="currentSlide(4)" alt="Madrasha Building" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="pic/5.jpg" onclick="currentSlide(5)" alt="Building under constraction" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="pic/6.jpg" onclick="currentSlide(6)" alt="Building under constraction" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="pic/7.jpg" onclick="currentSlide(7)" alt="Madrasha Main Gate" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="pic/8.jpg" onclick="currentSlide(8)" alt="Madrasha Main Gate" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="pic/9.jpg" onclick="currentSlide(9)" alt="Madrasha Main Gate" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="pic/10.jpg" onclick="currentSlide(10)" alt="Madrasha Building" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="pic/11.jpg" onclick="currentSlide(11)" alt="Madrasha Mosjid" />
                </div>
                <div class="column">
                    <img class="demo cursor" src="pic/12.jpg" onclick="currentSlide(12)" alt="Madrasha Building" />
                </div>
            </div>
        </div>
        <?php 
        include_once ('includes/footer.php');
        ?>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides((slideIndex += n));
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides((slideIndex = n));
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                var captionText = document.getElementById("caption");
                if (n > slides.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = slides.length;
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                captionText.innerHTML = dots[slideIndex - 1].alt;
            }
        </script>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/tether/tether.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>

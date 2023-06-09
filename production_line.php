<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'meta.php'; ?>
    <?php include 'cdn.php'; ?>
    <title>Wood Pillar Limited</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="production_line.css">
</head>

<body>
    <!-- <?php include 'header.php'; ?> -->
    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://placehold.jp/1800x600.png" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section>
        <div class="text-center product_title">
            <h1>Our Production Line</h1>
        </div>
        <div class="product">
            <div class="product_item">
                <p>
                    <i class="fas fa-check-circle"></i>
                    Peeler Line
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Driers
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Boiler
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Hot Press Machine
                </p>

            </div>
            <div class="product_item">
                <p>
                    <i class="fas fa-check-circle"></i>
                    Sizer
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Kuper Machine
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Knife Grinder
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Electric Guillotines
                </p>

            </div>
        </div>
    </section>

    <section>
        <div class="slidde">
            <div #swiperRef="" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./images/production_line-01.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/production_line-02.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/production_line-03.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/production_line-04.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/production_line-05.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/production_line-06.jpg" alt="">
                    </div>
                </div>

                <!-- <div class="swiper-pagination">
                    <p>Wood Pillar Limited</p>
                </div> -->
            </div>

        </div>
    </section>

    <?php include 'call_to_action.php'; ?>


    <?php include 'footer.php'; ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper2", {
            autoplay: true,
            rewind: false,
            slidesPerView: 3,
            // centeredSlides: true,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
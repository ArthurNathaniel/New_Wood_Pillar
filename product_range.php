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
    <link rel="stylesheet" href="product_range.css">
</head>

<body>
    <!-- <?php include 'header.php'; ?> -->
    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/product_range_bg.jpg" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section>
        <div class="text-center product_title">
            <h1>Our Product Range</h1>
        </div>
        <div class="product">
            <div class="product_item">
                <p>
                    <i class="fas fa-check-circle"></i>
                    Chenchen
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Ceiba
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Asenfena
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Mansonia
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Red Wood
                </p>
            </div>
            <div class="product_item">
                <p>
                    <i class="fas fa-check-circle"></i>
                    Black Ofram
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Wawa
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Kusia
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Sauna
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Dahoma
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="slidde">
            <div #swiperRef="" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./images/product-range-1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/product-range-2.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/product-range-3.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/product-range-04.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/product-range-05.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/product-range-06.jpg" alt="">
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
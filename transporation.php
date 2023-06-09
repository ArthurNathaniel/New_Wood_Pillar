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
    <link rel="stylesheet" href="forestry.css">
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
        <div class="corperate">
            <div class="environment_image">
                <img src="" alt="wood-pillar ltd transportation image or photo">
            </div>
            <div class="environment_text">
                <h2>Transportation</h2>
                <p>
                    We pride ourselves on having a reliable and efficient transport section that
                    is equipped with 12 timber trucks and a range of other high-quality forest
                    machinery, including skidders, dozers, and timber jacks. Our investment in
                    top-of-the-line equipment ensures that we can handle large volumes of timber
                    and transport them safely and efficiently to our customers.
                </p>
                <p>
                    Our team of experienced drivers and operators are trained in safe and
                    responsible driving practices, and are equipped with the latest technology
                    to ensure timely delivery and tracking of our raw materials. We are
                    committed to meeting the needs of our customers while also minimizing
                    our impact on the environment.
                </p>
                <p>
                    In addition to our timber trucks, we also have a range of forest machinery
                    that helps us to efficiently extract and process logs from our concessions.
                    Our skidders, dozers, and timber jacks are carefully maintained to ensure
                    that they are always in top condition, and are operated by skilled
                    professionals who understand the importance of sustainability and
                    responsible forest management.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="para">
            <h1>
                Wood Pillar LTD prioritizes re-afforestation as part of its operations and is transforming an area of over 1200ha into a forest.
            </h1>
        </div>
    </section>

    <?php include 'call_to_action.php'; ?>


    <?php include 'footer.php'; ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

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
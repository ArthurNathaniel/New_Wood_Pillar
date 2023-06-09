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
</head>

<body>
    <!-- <?php include 'header.php'; ?> -->
    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/contact-bg.jpg" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section>
        <div class="row contact">
            <div class="col-md-6 map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31704.152060158816!2d-1.574652!3d6.644561!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb93941ac48587%3A0xbb5cab912f211df9!2sWood%20Pillar%20Ltd!5e0!3m2!1sen!2sgh!4v1686166102809!5m2!1sen!2sgh" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 get">
                <div class="touch">
                    <h1><i class="fas fa-map-marker-alt"></i></h1>
                    <p> Chirapatre Opposite Ramseyer Vocational School Off. The Kumasi- Lake Road </p>
                </div>
                <div class="touch">
                    <h1><i class="fas fa-phone"></i></h1>
                    <p><a href="tel:+233204222013">+233 204 222 013</a></p>
                </div>
                <div class="touch">
                    <h1><i class="fas fa-envelope"></i></h1>
                    <p><a href="mailto:info@woodpillar.net">info@woodpillar.net</a></p>
                </div>
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

<!-- <style>
    .para{
        margin-left: 5%;
        margin-right: 5%;
        width: 90%;
    }
</style> -->

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
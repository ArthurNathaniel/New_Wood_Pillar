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
    <link rel="stylesheet" href="corperate_responsibility.css">
</head>

<body>
    <!-- <?php include 'header.php'; ?> -->
    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/log-bg.jpg" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section>
        <div class="corperate">
            <div class="environment_image">
                <img src="./images/environment.png" alt="">
            </div>
            <div class="environment_text">
                <h2>Our Logs</h2>
                <p>
                    We take pride in sourcing only the highest quality logs from our concessions
                    in Ghana. Additionally, we are always open to working with other reliable
                    suppliers to expand our network and provide even more options to our clients.
                </p>
                <p>
                    Our experienced forest team works closely with the Ghana Forestry Commission
                    to ensure that all trees are mature and commercially viable before they are
                    harvested. This not only ensures the sustainability of our forests, but also
                    guarantees the quality and value of our products.
                </p>
                <p>
                    At our log yard, we have invested in state-of-the-art equipment including a
                    40-tonne overhead crane to ensure efficient offloading and handling of the
                    logs. This also cater for a range of industrial purposes.
                </p>
                <p>
                    We are committed to providing our customers with top-quality products, while
                    ensuring that our operations are environmentally sustainable and socially
                    responsible. As such, we strive to continuously improve our processes and
                    maintain our position as a leader in the timber industry
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
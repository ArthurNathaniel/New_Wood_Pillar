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
                    <img src="./images/forestry-bg.jpg" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section>
        <div class="corperate">
            <div class="environment_image">
                <img src="" alt="wood-pillar ltd concession image or photo">
            </div>
            <div class="environment_text">
                <h2>Concessions</h2>
                <p>
                    At Wood Pillar Ltd, we understand that the success and sustainability of a
                    timber company relies on the responsible management of its forest resources.
                    This is why we prioritize conservation efforts and work in collaboration
                    with various stakeholders, including local communities, conservation
                    organizations, and other companies, to ensure our practices are sustainable.
                    Our commitment to responsible forestry is demonstrated by our certification
                    program, which verifies that our operations meet sustainable forest
                    management standards.
                </p>
                <p>
                    We are passionate about ensuring that our customers receive high-quality
                    products that are sourced from responsibly managed forests. By doing so,
                    we incentivize responsible forest management and contribute to a more
                    sustainable future for the planet and future generations.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="responsibility">

            <div class="for_the_people">
                <h2>Re-Afforestation</h2>
                <p>
                    Wood Pillar Ltd is embarking on vigorous reforestation projects to revive
                    degraded forests, become self-reliant, and maintain consistency in the
                    timber business. The company believes that planted forests can provide
                    social, economic, and environmental benefits, as well as contribute to
                    satisfying the world's need for forest products. This initiative aims to
                    reduce pressure on natural forests and promote their restoration and
                    conservation. The company has already reforested a significant area and
                    has ongoing projects that include planting multiple tree species, including
                    Teak and Mahogany. These efforts demonstrate Wood Pillar Ltd's commitment to
                    sustainability and responsible forestry practices.
                </p>
            </div>

            <div class="for_the_people_image">
                <img src="" alt="wood pillar ltd re-afforestation image or photo">
            </div>

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
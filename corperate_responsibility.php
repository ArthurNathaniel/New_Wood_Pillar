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
                    <img src="./images/cp-bg.jpg" alt="">
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
                <h2>For the Environment</h2>
                <p>
                    As a veneer and plywood producer, we naturally have a particular responsibility
                    to contribute to the timber industry's combined efforts to limit environmental
                    deterioration. Hence, in our sourcing of logs, we at Wood Pillar, adhere to a
                    "no illegal logs" policy. Strict adherence to this policy in the long run will
                    ensure a long term and uninterrupted supply of logs for our operation.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="responsibility">

            <div class="for_the_people">
                <h2>For the People</h2>
                <p>
                    We have responsibilities to our employees, the core of our success and growth.
                    Apart from financial rewards, we also provide training programs for our employees
                    to ensure they are equipped with appropriate skills and knowledge to work. We also
                    support our community and government agencies with our products and services.
                </p>
            </div>

            <div class="for_the_people_image">
                <img src="images/for_the_people.png" alt="">
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
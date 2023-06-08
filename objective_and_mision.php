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
    <link rel="stylesheet" href="objective_and_mision.css">
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
        <div class="objective row">

            <div class="objective_text col-md-6">
                <h2>Objectives</h2>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Optimise cost and maximise revenue through effective management and profitable growth.
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    To fulfil our key responsible roles through effective advocacy and management of stakeholder expectations.
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
                    Employ integrated approach to ensure uninterrupted product availability through safe and incident-free operations.
                </p>
                <p>
                    <i class="fas fa-check-circle"></i>
Attain efficient and effective world class organisational capability.
                </p>
                <!-- <p>
                    <i class="fas fa-check-circle"></i>
                </p> -->
            </div>

            <div class="mission_text col-md-6">
                <h2>Mission</h2>
                <p>
                    To build long term relationships with our clients by pursuing business through
                    innovative technology and to be a reference point when it comes to premium
                    quality Plywood and Rotary Veneer.
                </p>

                <p>
                    To achieve the vision for the company, it is necessary to have a team of competent, dynamic, and vibrant people with integrity to drive the company towards its strategic vision.
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
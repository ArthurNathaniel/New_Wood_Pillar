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
                    <img src="https://placehold.jp/1800x600.png" alt="">
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
                <h2>Hot Press Production</h2>
                <p>
                    Hot press production is a highly effective method for producing high-quality
                    veneer products with accurate precision. By using heat and pressure to bond
                    layers of veneer together, hot press production creates a strong and durable
                    product that is able to withstand a wide range of environmental conditions.
                </p>
                <p>
                    One of the key benefits of hot press production is that the combination of
                    heat and pressure allows for tight and consistent bonding between the layers
                    of veneer, resulting in a plywood that is highly uniform in thickness and
                    overall quality. This precision ensures that the plywood is able to maintain
                    its structural integrity, even under heavy use or exposure to extreme
                    temperatures.
                </p>
                <p>
                    We are committed to using the latest hot press production techniques to
                    create the highest-quality veneer products for our customers. Our
                    state-of-the-art hot press equipment is carefully maintained and operated
                    by skilled professionals who understand the importance of accuracy and
                    precision in veneer production. We take great pride in our ability to
                    deliver exceptional products that meet the highest standards of quality
                    and durability.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="responsibility">

            <div class="for_the_people">
                <h2>Ensure Calibration</h2>
                <p>
                    At Wood Pillar Limited, we are committed to delivering high-quality products to
                    our customers. To achieve this, we take great care in ensuring that our equipment
                    is properly calibrated and maintained at all times. As part of our commitment to
                    quality control, we perform regular calibrations every week before production
                    starts, which includes checking the accuracy of our thickness, temperature
                    control, and pressure control systems.
                </p>
                <p>
                    Calibration is a critical step in ensuring that our equipment is functioning properly
                    and that we are able to produce products that meet the highest standards of quality and
                    precision. By performing regular calibrations, we are able to identify and address any
                    potential issues before they become major problems, ensuring that our production process
                    runs smoothly and efficiently.
                </p>
                <p>
                    Our team of skilled professionals at Wood Pillar Limited is trained to perform these
                    calibrations with precision and accuracy, using the latest technology and techniques
                    to ensure that our equipment is functioning at peak performance. We take great pride
                    in our commitment to quality control, and we believe that our regular calibrations are
                    an essential part of our process to deliver exceptional products to our customers.
                </p>
            </div>

            <div class="for_the_people_image">
                <img src="images/for_the_people.png" alt="">
            </div>

        </div>
    </section>

    <section>
        <div class="corperate">
            <div class="environment_image">
                <img src="./images/environment.png" alt="">
            </div>
            <div class="environment_text">
                <h2>Ensure Excellent Glue Mixture</h2>
                <p>
                    We understand that the quality of our glue mixture is crucial to the bonding
                    of our products. To ensure the best possible glue mixture, we closely
                    monitor the glue-flour-water ratio throughout our production process.
                </p>
                <p>
                    Our team of experienced professionals has extensive knowledge of the ideal
                    ratios for glue, flour, and water, and we use this knowledge to create a
                    perfectly balanced mixture. We use high-quality ingredients to create our
                    glue, flour, and water mixture, and we carefully measure and monitor each
                    ingredient to ensure consistency and accuracy.
                </p>
                <p>
                    By closely monitoring the glue-flour-water ratio, we are able to create a
                    glue mixture that provides excellent adhesion and strength, while also
                    ensuring that our products meet the highest standards of quality and
                    durability. We take great pride in our commitment to quality control,
                    and our dedication to creating the best possible glue mixture is a key
                    part of this commitment.
                </p>
                <p> We are dedicated to providing our customers with the highest-quality products.
                    Our attention to detail and commitment to excellence in every aspect of our
                    production process, including monitoring the glue-flour-water ratio, is what
                    sets us apart from our competitors. 
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
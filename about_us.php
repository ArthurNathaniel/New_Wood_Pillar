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
    <link rel="stylesheet" href="about.css">
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
        <div class="row story">
            
            <div class="col-md-12">
                <h1 class="text-center">About Us</h1>
                <p>
                    Wood Pillar Limited (WPL) is a limited liability company incorporated in June 1994 under
                    the companies Act, 1963(Act 179) situated in Kumasi, Ghana, for the manufacturing of
                    various wood products.
                    <br>
                    The company's main mandate is to production of plywood of various thickness and Rotary
                    Veneer to both local and foreign customers in Burkina Faso, Niger and Ghana in a safe,
                    responsible and reliable manner, at prices competitive with other plywood alternatives.
                    <br>
                    Since inception it has been one of the leading and reputable wood processing companies
                    in Ghana and in the West African sub-Region which is specialized in the production of
                    premium quality Plywood and Rotary Veneer and customer satisfaction is our hallmark.
                    <br>
                    Throughout the years, we have shown remarkable strength in the face of stiff competition
                    and our growth has been impressive with a current total workforce of about 300 employees.

                    At Wood Pillar, we know that the future of our company depends on the future of nature.
                    That’s the reason why we take care of every detail in our production process to ensure
                    environmental sustainability.
                    <br>
                    We owe responsibilities to our employees, the core of our success and growth. Apart from
                    financial rewards, we also provide training programs for our employees to ensure they are
                    equipped with appropriate skills and knowledge to grow and prosper together with the
                    company they work for.
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
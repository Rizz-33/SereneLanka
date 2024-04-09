<!DOCTYPE html>
<html lang="en">

<?php include 'includes/db_conntect.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>Blog</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/blog.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        .blog-content a:nth-child(1) div {
            background-color: rgb(230, 230, 230);
        }

        .blog-content a:nth-child(1) p {
            color: var(--text-color-hover);
        }

        .menu-blog-content a:nth-child(2) div {
            background-color: var(--text-color-hover);
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include 'includes/menu.php'; ?>

        <div class="content">
            <?php include 'includes/nav.php'; ?>
            <section>

                <!-- Write all the content here -->

                <div class="most-visited">
                    <div class="box">
                        <div class="most-visited-header">
                            <h1>Top 10 most visited places in Sri Lanka</h1>


                            <div class="most-visited-blog-list-content">

                                <div class="most-visited-blog-list">
                                    <img src="images/blog/sigiriya.jpeg" alt="">
                                    <h3>Sigiriya</h3>
                                    <p>
                                        Sigiriya is an ancient rock fortress in Sri Lanka, It was a palace of king
                                        Kashyapa. Offers stunning views, steep staircases, and iconic Lion's Paw
                                        entrance. UNESCO World Heritage Site.
                                    </p>

                                    <div class="most-visited-blog-list-button">

                                        <a href="blog/sigiriya.php">
                                            <input type="submit" value="Read more">
                                        </a>
                                    </div>

                                </div>
                                <div class="most-visited-blog-list most-visited-blog-list-2">
                                    <img src="images/blog/anuradhapura.jpeg" alt="">
                                    <h3>Anuradhapura</h3>
                                    <p>
                                        Anuradhapura is an ancient city in Sri Lanka, renowned for its rich history and
                                        significance as a sacred Buddhist site.
                                    </p>

                                    <div class="most-visited-blog-list-button">

                                        <a href="blog/anuradhapura.php">
                                            <input type="submit" value="Read more">
                                        </a>
                                    </div>

                                </div>
                                <div class="most-visited-blog-list most-visited-blog-list-3">
                                    <img src="images/blog/polonnaruwa.jpeg" alt="">
                                    <h3>Polonnaruwa</h3>
                                    <p>
                                        Polonnaruwa is another ancient city in Sri Lanka, located in the North Central
                                        Province. It served as the island's capital during the 11th and 12th centuries.
                                    </p>

                                    <div class="most-visited-blog-list-button">

                                        <a href="blog/polonnaruwa.php">
                                            <input type="submit" value="Read more">
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="most-visited-blog-list-content">

                                <div class="most-visited-blog-list">
                                    <img src="images/blog/siripadaya.jpeg" alt="">
                                    <h3>Sri padaya</h3>
                                    <p>
                                        Sri Padaya, also known as Adam's Peak, is a sacred mountain peak in Sri Lanka.
                                        It is a significant pilgrimage site.
                                    </p>

                                    <div class="most-visited-blog-list-button">

                                        <a href="blog/sripadaya.php">
                                            <input type="submit" value="Read more">
                                        </a>
                                    </div>

                                </div>
                                <div class="most-visited-blog-list most-visited-blog-list-2">
                                    <img src="images/blog/sri dalada maligawa.jpeg" alt="">
                                    <h3>Sri Dalada Maligawa</h3>
                                    <p>
                                        Sri Dalada Maligawa is a revered Buddhist temple in Kandy, Sri Lanka, housing
                                        Lord Buddha's sacred tooth relic. A symbol of spiritual significance, its
                                        captivating architecture and serene surroundings attract countless pilgrims and
                                        tourists.
                                    </p>

                                    <div class="most-visited-blog-list-button">

                                        <a href="blog/sridaladamaligawa.php">
                                            <input type="submit" value="Read more">
                                        </a>
                                    </div>

                                </div>
                                <div class="most-visited-blog-list most-visited-blog-list-3">
                                    <img src="images/blog/sinharajaya.jpeg" alt="">
                                    <h3>Sinharaja</h3>
                                    <p>
                                        Sinharaja Forest Reserve is a tropical rainforest located in the southwestern
                                        part of Sri Lanka. It is a UNESCO World Heritage Site and a biodiversity
                                        epicenter for rare plant and animal species.
                                    </p>

                                    <div class="most-visited-blog-list-button">

                                        <a href="blog/sigiriya.php">
                                            <input type="submit" value="Read more">
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="most-visited-blog-list-content">

                                <div class="most-visited-blog-list">
                                    <img src="images/blog/yala.jpg" alt="">
                                    <h3>Yala National Park</h3>
                                    <p>
                                        Yala National Park is a renowned wildlife sanctuary in Sri Lanka, located in the
                                        southeastern region of the country. It is one of the most popular national
                                        parks.
                                    </p>

                                    <div class="most-visited-blog-list-button">

                                        <a href="blog/yala.php">
                                            <input type="submit" value="Read more">
                                        </a>
                                    </div>

                                </div>
                                <div class="most-visited-blog-list most-visited-blog-list-2">
                                    <img src="images/blog/galle.jpeg" alt="">
                                    <h3>Galle Fort</h3>
                                    <p>
                                        Galle Fort is a historic UNESCO World Heritage Site located in Galle, Sri Lanka.
                                        Originally built by the Portuguese in the 16th century and later fortified by
                                        the Dutch, the fort stands as a remarkable example of colonial architecture and
                                        engineering.
                                    </p>

                                    <div class="most-visited-blog-list-button">

                                        <a href="blog/galle-fort.php">
                                            <input type="submit" value="Read more">
                                        </a>
                                    </div>

                                </div>
                                <div class="most-visited-blog-list most-visited-blog-list-3">
                                    <img src="images/blog/world end.jpeg" alt="">
                                    <h3>World's End</h3>
                                    <p>
                                        World's End is a breathtaking cliff located in Horton Plains National Park, Sri
                                        Lanka. Situated at an altitude of around 2,100 meters, it offers mesmerizing
                                        panoramic views of the surrounding landscapes.
                                    </p>

                                    <div class="most-visited-blog-list-button">

                                        <a href="blog/worlds-end.php">
                                            <input type="submit" value="Read more">
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="most-visited-blog-list-content">

                                <div class="most-visited-blog-list">
                                    <img src="images/blog/ella.jpg" alt="">
                                    <h3>Ella</h3>
                                    <p>
                                        Ella is a charming hillside town nestled in the central highlands of Sri Lanka.
                                        Surrounded by lush green tea plantations and scenic mountains, Ella offers
                                        stunning natural beauty and a peaceful atmosphere.
                                    </p>

                                    <div class="most-visited-blog-list-button">

                                        <a href="blog/ella.php">
                                            <input type="submit" value="Read more">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include 'includes/footer.php'; ?>
    </div>
    <script src="js/script.js"></script>
</body>

</html>
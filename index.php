<!DOCTYPE html>
<html lang="en">

<?php include 'includes/db_conntect.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>Home</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/home.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</head>

<?php
$star1 = 0;
$star2 = 0;
$star3 = 0;
$star4 = 0;
$star5 = 0;

$starRatings = [];
$totalStars = 0;

$sql = "SELECT * FROM review";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['stars'] == '1') {
            $star1 += 1;
        } else if ($row['stars'] == '2') {
            $star2 += 1;
        } else if ($row['stars'] == '3') {
            $star3 += 1;
        } else if ($row['stars'] == '4') {
            $star4 += 1;
        } else if ($row['stars'] == '5') {
            $star5 += 1;
        }
        $starRatings[] = $row['stars'];
        $totalStars++;
    }
}

if (count($starRatings) > 0) {
    $totalStars = array_sum($starRatings);
    $averageRating = $totalStars / count($starRatings);
} else {
    $averageRating = 0;
}

?>

<body>
    <div class="container">

        <?php include 'includes/menu.php'; ?>

        <div class="content">

            <?php include 'includes/nav.php'; ?>

            <section>

                <!-- Write all the content here -->

                <div class="home">
                    <div class="home-content">
                        <div class="home-header">
                            <div class="home-header-video">
                                <iframe title="vimeo-player"
                                    src="https://player.vimeo.com/video/850690941?h=5bd32dba22&autoplay=1&loop=1&title=0&byline=0&controls=0&muted=1"
                                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>
                            <script src="https://player.vimeo.com/api/player.js"></script>
                            <!-- <img src="images/cover.jpg" class="cover-image" alt=""> -->

                            <div class="home-header-cover">
                                <div class="box">
                                    <h1>Welcome To SereneLanka !</h1>
                                    <p>- Explore the World, Embrace the Journey -</p>
                                    <p>
                                        Welcome to SereneLanka, your gateway to an enchanting travel experience in the
                                        tropical paradise of Sri Lanka. At SereneLanka travel agency, we take pride in
                                        curating unforgettable journeys that immerse you in the island's rich cultural
                                        heritage, breathtaking landscapes, and warm hospitality. Our passionate team of
                                        experts is dedicated to crafting personalized itineraries, ensuring every moment
                                        of your trip is tailored to your desires. Whether you seek relaxation on
                                        pristine beaches, encounters with wildlife in lush jungles, or explorations of
                                        ancient ruins, we have the expertise to make your dreams a reality. Join us on a
                                        journey of discovery, and let SereneLanka be your trusted guide to the wonders
                                        of Sri Lanka.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="home-content-2">
                            <div class="box">
                                <div class="home-content-2-cards">
                                    <div class="home-content-2-card-list">
                                        <div class="home-content-2-image">
                                            <img src="images/home/desti.jpg" alt="">
                                            <h3>Travel Around the Island!</h3>
                                            <p>
                                                Explore Sri Lanka, a captivating paradise of lush tea plantations,
                                                golden
                                                beaches, and ancient ruins. Immerse yourself in vibrant markets, savor
                                                mouthwatering cuisine, and encounter fascinating wildlife. Unforgettable
                                                adventures await amidst this tropical haven!
                                            </p>
                                            <div class="home-content-list-button">
                                                <a href=""><input type="submit" value="Click Here"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home-content-2-card-list home-content-2-card-list-2">
                                        <div class="home-content-2-image">
                                            <img src="images/home/blogi.jpg" alt="">
                                            <h3>Read More About the Destinations!</h3>
                                            <p>
                                                Sri Lanka offers diverse destinations, from vibrant Colombo to scenic
                                                Nuwara Eliya, cultural Kandy, ancient Sigiriya, and stunning beaches
                                                like Mirissa and Bentota. Explore wildlife in Yala National Park. A
                                                captivating destination for all!
                                            </p>
                                            <div class="home-content-list-button">
                                                <a href=""><input type="submit" value="Click Here"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home-content-2-card-list home-content-2-card-list-3">
                                        <div class="home-content-2-image">
                                            <img src="images/home/conti.jpg" alt="">
                                            <div class="">
                                                <h3>We Are All Grateful To Support You!</h3>
                                                <p>
                                                    Grateful to support your journey! Our travel agency ensures
                                                    unforgettable experiences tailored to your desires. Trust us for
                                                    personalized service and seamless itineraries. Contact us to make
                                                    long
                                                    lasting memories together with your lovely ones!
                                                </p>
                                            </div>
                                            <div class="home-content-list-button">
                                                <a href=""><input type="submit" value="Go somewhere"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="home-content-4">
                            <div class="box">

                                <!-- <div class="home-content-3-list home-content-3-list-2"> -->
                                    <div class="review-div">
                                        <div class="review-overall">
                                            <div class="overall-header">
                                                <h2>
                                                    <?php echo number_format($averageRating, 1); ?>
                                                </h2>&nbsp;

                                                <?php
                                                $averageRatingInteger = floor($averageRating);
                                                if ($averageRatingInteger == 1) {
                                                    echo '
                                                        <i class="ri-star-fill"></i>
                                                    ';
                                                } else if ($averageRatingInteger == 2) {
                                                    echo '
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    ';

                                                } else if ($averageRatingInteger == 3) {
                                                    echo '
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    ';
                                                } else if ($averageRatingInteger == 4) {
                                                    echo '
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    ';
                                                } else if ($averageRatingInteger == 5) {
                                                    echo '
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    ';
                                                }
                                                ?>

                                            </div>

                                            <div class="overall-rating">
                                                <p>Overall rating of
                                                    <?php echo $star1 + $star2 + $star3 + $star4 + $star5 ?>
                                                </p>
                                            </div>
                                            <div class="overall-5-star">
                                                <p>5 Stars</p>
                                                <div class="review-bar">
                                                    <div class="review-bar-line" id="review-bar-line-5"></div>
                                                </div>
                                                <p class="overall-all-review">
                                                    <?php echo $star5; ?>
                                                </p>
                                            </div>
                                            <div class="overall-4-star">
                                                <p>4 Stars</p>
                                                <div class="review-bar">
                                                    <div class="review-bar-line" id="review-bar-line-4"></div>
                                                </div>
                                                <p class="overall-all-review">
                                                    <?php echo $star4; ?>
                                                </p>
                                            </div>
                                            <div class="overall-3-star">
                                                <p>3 Stars</p>
                                                <div class="review-bar">
                                                    <div class="review-bar-line" id="review-bar-line-3"></div>
                                                </div>
                                                <p class="overall-all-review">
                                                    <?php echo $star3; ?>
                                                </p>
                                            </div>
                                            <div class="overall-2-star">
                                                <p>2 Stars</p>
                                                <div class="review-bar">
                                                    <div class="review-bar-line" id="review-bar-line-2"></div>
                                                </div>
                                                <p class="overall-all-review">
                                                    <?php echo $star2; ?>
                                                </p>
                                            </div>
                                            <div class="overall-1-star">
                                                <p>1 Stars</p>
                                                <div class="review-bar">
                                                    <div class="review-bar-line" id="review-bar-line-1"></div>
                                                </div>
                                                <p class="overall-all-review">
                                                    <?php echo $star1; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </div> -->


                            </div>
                        </div>

                        <div class="home-content-3">
                            <div class="box">
                                <div class="home-content-3-lists">
                                    <div class="home-content-3-list home-content-3-list-1">
                                        <h3>Tips to Travel in Sri Lanka</h3>
                                        <p>
                                            Plan wisely for a diverse experience in Sri Lanka. Mind the weather, respect
                                            customs, savor local cuisine, and embrace the culture. Engage with locals
                                            and carry cash. Enjoy an extraordinary journey filled with warm hospitality
                                            and unforgettable memories!
                                        </p>
                                        <div class="home-content-3-list-read-more">
                                            <a
                                                href="https://www.roughguides.com/article/first-time-sri-lanka-travel-tips/">Read
                                                more</a>
                                        </div>
                                    </div>

                                    <div class="home-content-3-list home-content-3-list-3">
                                        <h3>Travel Advice and Safety</h3>
                                        <p>
                                            Traveling to Sri Lanka? Stay informed about the country's situation, be
                                            cautious in crowded areas, and respect local customs. Stay hydrated, eat at
                                            reputable places, and keep important documents safe. Enjoy your journey and
                                            embrace the beauty of Sri Lanka!
                                        </p>
                                        <div class="home-content-3-list-read-more">
                                            <a href="https://www.smartraveller.gov.au/destinations/asia/sri-lanka">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
        </div>
        <?php include 'review/update_overall.php'; ?>
        <?php include 'includes/footer.php'; ?>

    </div>
    <script src="js/script.js"></script>
</body>

</html>
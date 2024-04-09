<!DOCTYPE html>
<html lang="en">

<?php include 'includes/db_conntect.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>Review</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/review.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="container">

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

        <div class="write-review" id="write-review">
            <form class="write-content" id="write-content" method="POST" enctype="multipart/form-data">
                <div class="write-header">
                    <h2>Review</h2>
                    <i class="ri-close-line" id="close-button"></i>
                </div>
                <div style="width: 100%; height: 1px; background-color: rgb(99, 99, 99); margin-top: 20px;"></div>
                <div class="write-details">
                    <div class="write-details-profile">
                        <div class="write-profile-div" id="fileImg">
                            <img src="images/dslr-camera.png" alt="">
                            <img src="" alt="" id="previewImage">
                        </div>
                        <input type="file" required style="position: absolute; visibility: hidden;" id="fileInput"
                            name="image">
                    </div>
                    <div class="write-user-details">
                        <div class="input-group">
                            <input type="text" required name="full-name">
                            <label for="">Full Name <span>*</span></label>
                        </div>
                    </div>
                    <div class="write-stars">
                        <p>STAR RATING</p>

                        <div style="margin-left: 10px;">
                            <i class="ri-star-fill" id="write-star-1"></i>
                            <i class="ri-star-fill" id="write-star-2"></i>
                            <i class="ri-star-fill" id="write-star-3"></i>
                            <i class="ri-star-fill" id="write-star-4"></i>
                            <i class="ri-star-fill" id="write-star-5"></i>
                        </div>
                        <input type="hidden" required name="stars" id="write-start" style="position: absolute;">
                    </div>
                    <div class="write-user-details">
                        <div class="input-group">
                            <textarea required name="review-commtent"></textarea>
                            <label for="">Write or paste Review Here <span>*</span></label>
                        </div>
                    </div>
                    <div class="write-button">
                        <input type="submit" value="Add Review" name="write-button">
                    </div>
                </div>
            </form>
        </div>

        <?php
        if (isset($_POST['write-button'])) {
            $fullName = $_POST['full-name'];
            $stars = $_POST['stars'];
            $reviewComment = $_POST['review-commtent'];

            $imageName = $_FILES['image']['name'];
            $imageTmp = $_FILES['image']['tmp_name'];

            $min = 10000;
            $max = 10000000000000;
            $random_number = rand($min, $max);

            $folder = "review/review_profile/$random_number" . $imageName;
            $folder2 = $folder;

            $file_path = "review/review_text/$random_number.txt";
            $file_handle = fopen($file_path, 'w');

            if ($fullName == "" || $reviewComment == "") {
                // Handle the case when the full name or review comment is not provided
                // For example, show an error message to the user or redirect back to the form
            } else {
                // Make sure to sanitize the user input before using it in the query
                $fullName = mysqli_real_escape_string($conn, $fullName);
                $stars = mysqli_real_escape_string($conn, $stars);
                $reviewComment = mysqli_real_escape_string($conn, $reviewComment);

                date_default_timezone_set('Asia/Colombo');
                $currentDate = date('Y-m-d');

                // Use prepared statement to safely insert data into the database
                $stmt = $conn->prepare("INSERT INTO review (full_name, stars, description, imageURL, textURL, date) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $fullName, $stars, $reviewComment, $folder, $file_path, $currentDate);

                if ($stmt->execute()) {
                    move_uploaded_file($imageTmp, $folder2);

                    $data = $reviewComment;
                    fwrite($file_handle, $data);
                    fclose($file_handle);

                    echo '<script>window.location.href = "review.php";</script>';
                } else {
                    // Handle the case when the database insertion fails
                    // For example, show an error message to the user or log the error
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            }
        }
        ?>


        <?php include 'includes/menu.php'; ?>

        <div class="content">
            <?php include 'includes/nav.php'; ?>
            <section>
                <div class="box">
                    <div class="review">
                        <div class="review-all-content">
                            <div class="review-header">
                                <h1>OUR REVIEWS</h1>
                            </div>
                            <div class="review-content">
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



                                <div class="review-details">
                                    <div class="review-details-write">
                                        <input type="submit" value="Write a review" id="write-button">
                                    </div>
                                    <div class="review-details-content">

                                        <?php
                                        $sql = "SELECT * FROM review ORDER BY id DESC";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {

                                                // echo $row["textURL"] ;
                                        
                                                $file_path = $row["textURL"];
                                                $file_contents = file_get_contents($file_path);

                                                $file = fopen($file_path, "r");
                                                if ($file) {
                                                    $file_contents_with_br = fread($file, filesize($file_path));
                                                    fclose($file);
                                                }

                                                if ($row["stars"] == 1) {

                                                    echo '<div class="review-list">
                                                        <div class="review-list-head">
                                                            <div class="profile">
                                                                <img src="' . $row["imageURL"] . '" alt="">
                                                            </div>
                                                            <div class="user-name">
                                                                <h4>' . $row["full_name"] . '</h4>
                                                            </div>
                                                            <div class="date">
                                                                <p>' . $row["date"] . '</p>
                                                            </div>
                                                        </div>
                                                        <div class="review-list-star">
                                                        
                                                            <i class="ri-star-fill"></i>
                                                            
                                                        </div>
                                                        <div class="review-list-comment">
                                                            <p>
                                                            ' . $file_contents_with_br . '
                                                            </p>
                                                        </div>
                                                    </div>
                                                ';

                                                } else if ($row["stars"] == 2) {

                                                    echo '<div class="review-list">
                                                        <div class="review-list-head">
                                                            <div class="profile">
                                                                <img src="' . $row["imageURL"] . '" alt="">
                                                            </div>
                                                            <div class="user-name">
                                                                <h4>' . $row["full_name"] . '</h4>
                                                            </div>
                                                            <div class="date">
                                                                <p>' . $row["date"] . '</p>
                                                            </div>
                                                        </div>
                                                        <div class="review-list-star">
                                                        
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                           
                                                        </div>
                                                        <div class="review-list-comment">
                                                            <p>
                                                            ' . $file_contents_with_br . '
                                                            </p>
                                                        </div>
                                                    </div>
                                                ';
                                                } else if ($row["stars"] == 3) {
                                                    echo '<div class="review-list">
                                                    <div class="review-list-head">
                                                        <div class="profile">
                                                            <img src="' . $row["imageURL"] . '" alt="">
                                                        </div>
                                                        <div class="user-name">
                                                            <h4>' . $row["full_name"] . '</h4>
                                                        </div>
                                                        <div class="date">
                                                            <p>' . $row["date"] . '</p>
                                                        </div>
                                                    </div>
                                                    <div class="review-list-star">
                                                    
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        
                                                    </div>
                                                    <div class="review-list-comment">
                                                        <p>
                                                        ' . $file_contents_with_br . '
                                                        </p>
                                                    </div>
                                                </div>
                                            ';
                                                } else if ($row["stars"] == 4) {
                                                    echo '<div class="review-list">
                                                    <div class="review-list-head">
                                                        <div class="profile">
                                                            <img src="' . $row["imageURL"] . '" alt="">
                                                        </div>
                                                        <div class="user-name">
                                                            <h4>' . $row["full_name"] . '</h4>
                                                        </div>
                                                        <div class="date">
                                                            <p>' . $row["date"] . '</p>
                                                        </div>
                                                    </div>
                                                    <div class="review-list-star">
                                                    
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        
                                                    </div>
                                                    <div class="review-list-comment">
                                                        <p>
                                                        ' . $file_contents_with_br . '
                                                        </p>
                                                    </div>
                                                </div>
                                            ';
                                                } else if ($row["stars"] == 5) {
                                                    echo '<div class="review-list">
                                                    <div class="review-list-head">
                                                        <div class="profile">
                                                            <img src="' . $row["imageURL"] . '" alt="">
                                                        </div>
                                                        <div class="user-name">
                                                            <h4>' . $row["full_name"] . '</h4>
                                                        </div>
                                                        <div class="date">
                                                            <p>' . $row["date"] . '</p>
                                                        </div>
                                                    </div>
                                                    <div class="review-list-star">
                                                    
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="review-list-comment">
                                                        <p>
                                                        ' . $file_contents_with_br . '
                                                        </p>
                                                    </div>
                                                </div>
                                            ';
                                                }

                                            }
                                        } else {
                                            echo "<h1 class='noResults'>No Results.</h1>";
                                        }

                                        ?>
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
    <script src="js/review.js"></script>

</body>

</html>
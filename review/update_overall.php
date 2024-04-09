<?php

$totalRatings = $star1 + $star2 + $star3 + $star4 + $star5;

if ($totalRatings == 0) {
    $totalRatings = 1;
}

$percentageStar1 = ($star1 / $totalRatings) * 100;
$percentageStar2 = ($star2 / $totalRatings) * 100;
$percentageStar3 = ($star3 / $totalRatings) * 100;
$percentageStar4 = ($star4 / $totalRatings) * 100;
$percentageStar5 = ($star5 / $totalRatings) * 100;

if (round($percentageStar1, 2) == 0) {
    echo '<script>document.getElementById("review-bar-line-1").style.right= "100%";</script>';
} else if (round($percentageStar1, 2) <= 20) {
    echo '<script>document.getElementById("review-bar-line-1").style.right= "80%";</script>';
} else if (round($percentageStar1, 2) <= 40) {
    echo '<script>document.getElementById("review-bar-line-1").style.right= "60%";</script>';
} else if (round($percentageStar1, 2) <= 60) {
    echo '<script>document.getElementById("review-bar-line-1").style.right= "40%";</script>';
} else if (round($percentageStar1, 2) <= 70) {
    echo '<script>document.getElementById("review-bar-line-1").style.right= "30%";</script>';
} else if (round($percentageStar1, 2) <= 80) {
    echo '<script>document.getElementById("review-bar-line-1").style.right= "20%";</script>';
} else if (round($percentageStar1, 2) <= 90) {
    echo '<script>document.getElementById("review-bar-line-1").style.right= "10%";</script>';
} else if (round($percentageStar1, 2) <= 100) {
    echo '<script>document.getElementById("review-bar-line-1").style.right= "0";</script>';
}

if (round($percentageStar2, 2) == 0) {
    echo '<script>document.getElementById("review-bar-line-2").style.right= "100%";</script>';
} else if (round($percentageStar2, 2) <= 20) {
    echo '<script>document.getElementById("review-bar-line-2").style.right= "80%";</script>';
} else if (round($percentageStar2, 2) <= 40) {
    echo '<script>document.getElementById("review-bar-line-2").style.right= "60%";</script>';
} else if (round($percentageStar2, 2) <= 60) {
    echo '<script>document.getElementById("review-bar-line-1").style.right= "40%";</script>';
} else if (round($percentageStar2, 2) <= 70) {
    echo '<script>document.getElementById("review-bar-line-1").style.right= "30%";</script>';
} else if (round($percentageStar2, 2) <= 80) {
    echo '<script>document.getElementById("review-bar-line-1").style.right= "20%";</script>';
} else if (round($percentageStar2, 2) <= 90) {
    echo '<script>document.getElementById("review-bar-line-2").style.right= "10%";</script>';
} else if (round($percentageStar2, 2) <= 100) {
    echo '<script>document.getElementById("review-bar-line-2").style.right= "0";</script>';
}

if (round($percentageStar3, 2) == 0) {
    echo '<script>document.getElementById("review-bar-line-3").style.right= "100%";</script>';
} else if (round($percentageStar3, 2) <= 20) {
    echo '<script>document.getElementById("review-bar-line-3").style.right= "80%";</script>';
} else if (round($percentageStar3, 2) <= 40) {
    echo '<script>document.getElementById("review-bar-line-3").style.right= "60%";</script>';
} else if (round($percentageStar3, 2) <= 60) {
    echo '<script>document.getElementById("review-bar-line-3").style.right= "40%";</script>';
} else if (round($percentageStar3, 2) <= 70) {
    echo '<script>document.getElementById("review-bar-line-3").style.right= "30%";</script>';
} else if (round($percentageStar3, 2) <= 80) {
    echo '<script>document.getElementById("review-bar-line-3").style.right= "20%";</script>';
} else if (round($percentageStar3, 2) <= 90) {
    echo '<script>document.getElementById("review-bar-line-3").style.right= "10%";</script>';
} else if (round($percentageStar3, 2) <= 100) {
    echo '<script>document.getElementById("review-bar-line-3").style.right= "0";</script>';
}

if (round($percentageStar4, 2) == 0) {
    echo '<script>document.getElementById("review-bar-line-4").style.right= "100%";</script>';
} else if (round($percentageStar4, 2) <= 20) {
    echo '<script>document.getElementById("review-bar-line-4").style.right= "80%";</script>';
} else if (round($percentageStar4, 2) <= 40) {
    echo '<script>document.getElementById("review-bar-line-4").style.right= "60%";</script>';
} else if (round($percentageStar4, 2) <= 60) {
    echo '<script>document.getElementById("review-bar-line-4").style.right= "40%";</script>';
} else if (round($percentageStar4, 2) <= 70) {
    echo '<script>document.getElementById("review-bar-line-4").style.right= "30%";</script>';
} else if (round($percentageStar4, 2) <= 80) {
    echo '<script>document.getElementById("review-bar-line-4").style.right= "20%";</script>';
} else if (round($percentageStar4, 2) <= 90) {
    echo '<script>document.getElementById("review-bar-line-4").style.right= "10%";</script>';
} else if (round($percentageStar4, 2) <= 100) {
    echo '<script>document.getElementById("review-bar-line-4").style.right= "0";</script>';
}

if (round($percentageStar5, 2) == 0) {
    echo '<script>document.getElementById("review-bar-line-5").style.right= "100%";</script>';
} else if (round($percentageStar5, 2) <= 20) {
    echo '<script>document.getElementById("review-bar-line-5").style.right= "80%";</script>';
} else if (round($percentageStar5, 2) <= 40) {
    echo '<script>document.getElementById("review-bar-line-5").style.right= "60%";</script>';
} else if (round($percentageStar5, 2) <= 60) {
    echo '<script>document.getElementById("review-bar-line-5").style.right= "40%";</script>';
} else if (round($percentageStar5, 2) <= 70) {
    echo '<script>document.getElementById("review-bar-line-5").style.right= "30%";</script>';
} else if (round($percentageStar5, 2) <= 80) {
    echo '<script>document.getElementById("review-bar-line-5").style.right= "20%";</script>';
} else if (round($percentageStar5, 2) <= 90) {
    echo '<script>document.getElementById("review-bar-line-5").style.right= "10%";</script>';
} else if (round($percentageStar5, 2) <= 100) {
    echo '<script>document.getElementById("review-bar-line-5").style.right= "0";</script>';
}

?>
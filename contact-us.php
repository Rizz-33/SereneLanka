<!DOCTYPE html>
<html lang="en">

<?php include 'includes/db_conntect.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/contact-us.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <?php include 'includes/menu.php'; ?>

        <div class="content">

            <?php include 'includes/nav.php'; ?>

            <section>

                <!-- Write all the content here -->

                <div class="box">
                    <div class="contact">
                        <div class="contact-content-1">
                            <div class="contact-location">
                                <div class="contact-locaiton-content-1">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <div class="contact-locaiton-content-2">
                                    <h2>Location</h2>
                                    <p>
                                        serenelanka,<br>
                                        Mawatha, Colombo 07,<br>
                                        Sri Lanka.
                                    </p>
                                </div>
                            </div>
                            <div class="sec-hr"></div>
                            <div class="contact-hotline">
                                <div class="contact-hotline-content-1">
                                    <i class="ri-customer-service-2-line"></i>
                                </div>
                                <div class="contact-hotline-content-2">
                                    <h2>Call support</h2>
                                    <p><a href="tel:+94770000000">077 0 000 000</a></p>
                                    <h2>24x7n Hotlie</h2>
                                    <p><a href="tel:+94112800200">011 0 000 000</a></p>
                                </div>
                            </div>
                            <div class="sec-hr"></div>
                            <div class="contact-mail">
                                <div class="contact-mail-content-1">
                                    <i class="ri-mail-line"></i>
                                </div>
                                <div class="contact-mail-content-2">
                                    <h2>Email us</h2>
                                    <p><a href="mailto:serenelanka@gmail.com">serenelanka@gmail.com</a></p>

                                </div>
                            </div>
                        </div>
                        <form class="contact-content-2" method="POST">

                            <?php
                            if (isset($_GET['success'])) {
                                echo '
                                <div class="success-message">
                                    <p>Thank you! Your message has been successfully sent</p>
                                </div>
                                ';
                            }
                            ?>
                            <div class="contact-content-2-name">
                                <div class="content-2-first-name ">
                                    <div class="input-group">
                                        <input type="text" name="first_name" required>
                                        <label for="">First Name <span>*</span></label>
                                    </div>
                                </div>
                                <div class="content-2-last-name">
                                    <div class="input-group">
                                        <input type="text" name="last_name" required>
                                        <label for="">Last Name <span>*</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-content-2-email-phone">
                                <div class="content-2-phone">
                                    <div class="input-group">
                                        <input type="text" name="phone" required>
                                        <label for="">Phone Number <span>*</span></label>
                                    </div>
                                </div>
                                <div class="content-2-email">
                                    <div class="input-group">
                                        <input type="text" name="email" required>
                                        <label for="">Email <span>*</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-content-2-subject">
                                <div class="input-group">
                                    <input type="text" name="subject" required>
                                    <label for="">Subject <span>*</span></label>
                                </div>
                            </div>

                            <div class="contact-content-2-message">
                                <div class="input-group">
                                    <textarea required name="message"></textarea>
                                    <label for="">Message <span>*</span></label>
                                </div>
                            </div>

                            <div class="contact-content-2-button">
                                <input type="submit" name="button" value="SEND MESSAGE">
                            </div>

                        </form>
                        <?php

                        if (isset($_POST['button'])) {
                            $first_name = $_POST['first_name'];
                            $last_name = $_POST['last_name'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];

                            $sql = "
                        INSERT INTO contact(first_name, last_name, phone, email,subject,message) 
                        VALUES ('$first_name','$last_name','$phone','$email','$subject','$message')";

                            if ($conn->query($sql) === TRUE) {

                                echo '<script>window.location.href = "contact-us.php?success=true";</script>';

                            }
                        }

                        ?>

                    </div>
                </div>

            </section>
        </div>

        <?php include 'includes/footer.php'; ?>

    </div>
    <script src="js/script.js"></script>
</body>

</html>
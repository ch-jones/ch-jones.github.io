<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caleb Jones | UX Design + Front-End Development</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css">
    <link rel="stylesheet" href="css/animations.css">
</head>

<body>
    <div id="sticky-boundary">

        <!-- Title Bar -->

        <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
            <button class="menu-icon" type="button" data-toggle="example-menu"></button>
            <div class="title-bar-title">Menu</div>
        </div>
        <div class="sticky-container" data-sticky-container>
            <div class="top-bar sticky" id="example-menu" id="sticky-menu" data-sticky data-anchor="sticky-boundary" data-margin-top="0" data-margin-bottom="0">
                <div class="top-bar-left">
                    <ul class="dropdown menu" data-dropdown-menu>
                        <li class="menu-text">Caleb Jones</li>
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="#">Projects</a>
                            <ul class="menu vertical">
                                <li><a href="wildfires.html">Wildfires</a></li>
                                <li><a href="nesting-icosahedrons.html">Nesting Icosahedrons</a></li>
                                <li><a href="interactive-poster.html">Interactive Poster</a></li>
                                <li><a href="spotify-offline-redesign.html">Spotify Feature Redesign</a></li>
                                <li><a href="online-shopping-motion-graphics.html">Online Shopping Motion Graphics</a></li>
                                <li><a href="interactive-book-cover.html">Interactive Book Cover</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="resume.html">Resumé</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="menu socialMedia">
                        <li class="h3"><a href="https://twitter.com/qrnrd" target="_blank"><i class="fi-social-twitter"></i></a></li>
                        <li class="h3"><a href="https://www.linkedin.com/in/caleb-jones-86310a14a/" target="_blank"><i class="fi-social-linkedin"></i></a></li>
                        <li class="h3"><a href="https://github.com/ch-jones" target="_blank"><i class="fi-social-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="grid-x grid-margin-x grid-padding-x section">
            <div class="cell">
                <h1>Contact</h1>
            </div>
            <div class="large-8 medium-8 cell">
                <!-- Form -->
                <?php
                    $name       = $_POST['name'];
                    $email      = $_POST['email'];
                    $message    = $_POST['message'];
                    $from       = 'From: Portfolio Website';
                    $to         = 'calebhannonjones@gmail.com';
                    $subject = $_POST['subject'];

                    $body       = "From: $name\n email: $email\n Message:\n $message";

                    if ($_POST['submit']) {
                        if(mail ($to, $subject, $body, $from)) {
                            echo "<h2>Thanks for your message! I'll get back to you asap.</h2>";
                        } else {
                            echo "<h2 class='alert callout'><i class='fi-alert'>Something went wrong :( Please try sending your message again!</h2>";
                        }
                    }
                ?>
                <form method="post" action="contact.php" id="contactForm" data-abide novalidate>
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>Please fill out all the required fields.</p>
                    </div>
                    <div class="grid-x grid-margin-x">
                        <div class="medium-6 cell">
                            <label>Name</label>
                            <input name="name" placeholder="Name" type="text" aria-describedby="Name field" required pattern="text">
                        </div>
                        <div class="medium-6 cell">
                            <label>Email</label>
                            <input name="email" type="email" placeholder="Email" aria-describedby="Email field" required pattern="email">
                        </div>
                    </div>
                    <div>
                        <label>Subject</label>
                        <input name="subject" type="text" placeholder="Message Subject" aria-describedby="Subject field">
                    </div>
                    <label>Message</label>
                    <textarea name="message" placeholder="Write your message here." aria-describedby="Message field" required rows="6"></textarea>
                    <input id="submit" name="submit" type="submit" value="Submit" class="button">
                </form>
            </div>
            <div class="large-4 medium-4 small-12 cell">
                <ul class="large-vertical medium-vertical menu socialMedia expanded">
                    <li class="h1"><a href="https://twitter.com/qrnrd" target="_blank"><i class="fi-social-twitter"></i></a></li>
                    <li class="h1"><a href="https://www.linkedin.com/in/caleb-jones-86310a14a/" target="_blank"><i class="fi-social-linkedin"></i></a></li>
                    <li class="h1"><a href="https://github.com/ch-jones" target="_blank"><i class="fi-social-github"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End of sticky boundary -->
    </div>
    <div class="grid-x grid--padding-x text-center">
        <div class="auto cell">
            <footer>&copy; Caleb Jones 2018</footer>
        </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>

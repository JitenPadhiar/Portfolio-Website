<?php
$errName = $errEmail = $errMessage = $errSubject = $result = "";
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //  $subject = $_POST['subject'];
    $from = 'Jiten Website!!!!';
    $to = 'padhiarjiten@gmail.com';
    $topic = 'Message from Contact Demo ';
    $body = "From: $name\n E-Mail: $email\n  Message:\n $message";
    // Check if name has been entered//
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }
    // Check if email has been entered and is valid//
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }
    //Check if message has been entered//
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    //if (!$_POST['subject']) {
    //  $errSubject = 'Please enter the Subject';
    //}
    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errSubject) {
        if (mail($to, $subject, $body, $from)) {
            $result = '<div class="label label-success">Thank You! I will be in touch</div>';
            header("Refresh:10; url=index.php");
        } else {
            $result = '<div class="label label-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
    }
}
?>
<!DOCTYPE HTML>
<!--
        Prologue by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Jiten Padhiar</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/set1.css" />
		<link rel="stylesheet" href="assets/js/imagemodal.js" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
 <body onload="myFunction()" style="margin:0;">
 <?php include_once("analyticstracking.php") ?>
 <div id="loader"></div>
 <div style="display:none;" id="myDiv" class="animate-bottom">


<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
        <!-- Header -->
        <div id="header">

            <div class="top">

                <!-- Logo -->
                <div id="logo">
                    <span class="image avatar48"><img src="images/jiten_01.jpg" alt="" /></span>
                    <h1 id="title">Jiten Padhiar</h1>
                    <p>Web Designer & Developer</p>
                </div>

                <!-- Nav -->
                <nav id="nav">
                    <!--

                            Prologue's nav expects links in one of two formats:

                            1. Hash link (scrolls to a different section within the page)

                               <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

                            2. Standard link (sends the user to another page/site)

                               <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

                    -->
                    <ul>
                        <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
                        <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
                        <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
                        <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
						<li><a href="http://jitenpadhiar.ca/Jitenkumar I Padhiar Fulltime Application.pdf" id="resume-link" class="skel-layers-ignoreHref" target="_blank"><span class="icon fa-file-pdf-o">Resume</span></a></li>
                    </ul>
                </nav>

            </div>

            <div class="bottom">

                <!-- Social Icons -->
                <ul class="icons">
                    <li><a href="https://twitter.com/Padhiarjiten" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/jiten.padhiar" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="https://github.com/JitenPadhiar" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="https://ca.linkedin.com/in/jiten-padhiar-07b32247" class="icon fa-dribbble"><span class="label">LinkedIn</span></a></li>
                    <li><a href="https://plus.google.com/u/0/112847370054605439752/posts" class="icon fa-envelope"><span class="label">Email</span></a></li>
                </ul>

            </div>

        </div>

        <!-- Main -->
        <div id="main">

            <!-- Intro -->
            <section id="top" class="one dark cover">
                <div class="container">

                    <header>
                        <h2 class="alt">Hello! I'm <strong>Jiten Padhiar</strong>, interested in creating,developing responsive<br />
                            website.</h2>
                        <p></p>
                    </header>

                    <footer>
                        <a href="#portfolio" class="button scrolly">Scroll Down</a>
                    </footer>

                </div>
            </section>

            <!-- Portfolio -->
            <section id="portfolio" class="two">
                <div class="container">

                    <header>
                        <h2>Portfolio</h2>
                    </header>

                    <p>Here are samples of my project work click to know more.</p>

                    <div class="row">

                        <div class="4u 12u$(mobile)">
                         <article class="item">
							<img id="myImg" src="images/jiten_03.jpeg" alt="Proctor4exam" width="100" height="100">
								<div class="w3-modal-content w3-animate-zoom">
                                <header>
                                    <h3>Proctor4exam</h3>
                                </header>
                            </article>
                        </div>
						<div id="myModal" class="modal">
						  <span class="close">×</span>
						  <img class="modal-content" id="img01">
						  <div id="caption"></div>
						</div>
                        <div class="4u 12u$(mobile)">
                            <article class="item">
                                <a href="#" class="image fit">
                                    <img src="images/jiten_07.jpeg" alt="" /></a>
                                <header>
                                    <h3>Firstchoice Canada</h3>
                                </header>
                            </article>
                        </div>
                        <div class="4u$ 12u$(mobile)">
                            <article class="item">
                                <a href="#" class="image fit">
                                    <img src="images/jiten_06.jpeg" alt=""  /></a>
                                <header>
                                    <h3>Firstchoice America</h3>
                                </header>
                            </article>

                        </div>
                    </div>

                </div>
            </section>

            <!-- About Me -->
            <section id="about" class="three">
                <div class="container">

                    <header>
                        <h2>About Me</h2>
                    </header>

                    <a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>

                    <p>Welcome to my website. I was a former Web Design Intern at FirstChoice Group Canada. I'm interested in developing Responsive mobile websites. I am graduated student from Lambton College in Internet Programming and Database Management System Program. I have completed Bachelor in Electronics & Tele-Communication Engineering Degree from University Of Pune.My Favourite hobby is to play and to watch Cricket which is one of the athletic sports in India. In addition, I like to listen Music and watch Movies.</p>

                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="four">
                <div class="container">

                    <header>
                        <h2>Contact</h2>
                    </header>

                    <p>I'm excited to hear your views and opinion about this portfolio and projects! Submit your query now.</p>

                    <form method="post">
                        <div class="row">
                            <div class="6u 12u$(mobile)"><input type="text" id="name" name="name" placeholder="Name" /><?php echo "<p class='text-danger'>$errName</p>"; ?></div>
                            <div class="6u$ 12u$(mobile)"><input type="text" id="email" name="email" placeholder="Email" /><?php echo "<p class='text-danger'>$errEmail</p>"; ?></div>
                            <div class="12u$">
                                <textarea name="message" id="message" placeholder="Message"></textarea><?php echo "<p class='text-danger'>$errMessage</p>"; ?>
                            </div>
                            <div class="12u$">
                                <input type="submit" id="submit" value="Send Message" />
                            </div>
                        </div>
                    </form>
                    <div>
                        <?php echo $result; ?>
                    </div>
                </div>
            </section>

        </div>

        <!-- Footer -->
        <div id="footer">

            <!-- Copyright -->
            <ul class="copyright">
                <li>&copy; Jiten Padhiar. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>

        </div>
</div>
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollzer.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>
</html>
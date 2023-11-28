<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles/contactUs.css">
    <link rel="stylesheet" href="styles/translate.css">
</head>

<body>
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST['submit'])) {
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/SMTP.php';

        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Create a PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings for your email provider
            $mail->isSMTP();
            $mail->Host = 'mail.weimaeastafrica.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'mail@weimaeastafrica.com';
            $mail->Password = 'l9t9wU1aDW'; // Replace with your actual email account password
            $mail->SMTPSecure = 'ssl'; // Use tls encryption
            $mail->Port = 587; // SMTP port for tls
    
            // Set sender and recipient
    
            // Recipients
            $mail->setFrom('mail@weimaeastafrica.com', $name);
            $mail->addAddress('leulzergaw6@gmail.com', 'Weima East Africa'); // Email to send
    
            // Email content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = 'Message: ' . $message . '<br>Sent by: ' . $name . '<br>Email: ' . $email . '<br>Phone: ' . $phone;

            // Send the email
            // After the email is sent, add a redirect:
            if ($mail->send()) {
                header("Location: contact.php"); // Redirect to a success page
                exit(); // Ensure that no other content is sent
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            $mail->$SMTPDebug = SMTP::DEBUG_SERVER;
        }
    }
    ?>

    <div class="navbar">
        <div class="nav-items">
            <div class="logo">
                <a href="home.html"><img src="pics/new weima_logo.png" alt="" /></a>
            </div>
            <ul>

                <li><button class="contact" onclick="window.location.href = 'contact.html';">contacts</button></li>

                <!-- full screen navigation -->

                <li>
                    <div id="myNav" class="overlay">
                        <!-- close btn -->
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                        <!-- inside content -->
                        <div class="overlay-content">
                            <div class="shredding items">
                                <h1>Shredding</h1>
                                <p>Make a quick selection of our shredding material options or see all of our machinery
                                    overview.</p>
                                <a href="plastic.html">Plastic</a>
                                <a href="wood/wood.html">Wood</a>
                                <a href="waste/waste.html">Waste</a>
                                <a href="paper/paper.html">paper</a>
                                <a href="metal/metal.html">Metal</a>
                            </div>
                        </div>
                    </div>

                    <!-- menu button -->
                    <span onclick="openNav()"><button class="menu">menu</button></span>
                </li>
                <br>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Language</a>
                    <div class="dropdown-content">
                        <button id="translateEnglish">🇺🇸 English</button>
                        <button id="translateAmharic">🇪🇹 Amharic</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="collection">
        <div class="container">
            <div class="slideshow" id="slideshow1">
                <div class="slides">

                    <div class="slide">
                        <img src="pics/Supervision.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/Supervision_01.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/Supervision_02.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/Supervision_03.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/111-1115_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/111-1116_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/110-1019_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/110-1028_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/110-1030_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/110-1032_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/111-1124_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/111-1126_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/111-1131_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/111-1132_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/111-1108_IMG.JPG" alt="Image 1">
                    </div>

                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/111-1105_IMG.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/111-1106_IMG.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/111-1107_IMG.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/111-1108_IMG.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/109-0915_IMG.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/109-0916_IMG.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/111-1103_IMG.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/111-1104_IMG.JPG" alt="Image 1">
                    </div>
                    <!-- Add more slides as needed -->
                </div>
            </div>
            <button class="btn prev" onclick="prevSlide('slideshow1')">❮</button>
            <button class="btn next" onclick="nextSlide('slideshow1')">❯</button>
            <div class="text-section">
                <h2>Project Fortum</h2>
                <p>Project delivered in 2000 and the iT was a plant which handle wood waste
                    by shredding, transferring and pelleting
                </p>
            </div>
        </div>
        <div class="container">
            <div class="slideshow" id="slideshow2">
                <div class="slides">
                    <div class="slide">
                        <img src="pics/108-0805_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/108-0810_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/108-0811_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/108-0812_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/108-0813_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/108-0814_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/sorting plant.jpg" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/107-0723_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/107-0784_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/107-0795_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/107-0796_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/107-0798_IMG.JPG" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="pics/107-0799_IMG.JPG" alt="Image 2">
                    </div>
                    <!-- Add more slides as needed -->
                </div>
            </div>
            <button class="btn prev" onclick="prevSlide('slideshow2')">❮</button>
            <button class="btn next" onclick="nextSlide('slideshow2')">❯</button>
            <div class="text-section">
                <h2>Project SRJ</h2>
                <p>Project delivered in 2001 and it is handling a construction waste (demolition)
                    which sorting from construction waste Wood, ferrous metal non ferrous metal plastic, and so on </p>
            </div>
        </div>
        <div class="container">
            <div class="slideshow" id="slideshow3">
                <div class="slides">
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/106-0664_IMG.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/DSC00145.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/DSC00149.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/DSC00161.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/DSC00163.JPG" alt="Image 1">
                    </div>
                    <div class="slide"> <!-- Add your images here -->
                        <img src="pics/DSC00168.JPG" alt="Image 1">
                    </div>
                    <div class="slide">
                        <img src="pics/DSC00183.JPG" alt="Image 1">
                    </div>
                    <div class="slide">
                        <img src="pics/104-0470_IMG.JPG" alt="Image 1">
                    </div>
                    <div class="slide">
                        <img src="pics/104-0477_IMG.JPG" alt="Image 1">
                    </div>
                    <div class="slide">
                        <img src="pics/104-0478_IMG.JPG" alt="Image 1">
                    </div>
                    <!-- Add more slides as needed -->
                </div>
            </div>
            <button class="btn prev" onclick="prevSlide('slideshow3')">❮</button>
            <button class="btn next" onclick="nextSlide('slideshow3')">❯</button>
            <div class="text-section">
                <h2>Project metsä wood</h2>
                <p>Metsä wood is a world wide known wood factory and there was delivered a briquetting machine, which
                    produces a wood briquette from a factory wood waste like a saw dust.</p>
            </div>
        </div>

        <div class="container">
            <div class="slideshow" id="slideshow5">
                <div class="slides">
                    <div class="slide">
                        <img src="pics/111-1131_IMG.JPG" alt="Image 2">
                    </div>
                </div>
            </div>
            <div class="text-section">
                <h2>Demis Nadew</h2>
                <p>Project Manager <br>
                    Msc.(Eng.)</p>
                <p>Project leading Experience more than 20 years world wide Finland manly, Estonia, Russia and so on
                    under a main Company, WEIMA Machiennau GmBH.</p>
            </div>
        </div>

    </div>


    <div class="main">
        <H1>Contact Us</H1>
        <div class="contactform">

            <form method="post" id="contactForm">
                <div class="name">
                    <label for="name">Full Name </label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="email">
                    <label for="email">Email </label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="phone">
                    <label for="phone">Phone </label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="subject">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject">
                </div>
                <div class="message">
                    <label for="message">Message </label>
                    <textarea id="message" required name="message"></textarea>
                </div>
                <button name="submit" type="submit">SEND MESSAGE</button>
            </form>
            <div class="image">
                <h2>Weima East Africa</h2>
                <p> Based in Ethiopia but working or consulting from abroad.
                    <br>Tel.: ethiopia + 251 995 02 5000 <br>
                    Finland + 358 458578319 <br>
                    Email: recycle-All ....
                </p>
            </div>

        </div>
    </div>

    <div class="footer">
        <div class="logo">
            <a href="../home.html"><img src="../pics/new weima_logo.png" alt="" /></a>
        </div>
        <div class="links">
            <a href="../home.html">Home</a> |
            <a href="../plastic.html">Plastic</a> |
            <a href="../wood/wood.html">Wood</a> |
            <a href="../waste/waste.html">Waste</a> |
            <a href="./paper.html">Paper</a> |
            <a href="../metal/metal.html">Metal</a>
        </div>
    </div>
</body>
<script>
    function showSlide(slideShowId, n) {
        const slideshow = document.getElementById(slideShowId);
        const slides = slideshow.querySelector('.slides');

        let currentSlide = parseInt(slides.dataset.currentSlide) || 0;
        currentSlide += n;

        const totalSlides = slides.children.length;

        if (currentSlide >= totalSlides) {
            currentSlide = 0;
        } else if (currentSlide < 0) {
            currentSlide = totalSlides - 1;
        }

        slides.style.transform = `translateX(${-currentSlide * 100}%)`;
        slides.dataset.currentSlide = currentSlide;
    }

    function prevSlide(slideShowId) {
        showSlide(slideShowId, -1);
    }

    function nextSlide(slideShowId) {
        showSlide(slideShowId, 1);
    }
</script>
<script src="translate.js"></script>
<script src="script/home.js"></script>


</html>
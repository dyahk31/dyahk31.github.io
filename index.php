<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioHita</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow-x: clip;
            background-color: #F0EBCE;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
    <script src="./navbar.js"></script>
</head>

<body>
    <!-- header -->
    <header>
        <nav id="navbar">
            <div class="logo">
                <img src="./img/logo putih lengkap.png" alt="Logo">
            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#about-product">Product</a></li>
                <li><a href="#form">Order</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

        </nav>

        <span class="target"></span>
    </header>

    <!-- home page -->
    <section id="home" class="home-section">
        <div class="container" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50" data-aos-once="false">
            <h1>Solusi mudah untuk
                <br>masalah lingkungan Anda.
            </h1>
            <p>
                <b>BIOHITA</b> hadir untuk memperkenalkan biopori kepada Anda, <br>solusi ramah lingkungan yang mudah diaplikasikan di lingkungan sekitar.
            </p>
            <a href="#form" class="btn">Order</a>
        </div>
    </section>

    <!-- about us section -->
    <section id="about" class="about-section">
        <div class="about-title">
            <img src="./img/LOGO IJO.png" alt="">
            <h1>Kenapa Harus Biohita?</h1>
            <p class="title-p">Temukan mengapa kami adalah pilihan terbaik untuk memenuhi kebutuhan Anda.</p>
        </div>
        <div class="about-container">
            <div class="about-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                <div class="about-icon">
                    <img src="./img/consul1.png" alt="Free Consultation Icon">
                </div>
                <h2>Free Consultation</h2>
                <p>Gratis konsultasi untuk pemasangan biopori</p>
            </div>
            <div class="about-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                <div class="about-icon">
                    <img src="./img/eco1.png" alt="Free Eco Enzyme Icon">
                </div>
                <h2>Free Eco Enzyme</h2>
                <p>Gratis Eco Enzyme disetiap pemasangan biopori</p>
            </div>
        </div>
    </section>

    <!-- biohita-product section -->
    <section id="about-product" class="about-product1-section">
        <div class="about-product1-image">
            <img src="./img/biopore edit.jpg" alt="Product 1 Image">
        </div>
        <div class="about-product1-content" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50">
            <p>Biopori Untuk Bumi,</p>
            <h2>BIOHITA</h2>
            <p>Biohita merupakan sebuah startup yang bergerak dibidang jasa pemasangan
                lubang resapan air biopori.</p>
            <button class="order-now-button-bio">
                <a href="#form">Order Now!</a>
            </button>
        </div>
    </section>

    <!-- eco enzyme product section -->
    <section class="about-product2-section">
        <div class="about-product2-content" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
            <p>si Cairan Serba Guna</p>
            <h2>ECO ENZYME</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et sapien vitae nisl blandit rhoncus. Sed in
                elit risus. Donec volutpat est sed metus accumsan, ac congue odio aliquam. Ut eleifend ex id congue dictum.
                Sed bibendum ligula vel mauris dapibus condimentum.</p>
            <button class="order-now-button-eco">
                <a href="#form">
                    Free Eco Enzyme!*
                </a>
            </button>
            <p id="warning">*disetiap pemasangan biopori</p>
        </div>
        <div class="about-product2-image">
            <img src="./img/eco enzym.png" alt="Product 1 Image">
        </div>
    </section>

    <!-- out team section -->
    <section class="our-team-section">
        <h2>OUR TEAM</h2>
        <div class="team-members" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
            <div class="team-member">
                <img src="./img/erika.jpg" alt="Team Member 1">
                <h3>ERIKA</h3>
                <p>CEO</p>
            </div>
            <div class="team-member">
                <img src="./img/dede.jpg" alt="Team Member 2">
                <h3>DEDE</h3>
                <p>Social Media Management</p>
            </div>
            <div class="team-member">
                <img src="./img/akila.png" alt="Team Member 3">
                <h3>AKILA</h3>
                <p>Web Development</p>
            </div>
            <div class="team-member">
                <img src="./img/dyah.jpg" alt="Team Member 4">
                <h3>DYAH</h3>
                <p>Web Development</p>
            </div>
        </div>
    </section>

    <!-- client feedback -->
    <section class="clients-feedback-section">
        <p style="color: #fff;">Testimonials</p>
        <h2 style="color: #fff;">CLIENT'S FEEDBACK</h2>
        <div class="testimonial-box">
            <div class="testimonial" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                <img src="./img/quote.png" />
                <p class="feedback">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pellentesque eros sit amet enim
                    efficitur, quis tristique lacus laoreet. Sed porttitor nisi at lacinia."</p>
                <p class="client">- John Doe</p>
            </div>
            <div class="testimonial" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                <img src="./img/quote.png" />
                <p class="feedback">"Vestibulum rhoncus eleifend tellus id ullamcorper. Sed laoreet consequat tellus at
                    interdum. Proin tempus risus in malesuada consequat."</p>
                <p class="client">- Jane Smith</p>
            </div>
        </div>
    </section>


    <!-- form section -->
    <!-- <section id="form" class="contact-us-section">
        <div class="contact-info">
            <div class="company-logo">
                <img src="./img/LOGO IJO.png" alt="Company Logo">
            </div>
            <p style="margin-left:20px;font-size:35px;font-weight:700">FORMULIR PEMESANAN</p>
            <p style="margin-left:20px;font-size:15px;margin-bottom: 10px;">Agar memudahkan kami untuk melakukan pemasangan biopori dirumah anda, <br>silahkan isi data diri anda pada formulir berikut.</p>
            <div class="men-photo">
                <img src=" ./img/men.png" alt="men-pointer" class="men">
            </div>
        </div>

        <div class="contact-form">

            <form method="post">
                <div class=" email">
                    <img src="./img/email.png">
                    <p>Email : </p>
                </div>
                <input type="email" name="email" id="email" required>

                <div class="name">
                    <img src="./img/Person.png">
                    <p>Name : </p>
                </div>
                <input type="text" name="name" id="name" required>

                <div class="telephone">
                    <img src="./img/Phone.png">
                    <p>Telephone : </p>
                </div>
                <input type="tel" name="telephone" id="telephone" required>

                <div class="address">
                    <img src="./img/Home Page.png">
                    <p>Address : </p>
                </div>
                <input type="text" name="address" id="address" required>

                <div class="note">
                    <img src="./img/Comments.png">
                    <p>Note Tambahan : </p>
                </div>
                <textarea name="message" id="message" required></textarea>
                <button type="submit" class="submit" name="submit">Submit</button>
            </form>
        </div>
    </section> -->

    <section id="form" class="contact-us-section">
        <div class="contact-info">
            <div class="company-logo">
                <img src="./img/LOGO IJO.png" alt="Company Logo">
            </div>
            <p style="margin-left:20px;font-size:35px;font-weight:700">FORMULIR PEMESANAN</p>
            <p style="margin-left:20px;font-size:15px;margin-bottom: 10px;">Agar memudahkan kami untuk melakukan pemasangan biopori dirumah anda, <br>silahkan isi data diri anda pada formulir berikut.</p>

        </div>

        <div class="contact-form">

            <form method="post">
                <div class=" email">
                    <img src="./img/email.png">
                    <p>Email : </p>
                </div>
                <input type="email" name="email" id="email" required>

                <div class="name">
                    <img src="./img/Person.png">
                    <p>Name : </p>
                </div>
                <input type="text" name="name" id="name" required>

                <div class="telephone">
                    <img src="./img/Phone.png">
                    <p>Telephone : </p>
                </div>
                <input type="tel" name="telephone" id="telephone" required>

                <div class="address">
                    <img src="./img/Home Page.png">
                    <p>Address : </p>
                </div>
                <input type="text" name="address" id="address" required>

                <div class="note">
                    <img src="./img/Comments.png">
                    <p>Note Tambahan : </p>
                </div>
                <textarea name="message" id="message" required></textarea>
                <button type="submit" class="submit" name="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-column">
            <div class="footer-left">
                <img src="./img/logo putih lengkap.png">
                <p>Biohita merupakan sebuah startup yang bergerak dibidang jasa pemasangan lubang resapan air biopori.</p>
            </div>

            <div class="footer-middle">
                <h3>OUR SERVICES</h3>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#about-product">Product</a></li>
                    <li><a href="#form">Order</a></li>
                </ul>
            </div>

            <div class="footer-right">
                <h3>OUR CONTACT</h3>
                <ul class="footer-links">
                    <li><a href="#">WhatsApp</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Email</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2023 BIOHITA. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "cust_db";

$conn = mysqli_connect($server, $user, $pass, $database);

if ($conn) {
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $telephone = $_POST['telephone'];
        $address = $_POST['address'];
        $message = $_POST['message'];

        $sql = "INSERT INTO order_form (email, name, telephone, address, message) 
            VALUES ('$email', '$name', '$telephone', '$address', '$message')";

        $query = mysqli_query($conn, $sql);

        if ($query) {
?>
            <script>
                swal({
                    title: "Selesai!",
                    text: "Anda berhasil mengisi formulir pemesanan!",
                    icon: "success",
                    button: "Kembali ke halaman utama, yuk!",
                });
            </script>
<?php
        }
    }
} else {
    echo "Not Connected";
}
?>
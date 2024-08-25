<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Wrld</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Montserrat:wght@600&family=Poppins:wght@200;400&family=Roboto:wght@700&display=swap"
        rel="stylesheet">

    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- icons -->

    <!-- style -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- style -->

    <link rel="icon" href="./img/WILDWRLDLETTELOGO.png">
</head>

<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">WILDWRLD</a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#product">Product</a>
            <a href="#contact">Contact</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button"><i data-feather="search"></i>
            </a>
            <a href="./content/cart.html" id="cart"><i data-feather="shopping-cart"></i>
            </a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i>
            </a>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="Search here..">
            <label for="search-box"><i data-feather="search"></i></label>
        </div>
    </nav>

    <section class="hero" id="home">
        <main class="content">
            <h1>Feels Like Taking Over the World</h1>
            <a href="shop.php" class="cta">Shop Now</a>
        </main>
    </section>

    <section id="about" class="about">
        <h2>About WILDWRLD</h2>
        <div class="row">
            <div class="about-img">
                <img src="./img/aboutusimg.jpg" alt="About-WildWrld">
            </div>
            <div class="content">
                <p>
                    At our heart, we are a fashion venture born amidst the vibrant streets and creative fervor of
                    Bandung, Indonesia. Founded in 2023, we set out on a journey to redefine fashion with a commitment
                    to quality, innovation, and style.
                </p>
                <p>
                    Bandung, a city celebrated for its rich cultural heritage and bustling creative community, became
                    our home. Surrounded by artisans, designers, and a culture steeped in fashion, we were inspired to
                    create something extraordinary. Our roots in Bandung have been a constant source of inspiration,
                    shaping our identity as a brand that celebrates diversity, creativity, and authenticity.
                </p>
                <p>
                    In 2023, we introduced our very first product - the Boxy T-Shirt. This was more than just another
                    addition to the wardrobe; it was a revolution in comfort, style, and sustainability. Our Boxy
                    T-Shirts are a testament to our dedication to crafting high-quality, timeless pieces that
                    effortlessly fuse fashion with functionality.
                </p>
                <p>
                    We invite you to join us on this exciting journey through fashion. Discover the essence of Bandung,
                    Indonesia, and embrace our commitment to style, quality, and innovation. Thank you for being a part
                    of our story.
                </p>
            </div>
        </div>
    </section>

    <section class="product-section" id="product">
        <h2>Product</h2>
        <div class="card-section">
            <a class="card"
                href="./product/boxytshirt.php">
                <img src="./img/foto3.png">
            </a>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <div class="row">
            <form action="" method="post">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" name="subject" placeholder="Name" required>
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i data-feather="message-square"></i>
                    <textarea name="messages" placeholder="Messages" required></textarea>
                </div>
                <button type="submit" class="btn" name="send">Send Message</button>
            </form>
        </div>
    </section>

    <footer class="footer" id="contact">
        <div class=" container-footer">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#product">Product</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="https://instagram.com/wildwrld.co?igshid=MzRlODBiNWFlZA">Instagram</a></li>
                        <li><a href="https://www.tiktok.com/@wildwrld.co?_t=8gDuHb5Y9jU&_r=1">Tiktok</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Official Store</h4>
                    <ul>
                        <li><a href="https://shp.ee/z8y2ib7">Shopee</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p>&copy; 2023 WILDWRLD</p>
    </footer>

    <script>
        feather.replace();
    </script>

    <script src="./js/script.js"></script>
</body>

</html>
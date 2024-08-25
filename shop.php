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
</head>

<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">WILDWRLD</a>

        <div class="navbar-nav">
            <a href="#tshirt">T-shirt</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button"><i data-feather="search"></i>
            </a>
            <a href="#" id="cart"><i data-feather="shopping-cart"></i>
            </a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i>
            </a>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="Search here..">
            <label for="search-box"><i data-feather="search"></i></label>
        </div>
    </nav>

    <section class="products" id="products">
        <div class="row">
            <a class="product-link" href="./product/boxytshirt.php">
                <div class="product-card">
                    <div class="product-image">
                        <img src="./img/foto3.png" alt="product1">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">Boxy T-Shirt</h3>
                    </div>
                    <div class="product-icons">
                        <div class="product-price">
                            Rp.119.000<span>Rp.120.000</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <footer class="footer" id="contact">
        <div class=" container-footer">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#products">Shop</a></li>
                        <li><a href="index.php#home">Home</a></li>
                        <li><a href="index.php#about">About</a></li>
                        <li><a href="index.php#product">Product</a></li>
                        <li><a href="index.php#contact">Contact</a></li>
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
<!DOCTYPE html>
<html>
    <head>
        <?php
            $hostname="localhost:3307";
			$username="root";
			$password="";
			$dbname="sabata";
	
			$connect=mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection Failed");
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            $query = "SELECT * FROM product_item WHERE product_item_id = 1";
            $sendsql = mysqli_query($connect, $query);
            $image = mysqli_fetch_array($sendsql);
        ?>
        <title>All Products - Sabata</title>
        <link href="css/Style3.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- ambik font dari google font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    </head>

    <body>

            <div id="container">
                <div id="navbar">
                    <div id="logo">
                    <a href="MainPage.php"><img src="images/sabatablack.png" width="125px"></a>
                    </div>
                    <nav>
                        <ul id="menu">
                            <li><a href="MainPage.php">Home</a></li>
                            <li><a href="Products.php">Products</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="Account.php">Account</a></li>
                    
                        </ul>
                    </nav>
                        <a href="Cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
                        <img src="images/menu.png" id="menu-icon" onclick="menutoggle()">
                    </div>
                    
                </div>
            </div>

        <!--------------- single product details ---------------->

        <div class="small-container single-product" >
            <div id="row">
                <div id="col-2">
                    <img src= <?php echo $image['product_image'] ?> width="100%" id="big-img">

                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="images/adidasyeezy1.webp" width="100%" class="small-img" onclick="changeBigImage(this.src)">
                        </div>
                        <div class="small-img-col">
                            <img src="images/yeezyresin1.webp" width="100%" class="small-img" onclick="changeBigImage(this.src)">
                        </div>
                        <div class="small-img-col">
                            <img src="images/yeezyresin2.webp" width="100%" class="small-img" onclick="changeBigImage(this.src)">
                        </div>
                        <div class="small-img-col">
                            <img src="images/yeezyresin3.webp" width="100%" class="small-img" onclick="changeBigImage(this.src)">
                        </div>
                    </div>

                </div>
                <div id="col-2">
                    <h4>Home / Yeezy</h4>
                    <h2>Adidas Yeezy Slushy 450 Resin</h2>
                    <h4>RM 650.00</h4>
                    <select>
                        <option>Select size</option>
                        <option>10 UK</option>
                        <option>9 UK</option>
                        <option>8 UK</option>
                        <option>7 UK</option>
                        <option>6 UK</option>
                    </select>
                    <input type="number" value="1">
                    <a href="" id="btn">Add To Cart</a>

                    <h5>Product Details <i class="fa fa-indent"></i></h5>
                    <br>
                    <h7>The adidas Yeezy 450 “Resin” is a monochromatic tan colorway of the progressive, sock-like shoe by Kanye West and adidas that was released in December 2021.</h7>
                </div>
            </div>
        </div>

        <!--------------- title ---------------->

        <div class="small-container">
            <div id="row-products">
                <h2>Related Products</h2>
                <div id="row-sort">
                    <p>View More</p>
                </div>
            </div>
        </div>

        <!--------------- products ---------------->

        <div class="small-container">

            <div id="row">

                <div id="col-4">
                    <img src="images/nikeaj1.webp">
                    <h4>Air Jordan 1 Mid Split Black White</h4>
                    <div id="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>RM 650.00</p>
                </div>

                <div id="col-4">
                    <img src="images/nikeaj2.webp">
                    <h4>Air Jordan 1 Mid Blue White Red</h4>
                    <div id="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>RM 557.00</p>
                </div>

                <div id="col-4">
                    <img src="images/nikeaj3.webp">
                    <h4>Air Jordan 1 Mid Pinksicle Safety Orange</h4>
                    <div id="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>RM 510.00</p>
                </div>
                
                <div id="col-4">
                    <img src="images/nikeaj4.webp">
                    <h4>Air Jordan 1 Mid Altitude Green-Sail</h4>
                    <div id="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>RM 670.00</p>
                </div>
            </div>

        </div>

      <!------------- footer --------------->

      <div id="footer">
        <div id="container">
            <div id="row">
                <div id="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div id="app-logo">
                        <img src="images/playstore.png">
                        <img src="images/appstore.png">
                    </div>
                </div>
                <div id="footer-col-2">
                    <img src="images/sabatawhite.png">
                    <p>Our Purpose Is To Sustainably Make The Pleasure and Benefits of Sports Accessible to the Many</p>
                </div>
                <div id="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div id="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Intagram</li>
                        <li>Tik Tok</li>
                    </ul>
                </div>
            </div>

            <hr>
            <p id="copyright">Copyright 2023 - CSC264 Group Project: eCommerce Website - Online Shoe Store</p>

        </div>
      </div>

      <!-- js untuk toggle menu -->

      <script> /* script untuk buat background hitam belakang menu naik atas */
        var menu = document.getElementById("menu");

        menu.style.maxHeight = "0px";

        function menutoggle(){
            if(menu.style.maxHeight == "0px") {
                menu.style.maxHeight = "200px";
            } else {
                menu.style.maxHeight = "0px";
            }
        }
      </script>

      <!-- js for product gallery -->

    <script>
        function changeBigImage(src) {
            var bigImg = document.getElementById("big-img");
            bigImg.src = src;
        }
    </script>

    </body>
</html>
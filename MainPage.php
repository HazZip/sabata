<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sabata Shoe Store</title>
        <link href="css/Style3.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- ambik font dari google font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    </head>

    <body>


        <div id="header">

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
                    <div id="row">
                        <div id="col-2">
                            <h1>Wear Your Heart<br>On Your Feet!</h1>
                            <p>
                                ArepkontolArepkontolArepkontolArepkontolArepkontolArepkontolArepkontol<br>ArepkontolArepkontolArepkontolArepkontolArepkontolArepkontol
                            </p>
                            <a href="ProductDetails.php" id="btn">Explore Now &#8594;</a>
                        </div>
                        <div id="col-2">
                            <img src="images/nikeajskylinerb.png" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        
        </div>

        <!--------------- featured categories ---------------->

        <div id="categories">
            <div class="small-container">
                <div id="row">
                    <div id="col-3">
                        <img src="images/nikesb1.webp">
                    </div>
                    <div id="col-3">
                        <img src="images/nikesb2.webp">
                    </div>
                    <div id="col-3">
                        <img src="images/nikesb3.webp">
                    </div>
                </div>
            </div>
            
        </div>

        <!--------------- featured products ---------------->

        <div class="small-container">
            <h2 id="title">Featured Products</h2>
            <div id="row">

                <div id="col-4">
                    <a href="ProductDetails.php"><img src="images/nikeaj1.webp"></a>
                    <a href="ProductDetails.php"><h4>Air Jordan 1 Mid Split Black White</h4></a>
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
                    <a href="ProductDetails.php"><img src="images/nikeaj2.webp"></a>
                    <a href="ProductDetails.php"><h4>Air Jordan 1 Mid Blue White Red</h4></a>
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
                    <a href="ProductDetails.php"><img src="images/nikeaj3.webp"></a>
                    <a href="ProductDetails.php"><h4>Air Jordan 1 Mid Pinksicle Safety Orange</h4></a>
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
                    <a href="ProductDetails.php"><img src="images/nikeaj4.webp"></a>
                    <a href="ProductDetails.php"><h4>Air Jordan 1 Mid Altitude Green-Sail</h4></a>
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

            <h2 id="title">Latest Products</h2>

            <div id="row">

                <div id="col-4">
                    <a href="ProductDetails.php"><img src="images/adidasyeezy1.webp"></a>
                    <a href="ProductDetails.php"><h4>Adidas Yeezy Slushy 450 Resin</h4></a>
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
                    <a href="ProductDetails.php"><img src="images/adidasyeezy2.webp"></a>
                    <a href="ProductDetails.php"><h4>Adidas Yeezy Boost 700 Fiery Sun</h4></a>
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
                    <a href="ProductDetails.php"><img src="images/adidasyeezy3.webp"></a>
                    <a href="ProductDetails.php"><h4>Adidas Yeezy Boost 500 White Blush</h4></a>
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
                    <a href="ProductDetails.php"><img src="images/adidasyeezy4.webp"></a>
                    <a href="ProductDetails.php"><h4>Adidas Yeezy Boost 700 Bright Blue</h4></a>
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

            <div id="row">

                <div id="col-4">
                    <a href="ProductDetails.php"><img src="images/adidasyeezy1.webp"></a>
                    <a href="ProductDetails.php"><h4>Adidas Yeezy Slushy 450 Resin</h4></a>
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
                    <a href="ProductDetails.php"><img src="images/adidasyeezy2.webp"></a>
                    <a href="ProductDetails.php"><h4>Adidas Yeezy Boost 700 Fiery Sun</h4></a>
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
                    <a href="ProductDetails.php"><img src="images/adidasyeezy3.webp"></a>
                    <a href="ProductDetails.php"><h4>Adidas Yeezy Boost 500 White Blush</h4></a>
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
                    <a href="ProductDetails.php"><img src="images/adidasyeezy4.webp"></a>
                    <a href="ProductDetails.php"><h4>Adidas Yeezy Boost 700 Bright Blue</h4></a>
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

        <!-------------- offer ----------------->

        <div id="offer">
            <div class="small-container">
                <div id="row">
                    <div id="col-2">
                        <img src="images/nikeajskylinerb.png" id="offer-img">
                    </div>
                    <div id="col-2">
                        <p>Exclusively Available on ItqnazsShoes Store</p>
                        <h1>Air Jordan 1 High OG “Skyline”</h1>
                        <small>The Air Jordan 1 High OG “Skyline” is a colorway of Michael Jordan’s first signature shoe that is inspired by the original Jordan 1 campaign rollout. In a unique way, the Jordan 1 High OG “Skyline” is influenced by the purple and orange hues of the skyline photo of “The GOAT” wearing the original Jordan 1. The shoe features a white leather base with denim overlays that are designed with a Vivid Orange appearance that gradients into Lilac towards the heel, a nod to the orange-to-purple hue of the skyline. A black “Wings” logo appears on the collar and “Nike Air” detailing is found on the tongue.</small>
                        <a href="ProductDetails.php" id="btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>

        <!------------- testimonial / feedback --------------->

        <div id="testimonial">
            <div class="small-container">
                <div id="row">
                    <div id="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and presenting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        </p>
                        <div id="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="images/dominictoretto.jpg">
                        <h3>Dominic Torreto</h3>
                    </div>

                    <div id="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and presenting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        </p>
                        <div id="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="images/dominictoretto.jpg">
                        <h3>Dominic Torreto</h3>
                    </div>

                    <div id="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and presenting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        </p>
                        <div id="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="images/dominictoretto.jpg">
                        <h3>Dominic Torreto</h3>
                    </div>

                </div>
            </div>
        </div>

                <!------------- brands --------------->

                <div id="brands">
                    <div class="small-container">
                        <div id="row">
                            <div id="col-5">
                                <img src="images/logovans.png">
                            </div>
                            <div id="col-5">
                                <img src="images/logonike.png">
                            </div>
                            <div id="col-5">
                                <img src="images/logoaj.png">
                            </div>
                            <div id="col-5">
                                <img src="images/logoaj2.png">
                            </div>
                            <div id="col-5">
                                <img src="images/logoadidas.png">
                            </div>
                            <div id="col-5">
                                <img src="images/logosupreme.png">
                            </div>
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

    </body>
</html>
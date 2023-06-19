<!DOCTYPE html>
<html>
    <head>
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

        <!------------- account page --------------->
        
        <div class="account-page">
            <div id="container">
                <div id="row">
                    <div id="col-2">
                        <img src="images/nikeajskylinerb.png" width="100%">
                    </div>
                    <div id="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                            </div>

                            <form id="login-form">
                                <input type="text" placeholder="Username">
                                <input type="password" placeholder="Password">
                                <button type="submit" id="btn">Login</button>
                                <a href="">Forgot password</a> <!-- yg ni saja je tulis, tak buat pun takpe sbb tk pandai -->
                            </form>

                            <form id="register-form">
                                <input type="text" placeholder="Username">
                                <input type="email" placeholder="Email">
                                <input type="password" placeholder="Password">
                                <input type="contact" placeholder="Contact">
                                <input type="address" placeholder="Address">
                                <button type="submit" id="btn">Register</button>
                            </form>

                        </div>
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

      <!-- js untuk toggle form -->

        <script>
            var loginForm = document.getElementById("login-form");
            var regForm = document.getElementById("register-form");
            var indicator = document.getElementById("indicator");

            function register() {
                regForm.style.transform = "translateX(0)";
                loginForm.style.transform = "translateX(0)";
                indicator.style.transform = "translateX(100px)";
            }

            function login() {
                regForm.style.transform = "translateX(300px)";
                loginForm.style.transform = "translateX(300px)";
                indicator.style.transform = "translateX(0)";
            }
        </script>

    </body>
</html>
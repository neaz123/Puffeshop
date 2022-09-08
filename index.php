<?php

session_start();


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puffee Shop</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="new project/index.php">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>
        <a href="signup/signup.html" target="_blank">signup</a>
        <a href="login/index.html" target="_blank">login </a>

   <!-- <a> <?php   if($_SESSION['logged']==true){ 
        echo $_SESSION["username"];
        echo '<a href="logout.php"><span>Logout</span></a></li>';
        }  ?> </a> -->
     <!-- <a>   <?php if($_SESSION['loggedIn']): ?>
<span>Welcome <?php echo $_SESSION['username']; ?></span>
<?php endif; ?> </a> -->


        <a>welcome <?php echo $_SESSION['username'] ?> </a> 
         <h2><a href = "logout.php">Sign Out</a></h2>
    
    </nav>

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <!-- <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div> -->



</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>fresh coffee in the morning</h3>
        <p>The love of my life. The love of your life. The bringer of joy -Coffee</p>
        <a href="#" class="btn">get yours now</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpeg" alt="">
        </div>

        <div class="content">
            <h3>what makes our coffee special?</h3>
            <p>We buy only from reputable farmers and millers at volumes equal to several hundred acres. We grade our coffees into different sizes and quality, throw out the lower quality beans and blind taste our grades and types individually to find the best roasting temperature that bring out the best taste for that specific size and coffee bean – different roasting temperatures for different coffee. We do this constantly to maintain a consistent and high-quality roast every time.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> our <span>menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/menu-1.png" alt="">
            <h3>COLD BREW COFFEE</h3>
            <div class="price">৳550 <span>৳750</span></div>
            <a href="new project/index.php" class="btn">Buy now</a>
        </div>

        <div class="box">
            <img src="images/menu-2.png" alt="">
            <h3>CAPPUCCINO</h3>
            <div class="price">৳650 <span>৳770</span></div>
            <a href="new project/index.php" class="btn">Buy now</a>
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>CAFÈ AU LAIT</h3>
            <div class="price">৳750 <span>৳850</span></div>
            <a href="new project/index.php" class="btn">Buy now</a>
        </div>

        <div class="box">
            <img src="images/menu-4.png" alt="">
            <h3>AMERICANO</h3>
            <div class="price">৳950 <span>৳1050</span></div>
            <a href="new project/index.php" class="btn">Buy now</a>
        </div>

        <div class="box">
            <img src="images/menu-5.png" alt="">
            <h3>CAFFÈ MOCHA</h3>
            <div class="price">৳750 <span>৳950</span></div>
            <a href="new project/index.php" class="btn">Buy now</a>
        </div>

        <div class="box">
            <img src="images/menu-6.png" alt="">
            <h3>CAFFÈ LATTE</h3>
            <div class="price">৳750 <span>৳950</span></div>
            <a href="new project/index.php" class="btn">Buy now</a>
        </div>

    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-12.png" alt="">
            </div>
            <div class="content">
                <h3>La Vassa</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">৳1599 <span>৳2099</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-21.png" alt="">
            </div>
            <div class="content">
                <h3>Arabica Classic</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">৳1599 <span>৳2099</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-31.png" alt="">
            </div>
            <div class="content">
                <h3>Green Mount</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">৳1599 <span>৳2099</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p> I really like the atmosphere, good coffee, and nice interior. This is a good place to study or chill with friends.If you’re up for a fresh place with beautiful architecture then this is a must to visit.</p>
            <img src="images/pic-123.png" class="user" alt="">
            <h3>Rabindranath Tagore</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>This place is amazing! They offered the best coffee and showed the best attitude to its costumers. Internet connection is very fast and is unlimited as well.I just want to keep coming back to this place. Thank you!</p>
            <img src="images/pic-21.png" class="user" alt="">
            <h3>Albert Einstein</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Will go again.I only popped in to get take-away cappuccinos, but I was struck by how friendly the service was. The cappuccinos were wonderful too! And very well priced. Coming back to this place.</p>
            <img src="images/pic-31.png" class="user" alt="">
            <h3>Donald Trump</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://maps.google.com/maps?q=Northern%20University%20&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>

        <form action="insert.php" method="post">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text"  name="name" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" name="number" placeholder="number">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/blog-1.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Simple Coffee without Fancy </a>
                <span>by admin / 21st August, 2021</span>
                <p>Sometimes we find ourselves in a tricky situation: urgently need coffee but have no brewing tools in hand. No worries, there are some simple ways to brew coffee! Here are some tips for how to make simple coffee without a brewer at home or for example in woods.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-2.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Latte vs. Flat White</a>
                <span>by admin / 1st september, 2021</span>
                <p>Caffé latte and flat white are definitely the most ordered espresso based drinks in cafés around the world but what are they really? Have you ever wondered the difference between caffé latte vs. flat white?</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-3.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Want to Brew Better Coffee?</a>
                <span>by admin / 21st may, 2021</span>
                <p>Everyone wants to drink great coffee always everywhere, right? In cafés you can rely in the barista's expertise and proper equipment but how about better coffee at home also? Have you struggled to brew that delicious coffee at home? Want to know a secret tip ...?</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/"  target="_blank" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/"  target="_blank" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/"  target="_blank" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/"  target="_blank" class="fab fa-linkedin"></a>
        <a href="https://www.pinterest.com/"  target="_blank" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">menu</a>
        <a href="#">products</a>
        <a href="#">review</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
    </div>

    <div class="credit">created by <span>The Puffers</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
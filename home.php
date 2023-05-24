
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Cake Bakery</title>

    <!-- swiper link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- cdn icon link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- header section start here  -->
    <header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
            <h1 class="logoName">Sweet Cake Bakery</h1>
        </div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#product">product</a>
            <a href="#blogs">blogs</a>
            <a href="#review">review</a>
            <a href="#order">order</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <i class="fas fa-bars" id="menu-bar"></i>
            <a href="login.php"> <i class="fa fa-user-circle-o" aria-hidden="true"></i>    
            </a> 
            <a href="logout.php"> <i style="font-size:24px" class="fa">&#xf08b;</i>
        </div>

        <div class="search">
            <input type="search" placeholder="search...">
        </div>
    </header>
    <!-- header section end here  -->

    <!-- home section start here  -->
    <section class="home" id="home">
        <div class="homeContent">
            <h2>Delicious Cake for Everyone </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum excepturi doloribus, fuga quod deserunt
                recusandae?</p>
            <div class="home-btn">
                <a href="about.php"><button>see more</button></a>
            </div>
        </div>
    </section>

    <!-- home section end here  -->

    <!-- product section start here  -->

    <section class="product" id="product">
        <div class="heading">
            <h2>Our Exclusive Products</h2>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/black-forest.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Black-Forest</h3>
                        <div class="price">₹200-1kg</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="orderNow">
                            <a href="#order"><button>Order Now </button></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/chocolate.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Chocolate</h3>
                        <div class="price">₹150-1kg</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="orderNow">
                            <a href="#order"><button>Order Now </button></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/vanilla.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Vanilla</h3>
                        <div class="price">₹250-1kg</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="orderNow">
                            <a href="#order"><button>Order Now </button></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/butterscotch.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Butterscotch</h3>
                        <div class="price">₹200-1kg</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="orderNow">
                            <a href="#order"><button>Order Now </button></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/red velvet.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Red Velvet</h3>
                        <div class="price">₹300-1kg</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="orderNow">
                            <a href="#order"><button>Order Now </button></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/Strawberry.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Strawberry</h3>
                        <div class="price">₹250-1kg</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="orderNow">
                            <a href="#order"><button>Order Now </button></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/heart-shape.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Heart velvet</h3>
                        <div class="price">₹400-1kg</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="orderNow">
                            <a href="#order"><button>Order Now </button></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/fruit-layer.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Fruit-Layer</h3>
                        <div class="price">₹350-1kg</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="orderNow">
                            <a href="#order"><button>Order Now </button></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- product section end here  -->

    <!-- blogs section start here  -->
    <section class="blogs" id="blogs">

        <div class=" swiper blogs-row">
            <div class="swiper-wrapper">
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="images/blog-img1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Caramel Bourbon Vanilla Cupcakes </h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi dolorum voluptatum
                            corporis accusamus aperiam fugiat tempora blanditiis labore dolor aliquid maxime nobis
                            laborum sed soluta voluptatibus aspernatur natus, dicta quisquam.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ab ullam reiciendis sint
                            eaque at.</p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="images/blog-img2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Caramel Bourbon Vanilla Cupcakes </h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi dolorum voluptatum
                            corporis accusamus aperiam fugiat tempora blanditiis labore dolor aliquid maxime nobis
                            laborum sed soluta voluptatibus aspernatur natus, dicta quisquam.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ab ullam reiciendis sint
                            eaque at.</p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="images/blog-img3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Caramel Bourbon Vanilla Cupcakes </h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi dolorum voluptatum
                            corporis accusamus aperiam fugiat tempora blanditiis labore dolor aliquid maxime nobis
                            laborum sed soluta voluptatibus aspernatur natus, dicta quisquam.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ab ullam reiciendis sint
                            eaque at.</p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>


        </div>
    </section>

    <!-- blogs section ends here  -->

    <!-- newsletter section start here  -->

    <section class="newsletter">
        <form action="">
            <h3>subscribe for latest update</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="button" value="subscribe" class="box2">
        </form>
    </section>
    <!-- newsletter section ends here  -->

    <!-- review section start here  -->
    <section class="review" id="review">
        <div class="heading">
            <h2>client review</h2>
        </div>


        <div class=" swiper review-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto
                            quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <!-- <div class="img">
                            <img src="" alt="">
                        </div> -->
                        <div class="clientDetailed">
                            <h3>ABC</h3>
                            <p>UI / UX designer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto
                            quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <!-- <div class="img">
                            <img src="" alt="">
                        </div> -->
                        <div class="clientDetailed">
                            <h3>ABC</h3>
                            <p>UI / UX designer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto
                            quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <!-- <div class="img">
                            <img src="" alt="">
                        </div> -->
                        <div class="clientDetailed">
                            <h3>ABC</h3>
                            <p>UI / UX designer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto
                            quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <!-- <div class="img">
                            <img src="" alt="">
                        </div> -->
                        <div class="clientDetailed">
                            <h3>ABC</h3>
                            <p>UI / UX designer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>
    <!-- review section ends here  -->

    <!-- order section starts  -->
   
<section class="order" id="order">

    <h1 class="heading"> <span>order</span> now </h1>

    <div class="row">
        
        <div class="image">
            <img src="images/order.jpg" alt="">
        </div>

        <!-- <form action=""> -->
        <form action="ordercake.php" method="get" >
            <div class="inputBox">
                <input type="text" name="uname" placeholder="Enter your full name">
                <input type="email" name="email" placeholder="Enter your email">
            </div>

            <div class="inputBox">
                <input type="contact number"  name="contact" placeholder="Enter your contact number">
                <input type="text"  name="flavour" placeholder="Enter cake flavour" >
            </div>

            <div class="inputBox">
                <input type="date"  name="date" placeholder="date">
                <input type="time"  name="time" placeholder="Time">
            </div>
            <label for="">Mention Weight of cake</label>
            <div class ="inputBox">
            <input type="kg"  name="kg" placeholder="kg">
            </div>
           
            <textarea placeholder="Enter your full address" name="ad" id="" cols="30" rows="10"></textarea>

            <button class="SendButton" name="register">
                <a href="#" style="color: #fff;">Send</a>
              </button>

        </form>

    </div>

</section>

<!-- order section ends -->

    <!-- footer section start here  -->

    <footer class="footer" id="contact">
        <div class="box-container">
            <div class="mainBox">
                <div class="content">
                    <a href="#"><img src="images/logo.png" alt=""></a>
                    <h1 class="logoName"> Sweet Cake Bakery </h1>
                </div>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta accusamus maxime quod.</p>

            </div>
            <div class="box">
                <h3>Quick link</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>Home</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>product</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>blogs</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>review</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>contact</a>

            </div>
            <div class="box">
                <h3>Extra link</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>Account info</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>order item</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>payment method</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>our  services</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i>+91 12222 34444</a>
                <a href="#"> <i class="fas fa-envelope"></i>abc@gmail.com</a>

            </div>

        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>
 
    </footer>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file  -->
    <script src="index.js"></script>


</body>

</html>
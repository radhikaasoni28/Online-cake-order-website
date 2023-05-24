<?php
// database connection code
$con = mysqli_connect('localhost', 'root', '', 'cakedata');

// check if the form is submitted
if (isset($_GET['register'])) {
    // get the post records
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $pass = isset($_GET['pw']) ? $_GET['pw'] : '';
    $button = isset($_GET['register']) ? $_GET['register'] : '';

    // database insert SQL code
    $query = "SELECT * FROM record WHERE email = '$email' && pw = '$pass'";

    // insert in database
    $rs = mysqli_query($con, $query);
    $num = mysqli_num_rows($rs);

    if ($num) {
        header('location:home.php');
        exit; // Add exit to stop further execution
    } else {
        echo "<br><h1>User not found";
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Login to your account</title>
        <link rel="stylesheet" href="login.css">
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
            <a href="home.php#home">home</a>
            <a href="home.php#product">product</a>
            <a href="home.php#blogs">blogs</a>
            <a href="home.php#review">review</a>
            <a href="home.php#order">order</a>
            <a href="home.php#contact">contact</a>
        </nav>

        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <i class="fas fa-bars" id="menu-bar"></i>
            <a href="login.php"> <i class="fa fa-user-circle-o" aria-hidden="true"></i>    
            </a> 
        </div>

        <div class="search">
            <input type="search" placeholder="search...">
        </div>
    </header>
    <!-- header section end here  -->

        <section>
        <div class="container" > 
            
            <div class="left_div">
                <form action="login.php" method="get" >
                <label for="" class="login"> Login to Your Account </label>
                <div class="inputBox" class="atext">
                    <input type="email" name ="email" required="required" class="text"  >
                    <span>Email </span>
                </div>
                <div class="inputBox" class="atext" >
                    <input type="password" required="required" id="pw" name="pw" autocomplete="off">
                    <span>Password </span>
                </div>
                <button class="button_sign" name="register">Sign IN</button>
            </div>
        </form>

            <div class="right_div" >
                <h1 id="new">  New here?  </h1>
                <p id="para">
                    <br>
                    Sign up and disover a great amount of new opportunities!
                </p>
                <br>
                <br>
                <button class="button" onclick="location.href='signup.html'">Sign Up</button>   
            </div>  
        </div>    
        </section>
    </body>
</html>
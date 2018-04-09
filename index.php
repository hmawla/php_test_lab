<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />

    <title>Mawla Telecom Shop</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/scrollable_carousel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popmotion.global.min.js"></script>
</head>

<body onload="setScrollableCarouselWidth(9);">
    <!-- Top Navbar start -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">MAWLA TELECOM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Devices
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                                include 'dropdown.php';
                                getBrands();
                            ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cards
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Touch</a>
                            <a class="dropdown-item" href="#">Alfa</a>
                        </div>
                    </li>
                </ul>
                <span class="navbar-text">
                        <?php
                            include 'encryptor.php';
                            if(isset($_COOKIE['shopLoggedName'])){
                                echo "Welcome: " . doDecrypt($_COOKIE['shopLoggedName']) . '<a href="logout-exec.php"> Logout</a>';
                            }
                            else{
                                echo '<a href="login.php">Login</a>';
                            }
                        ?>
                    </span>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>

    </nav>
    <!-- Top Navbar end -->
    <!-- Header start -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-top:50px;padding-bottom:50px:">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/4.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/4.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/4.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <h1>Featured Items:</h1>
        <button onclick="movePrev()">Prev</button>
        <button onclick="moveNext()">Next</button>
        <br><br><br>
        <div id="theDivv" onmousedown="" style="max-width:100%;min-width: 200px; max-height: 25%; min-height:400px; border: solid 5px black;padding:5px; overflow:hidden;">
            <div id="theDiv" style="background-color:yellow;user-select:none;width: 300px;transform: translate(-50px,0px);">
                <div class="card text-center border-primary" style="margin-bottom: 10px;border: solid 5px black;">
                    <img style="cursor: pointer;pointer-events: none;" class="card-img-top" src="samsunggalaxys9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Galaxy S9 Plus</h5>
                        <p class="card-text">999$</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
                <div class="card text-center border-primary" style="margin-bottom: 10px;border: solid 5px black;">
                    <img style="cursor: pointer;pointer-events: none;" class="card-img-top" src="samsunggalaxys9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Galaxy S9 Plus</h5>
                        <p class="card-text">999$</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
                <div class="card text-center border-primary" style="margin-bottom: 10px;border: solid 5px black;">
                    <img style="cursor: pointer;pointer-events: none;" class="card-img-top" src="samsunggalaxys9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Galaxy S9 Plus</h5>
                        <p class="card-text">999$</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
                <div class="card text-center border-primary" style="margin-bottom: 10px;border: solid 5px black;">
                    <img style="cursor: pointer;pointer-events: none;" class="card-img-top" src="samsunggalaxys9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Galaxy S9 Plus</h5>
                        <p class="card-text">999$</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
                <div class="card text-center border-primary" style="margin-bottom: 10px;border: solid 5px black;">
                    <img style="cursor: pointer;pointer-events: none;" class="card-img-top" src="samsunggalaxys9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Galaxy S9 Plus</h5>
                        <p class="card-text">999$</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
                <div class="card text-center border-primary" style="margin-bottom: 10px;border: solid 5px black;">
                    <img style="cursor: pointer;pointer-events: none;" class="card-img-top" src="samsunggalaxys9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Galaxy S9 Plus</h5>
                        <p class="card-text">999$</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
                <div class="card text-center border-primary" style="margin-bottom: 10px;border: solid 5px black;">
                    <img style="cursor: pointer;pointer-events: none;" class="card-img-top" src="samsunggalaxys9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Galaxy S9 Plus</h5>
                        <p class="card-text">999$</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
                <div class="card text-center border-primary" style="margin-bottom: 10px;border: solid 5px black;">
                    <img style="cursor: pointer;pointer-events: none;" class="card-img-top" src="samsunggalaxys9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Galaxy S9 Plus</h5>
                        <p class="card-text">999$</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
                <div class="card text-center border-primary" style="margin-bottom: 10px;border: solid 5px black;">
                    <img style="cursor: pointer;pointer-events: none;" class="card-img-top" src="samsunggalaxys9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Galaxy S9 Plus</h5>
                        <p class="card-text">999$</p>
                        <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                </div>
            </div>

        </div>
    </div>











    <script>
        (function($) {
            "use strict";

            // manual carousel controls
            $('.next').click(function() {
                $('.carousel').carousel('next');
                return false;
            });
            $('.prev').click(function() {
                $('.carousel').carousel('prev');
                return false;
            });

        })(jQuery);
    </script>

    <script src="js/scrollable_carousel.js"></script>
</body>

</html>
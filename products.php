<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mawla Telecom Products</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/scrollable_carousel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popmotion.global.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
    <style>
        .mainTable {
            width: 100%;
        }
        
        .mainTable tr td {
            border-bottom: 2px solid #19bebe;
        }
        
        .mainTable tr td:nth-child(1) {
            width: 80px;
            padding-left:0;
            padding-right:0;
        }
        
        .mainTable tr td:nth-child(2) {}
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">MAWLA TELECOM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <i class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Devices <i class="fa fa-mobile-phone"></i>
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            include 'dropdown.php';
                            getBrands();
                        ?>
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
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"></div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>

    <div style="margin-top: 50px" class="container">
        <form action="" style="margin-top:60px;">
            <table>
            <tr>
            <td>
                <label style="Color:#19bebe;font-weight:bolder;padding:10px;" for="Search">SEARCH</label>
            </td>
            <td>
                <input type="text" class="form-control inputText" name="Search" id="search">
            </td>
            <td>
              <select class="form-control inputText" name="devices" id="devices">
                 <option value="samsung">Samsung</option>
                 <option value="iphone">Iphone</option>
                 <option value="sony">Sony</option>
                 <option value="Huawei">Huawei</option>
              </select>
            </td>
            <td>
            <button class="form-control inputText" ><i class="fa fa-search"></i></button>
            </td>
            </tr>
            </table>
        </form>
        <table class=" mainTable table " style="">
            <tr>
                <td>
                    <img width="100%" src="images/test.png " alt=" ">
                </td>
                <td>
                    <div>Device Name</div>
                    <div>Device Price</div>
                    <button>Add to Cart</button>
                </td>
            </tr>
            <tr>
                <td>
                    <img width="100%" src="images/test.png " alt=" ">
                </td>
                <td>
                    <div>Device Name</div>
                    <div>Device Price</div>
                    <button>Add to Cart</button>
                </td>
            </tr>
            <tr>
                <td>
                    <img width="100%" src="images/test.png " alt=" ">
                </td>
                <td>
                    <div>Device Name</div>
                    <div>Device Price</div>
                    <button>Add to Cart</button>
                </td>
            </tr>
            <tr>
                <td>
                    <img width="100%" src="images/test.png " alt=" ">
                </td>
                <td>
                    <div>Device Name</div>
                    <div>Device Price</div>
                    <button>Add to Cart</button>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
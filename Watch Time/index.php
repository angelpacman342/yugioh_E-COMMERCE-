<!--http://localhost/phpmyadmin/index.php?reload=1-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Time Watch</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="css/stylesheet.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script src="javascript/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="javascript/jstree.min.js" type="text/javascript"></script>
<script src="javascript/template.js" type="text/javascript" ></script>
<script src="javascript/common.js" type="text/javascript"></script>
<script src="javascript/global.js" type="text/javascript"></script>
<script src="owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
</head>
<body>
<div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="image/loader.gif"  alt="#"/></div>
<header>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="top-left pull-left">
            <div class="language">
              <form action="#" method="post" enctype="multipart/form-data" id="language">
                <div class="btn-group">
                  <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="image/flags/gb.png" alt="English" title="English">English <i class="fa fa-caret-down"></i></button>
                  <ul class="dropdown-menu">
                    <li><a href="#"><img src="image/flags/lb.png" alt="Arabic" title="Arabic"> Arabic</a></li>
                    <li><a href="#"><img src="image/flags/gb.png" alt="English" title="English"> English</a></li>
                  </ul>
                </div>
              </form>
            </div>
            <div class="currency">
              <form action="#" method="post" enctype="multipart/form-data" id="currency">
                <div class="btn-group">
                  <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>$</strong> <i class="fa fa-caret-down"></i> </button>
                  <ul class="dropdown-menu">
                    <li>
                      <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                    </li>
                    <li>
                      <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                    </li>
                    <li>
                      <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
                    </li>
                  </ul>
                </div>
              </form>
            </div>
          </div>
          <div class="top-right pull-right">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <li class="dropdown account"><a href="#" title="My Account" class="  dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i><span>My Account</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="register.html">Register</a></li>
                    <li><a href="login.html">Login</a></li>
                  </ul>
                </li>
                <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i><span>Wish List</span><span> (0)</span></a></li>
              </ul>
              <div class="search-box">
                <input class="input-text" placeholder="Search By Products.." type="text">
                <button class="search-btn"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header-inner">
      <div class="col-sm-4 col-xs-6 header-left">
        <div class="shipping">
          <div class="shipping-img"></div>
          <div class="shipping-text">(+1) 939-419-1105<br>
            <span class="shipping-detail">24/7 Online Support</span></div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 header-middle">
        <div class="header-middle-top">
          <div id="logo"> <a href="index.php"><img src="image/logo.png" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 header-right">
        <div id="cart" class="btn-group btn-block">
          <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total"><span class="cart-title">Shopping Cart</span><br>
          0 item(s) - $0.00</span> </button>
          <ul class="dropdown-menu pull-right cart-dropdown-menu">
            <li>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="image/product/7product50x59.jpg"></a></td>
                    <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                    <td class="text-right">x 1</td>
                    <td class="text-right">$254.00</td>
                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </li>
            <li>
              <div>
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td class="text-right"><strong>Sub-Total</strong></td>
                      <td class="text-right">$210.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                      <td class="text-right">$2.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>VAT (20%)</strong></td>
                      <td class="text-right">$42.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Total</strong></td>
                      <td class="text-right">$254.00</td>
                    </tr>
                  </tbody>
                </table>
                <p class="text-right"> <span class="btn-viewcart"><a href="cart.html"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> <span class="btn-checkout"><a href="checkout.html"><strong><i class="fa fa-share"></i> Checkout</strong></a></span> </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <nav id="menu" class="navbar">
      <div class="nav-inner">
        <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
          <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse">
          <ul class="main-navigation">
            <li><a href="index.php"   class="parent"  >Home</a> </li>
            <li><a href="category.html"   class="parent"  >Collection</a> </li>
            <li><a href="category.html"   class="parent"  >Accessories</a> </li>
            <li><a href="about-us.html" >About us</a></li>
            <li><a href="contact.html" >Contact Us</a> </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<div class="container">
  <div class="mainbanner">
  <div id="main-banner" class="owl-carousel home-slider">
    <div class="item"> <a href="#"><img src="image/banners/4k1.jpg" alt="main-banner1" class="img-responsive" /></a> </div>
    <div class="item"> <a href="#"><img src="image/banners/banner1.jpg" alt="main-banner2" class="img-responsive" /></a> </div>
    <div class="item"> <a href="#"><img src="image/banners/Main-Banner3.jpg" alt="main-banner3" class="img-responsive" /></a> </div>
  </div>
</div>
</div>
<div class="container">
  <div class="row">  
   <!-- <div id="brand_carouse" class="owl-carousel brand-logo">
        <div class="item text-center"> <a href="#"><img src="image/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
      </div>-->
    <div class="cms_banner ">
      <div class="col-md-4 cms-banner-left"> <a href="#"><img alt="#" src="image/banners/subbanner1.jpg"></a> </div>
      <div class="col-md-4 cms-banner-middle"><a href="#"> <img alt="#" src="image/banners/subbanner2.jpg"></a></div>
      <div class="col-md-4 cms-banner-right"> <a href="#"><img alt="#" src="image/banners/subbanner3.jpg"></a> </div>
    </div>
  </div>
  <div class="row">
    <div id="content" class="col-sm-12">
      <div class="customtab">
        <div id="tabs" class="customtab-wrapper">
          <ul class='customtab-inner'>
            <li class='tab'><a href="#tab-latest">Latest Product</a></li>
            <li class='tab'><a href="#tab-special">Special Product</a></li>
            <li class='tab'><a href="#tab-bestseller">Bestseller Items</a></li>
          </ul>
        </div><!--this is where we place some of the products of lastest Tab-->
        <div id="tab-latest" class="tab-content">
          <div class="box">
            <div id="latest-slidertab" class="row owl-carousel product-slider">
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product2.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product3.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product4.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product5.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product6.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- tab-latest-->     <!--this is where we place some of the products of special Tab-->
        <div id="tab-special" class="tab-content">
          <div class="box">
            <div id="special-slidertab" class="row owl-carousel product-slider">
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product4.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product5.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product5.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product6.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product7.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="#"> <img src="image/product/product6.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- tab-special-->
        <div id="tab-bestseller" class="tab-content">
          <div class="box">
            <div id="bestseller-slidertab" class="row owl-carousel product-slider">
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="#"> <img src="image/product/product7.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product8.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product1.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product2.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product3.jpg" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <!--------featured products block------------>
      <h3 class="productblock-title">Featured Products</h3>
      <div class="box">
        <div id="feature-slider" class="row owl-carousel product-slider">
            
        <!--products hfgjfhjhl; iygofgbkjmnhbvgbhnjkmlmlnblkvg j,gvhkdzthskndr'gs 'blbnrgaowrgnoaeby rhjhnkmljn cjvjh,bj,-->
            
          <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Elemental%20HERO%20Neos.jpg" alt="Elemental HERO Neos" title="Elemental HERO Neos" class="img-responsive" /> </a>
                <div class="button-group">
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                </div>
              </div>
                
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Elemental HERO Neos">Elemental HERO Neos</a></h4>
                <p class="price product-price"> <span class="price-new"> 5&cent;</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                <button type="button" class="addtocart-btn" >Add To Cart</button>
              </div>
            </div>
          </div>
            
            <!---------------------------------------------------------------------------------->
          <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Elemental%20HERO%20The%20Shinning.jpg" alt="Elemental HERO The Shining" title="Elemental HERO The Shining" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">Elemental HERO The Shining</a></h4>
                <p class="price product-price"> <span class="price-new">$2.33</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
                
              <div class="button-group">
                <button type="button" class="addtocart-btn" >Add To Cart</button>
              </div>
            </div>
          </div>
            
            <!---------------------------------------------------------------------------------->
          <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Elemental%20HERO%20Shadow%20Mist.jpg" alt="Elemental HERO Shadow Mist" title="Elemental HERO Shadow Mist" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Elemental HERO Shadow Mist">Elemental HERO Shadow Mist</a></h4>
                <p class="price product-price"> <span class="price-new">$1.60</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
               
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            
            <!---------------------------------------------------------------------------------->
          <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="#"> <img src="image/product/Destiny%20HERO%20Plasma.jpg" alt="Destiny HERO Plasma" title="Destiny HERO Plasma" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Destiny HERO Plasma">Destiny HERO Plasma</a></h4>
                <p class="price product-price"> <span class="price-new">50&cent;</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            
            <!---------------------------------------------------------------------------------->
          <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Evil%20Hero%20Malicious%20Bane.jpg" alt="Evil Hero Malicious Bane" title="Evil Hero Malicious Bane" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Evil Hero Malicious Bane">Evil Hero Malicious Bane</a></h4>
                <p class="price product-price"> <span class="price-new">$110.00</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            <!---------------------------------------------------------------------------------->
            <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Masked%20HERO%20Anki.jpg" alt="Masked HERO Anki" title="Masked HERO Anki" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Masked HERO Anki">Masked HERO Anki</a></h4>
                <p class="price product-price"> <span class="price-new">$2.09</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            <!---------------------------------------------------------------------------------->
            <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Masked%20HERO%20Acid.jpg" alt="Masked HERO Acid" title="Masked HERO Acid" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Masked HERO Anki">Masked HERO Acid</a></h4>
                <p class="price product-price"> <span class="price-new">$30.09</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            
             <!---------------------------------------------------------------------------------->
            <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Destiny%20HERO%20King%20Alucard.png" alt="Destiny HERO King Alucard" title="Destiny HERO King Alucard" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Destiny HERO King Alucard">Destiny HERO King Alucard</a></h4>
                <p class="price product-price"> <span class="price-new">$2.13</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            <!---------------------------------------------------------------------------------->
            <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Elemental%20HERO%20Brave%20Neos.jpg" alt="Elemental HERO Brave Neos" title="Elemental HERO Brave Neos" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Elemental HERO Brave Neos">Elemental HERO Brave Neos</a></h4>
                <p class="price product-price"> <span class="price-new">37&cent;</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            
            <!---------------------------------------------------------------------------------->
            <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Elemental%20HERO%20Divine%20Neos.jpg" alt="Elemental HERO Divine Neos" title="Elemental HERO Divine Neos" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Elemental HERO Divine Neos">Elemental HERO Divine Neos</a></h4>
                <p class="price product-price"> <span class="price-new">$3.72</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            
            <!---------------------------------------------------------------------------------->
            <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Elemental%20HERO%20Liquidman.png" alt="Elemental HERO Liquidman" title="Elemental HERO Liquidman" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Elemental HERO Liquidman">Elemental HERO Liquidman</a></h4>
                <p class="price product-price"> <span class="price-new">$49.99</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            <!---------------------------------------------------------------------------------->
            <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Elemental%20HERO%20Solid%20Soldier.jpg" alt="Elemental HERO Solid Soldier" title="Elemental HERO Solid Soldier" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Elemental HERO Solid Soldier">Elemental HERO Solid Soldier</a></h4>
                <p class="price product-price"> <span class="price-new">$3.38</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            
            <!---------------------------------------------------------------------------------->
            <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Elemental%20HERO%20Sunrise.png" alt="Elemental HERO Sunrise" title="Elemental HERO Sunrise" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Elemental HERO Sunrise">Elemental HERO Sunrise</a></h4>
                <p class="price product-price"> <span class="price-new">$4.87</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            
            <!---------------------------------------------------------------------------------->
            <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Vision%20HERO%20Faris.png" alt="Vision HERO Faris" title="Vision HERO Faris" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Vision HERO Faris">Vision HERO Faris</a></h4>
                <p class="price product-price"> <span class="price-new">$8.17</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            
            <!---------------------------------------------------------------------------------->
            <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Vision%20HERO%20Adoration.png" alt="Vision HERO Adoration" title="Vision HERO Adoration" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Vision HERO Adoration">Vision HERO Adoration</a></h4>
                <p class="price product-price"> <span class="price-new">$3.37</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            
                        <!---------------------------------------------------------------------------------->
            <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/Vision%20HERO%20Trinity.png" alt="Vision HERO Trinity" title="Vision HERO Trinity" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Vision HERO Trinity">Vision HERO Trinity</a></h4>
                <p class="price product-price"> <span class="price-new">$4.67</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
            <!---------------------------------------------------------------------------------->
          <div class="item product-slider-item">
            <div class="product-thumb transition">
              <div class="image product-imageblock"> <a href="#"> <img src="image/product/Masked%20HERO%20Dark%20Law.jpg" alt="Masked HERO Dark Law" title="Masked HERO Dark Law" class="img-responsive" /> </a>
                <div class="button-group">
                  
                  <button type="button" class="addtocart-btn" >Add To Cart</button>
                  
                </div>
              </div>
            
              <div class="caption product-detail">
                <h4 class="product-name"><a href="product.html" title="Masked HERO Dark Law">Masked HERO Dark Law</a></h4>
                <p class="price product-price"> <span class="price-new">52&cent;</span> <span class="price-tax">Tax: 7%</span> </p>
              </div>
              <div class="button-group">
                
                <button type="button" class="addtocart-btn" >Add To Cart</button>
                
              </div>
            </div>
          </div>
        </div>
      </div>
 <!---------------------------------------------------------------------------------->
      
    </div>
  </div>
  <div id="subbanner4" class="banner" >
  <div class="item"> <a href="#"><img src="image/banners/subbanner4.jpg" alt="Sub Banner4" class="img-responsive" /></a> </div>
</div>  
</div>
    
<footer>
  <div class="container">
  <hr>
    <div class="row">
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">Information</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="checkout.html">Delivery Information</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
          <!--<li><a href="#">Returns</a></li>-->
          <!--<li><a href="#">Wish List</a></li>-->
        </ul>
      </div>

      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">My Account</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="#">Sign in</a></li>
          <li><a href="#">View Cart</a></li>
          <li><a href="#">Checkout</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <div class="content_footercms_right">
          <div class="footer-contact">
            <h5 class="contact-title footer-title">Contact Us</h5>
            <ul class="ul-wrapper">
              <li><i class="fa fa-map-marker"></i><span class="location2"> University Gardens,<br>
                00612 Street 15, Puerto Rico<br>
                USA</span></li>
              <li><i class="fa fa-envelope"></i><span class="mail2"><a href="#">info@localhost.com</a></span></li>
              <li><i class="fa fa-mobile"></i><span class="phone2">+1 939-349-5016<br>+1 939-419-1105</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   
          <div class="footer-social">
            <h5>Social</h5>
            <ul>
              <li class="facebook"><a href="facebook.com"><i class="fa fa-facebook"></i></a></li>
              <li class="linkedin"><a href="linkedin.com"><i class="fa fa-linkedin"></i></a></li>
              <li class="twitter"><a href="twitter.com"><i class="fa fa-twitter"></i></a></li>
              <li class="gplus"><a href="goolgeplus.com"><i class="fa fa-google-plus"></i></a></li>
              <li class="youtube"><a href="youtube.com"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>

  <a id="scrollup">Scroll</a> 
</footer>
    
<div class="footer-bottom">
  <div class="container">
    <div class="copyright">Powered By &nbsp; TheShadowRealm &copy; 2020 </div>
    <div class="footer-bottom-cms">
      <div class="footer-payment">
        <ul>
          <li class="mastero"><a href="#"><img alt="" src="image/payment/mastero.jpg"></a></li>
          <li class="visa"><a href="#"><img alt="" src="image/payment/visa.jpg"></a></li>
          <li class="currus"><a href="#"><img alt="" src="image/payment/currus.jpg"></a></li>
          <li class="discover"><a href="#"><img alt="" src="image/payment/discover.jpg"></a></li>
          <li class="bank"><a href="#"><img alt="" src="image/payment/bank.jpg"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script src="javascript/parally.js"></script> 
<script>
$('.parallax').parally({offset: -40});
</script>
</body>
</html>
